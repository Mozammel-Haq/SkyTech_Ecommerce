<?php
class ProductsController
{
    public function __construct() {}

    // Product Functions

    public function index()
    {
        $data = Product::getAllProducts();
        view("products", $data);
    }
    public function add()
    {
        view("products");
    }
    public function edit($id)
    {
        $product = Product::findProduct($id);
        $mainImage = Product::findMainImage($id);
        $gallery = Product::findGalleryImage($id);
        $data = [
            'product' => $product,
            'mainImage' => $mainImage,
            'gallery' => $gallery
        ];
        view("products", $data);
    }

    public function saveProduct()
    {
        if (!isset($_POST['save_btn'])) {
            return false;
        }

        global $db;
        // Product data from POST
        $code = $_POST['code'];
        $name = $_POST['name'];
        $category_id = $_POST['category'];
        $brand_id = $_POST['brand'];
        $unit_id = $_POST['unit'];
        $selling_price = $_POST['selling_price'];
        $purchase_price = $_POST['purchase_price'];
        $description = $_POST['description'];
        $barcode = $_POST['barcode'];
        $alert_quantity = $_POST['alert_quantity'];
        $discount = $_POST['discount'];

        // Insert product
        $stmt = $db->prepare("INSERT INTO products (sku, name, selling_price, purchase_price, description, barcode, alert_quantity, discount) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        if (!$stmt) {
            die("Prepare failed: " . $db->error);
        }
        $stmt->bind_param("ssiissis", $code, $name, $selling_price, $purchase_price, $description, $barcode, $alert_quantity, $discount);
        if (!$stmt->execute()) {
            die("Execute failed: " . $stmt->error);
        }
        $product_id = $db->insert_id;
        $stmt->close();

        // Upload directory
        $uploadDir = __DIR__ . "/../../assets/img/products/";
        if (!is_dir($uploadDir)) mkdir($uploadDir, 0777, true);

        // Main image
        if (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {
            $image_name = basename($_FILES['image']['name']);
            if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadDir . $image_name)) {
                $image = new ProductImage($product_id, $image_name, 1, null);
                if (!$image->saveProductImage()) {
                    echo "Failed to save main image record.<br>";
                }
            } else {
                echo "Failed to move main image.<br>";
            }
        }

        // Gallery images
        if (isset($_FILES['gallery']) && !empty($_FILES['gallery']['name'][0])) {
            foreach ($_FILES['gallery']['name'] as $key => $name) {
                $tmp = $_FILES['gallery']['tmp_name'][$key];
                $error = $_FILES['gallery']['error'][$key];

                if ($error !== 0) {
                    echo "Error uploading '$name': code $error<br>";
                    continue;
                }

                $fileName = basename($name);

                if (!is_dir($uploadDir)) mkdir($uploadDir, 0777, true);

                if (move_uploaded_file($tmp, $uploadDir . $fileName)) {
                    echo "File moved successfully: $fileName<br>";
                    $gallery = new ProductImage($product_id, $fileName, 0, null);
                    if ($gallery->saveProductImage()) {
                        echo "Database record created for gallery image: $fileName<br>";
                    } else {
                        echo "Failed to save DB record for gallery image: $fileName<br>";
                    }
                } else {
                    echo "Failed to move file: $fileName<br>";
                }
            }
        } else {
            echo "No gallery files uploaded.<br>";
        }


        // Update category, brand, unit
        $stmt = $db->prepare("UPDATE products SET category_id = ?, brand_id = ?, unit_id = ? WHERE id = ?");
        if (!$stmt) die("Prepare failed: " . $db->error);
        $stmt->bind_param("iiii", $category_id, $brand_id, $unit_id, $product_id);
        if (!$stmt->execute()) die("Execute failed: " . $stmt->error);
        $stmt->close();
        redirect("index");
    }


    public function updateProduct($id)
    {
        global $db;

        if (isset($_POST['update_btn'])) {

            // Keep variable names exactly as DB columns
            $name           = $_POST['name'];
            $sku            = $_POST['code'];
            $category_id    = (int)$_POST['category'];
            $brand_id       = (int)($_POST['brand'] ?? 0);
            $unit_id        = (int)$_POST['unit'];
            $selling_price  = (float)$_POST['selling_price'];
            $purchase_price = (float)$_POST['purchase_price'];
            $discount       = (float)($_POST['discount'] ?? 0);
            $barcode        = $_POST['barcode'];
            $alert_quantity = (int)$_POST['alert_quantity'];
            $tax_id         = (int)$_POST['tax'];
            $description    = $_POST['description'];

            // --- HANDLE MAIN IMAGE UPLOAD ---
            $image_name = $_POST['old_image'] ?? '';
            if (!empty($_FILES['image']['name'])) {
                $uploadDir = __DIR__ . "/../../assets/img/products/";
                if (!is_dir($uploadDir)) mkdir($uploadDir, 0777, true);

                $image_name = basename($_FILES['image']['name']);
                $targetPath = $uploadDir . $image_name;

                if (!move_uploaded_file($_FILES['image']['tmp_name'], $targetPath)) {
                    echo "Image upload failed!";
                    return;
                }
            }

            // --- UPDATE products TABLE ---
            $stmt = $db->prepare("UPDATE products 
            SET name=?, sku=?, category_id=?, brand_id=?, unit_id=?, selling_price=?, purchase_price=?, discount=?, barcode=?, alert_quantity=?, tax_id=?, description=? 
            WHERE id=?");

            $stmt->bind_param(
                "ssiiidddsisii",
                $name,
                $sku,
                $category_id,
                $brand_id,
                $unit_id,
                $selling_price,
                $purchase_price,
                $discount,
                $barcode,
                $alert_quantity,
                $tax_id,
                $description,
                $id
            );

            $stmt->execute();
            $stmt->close();

            // --- UPDATE OR INSERT MAIN IMAGE ---
            $stmt = $db->prepare("SELECT id FROM product_images WHERE product_id=? AND is_main=1");
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $result = $stmt->get_result();
            $existingMain = $result->fetch_assoc();
            $result->free();
            $stmt->close();

            if ($existingMain) {
                $stmt = $db->prepare("UPDATE product_images SET image_path=?, is_main=1 WHERE product_id=? AND is_main=1");
                $stmt->bind_param("si", $image_name, $id);
                $stmt->execute();
                $stmt->close();
            } elseif (!empty($image_name)) {
                $stmt = $db->prepare("INSERT INTO product_images (product_id, image_path, is_main) VALUES (?, ?, 1)");
                $stmt->bind_param("is", $id, $image_name);
                $stmt->execute();
                $stmt->close();
            }

            // --- HANDLE GALLERY IMAGES ---
            if (!empty($_FILES['gallery']['name'][0])) {
                $uploadDir = __DIR__ . "/../../assets/img/products/";
                if (!is_dir($uploadDir)) mkdir($uploadDir, 0777, true);

                foreach ($_FILES['gallery']['tmp_name'] as $key => $tmp_name) {
                    $gallery_name = basename($_FILES['gallery']['name'][$key]);
                    $targetPath = $uploadDir . $gallery_name;

                    if (move_uploaded_file($tmp_name, $targetPath)) {
                        $stmt = $db->prepare("INSERT INTO product_images (product_id, image_path, is_main) VALUES (?, ?, 0)");
                        $stmt->bind_param("is", $id, $gallery_name);
                        $stmt->execute();
                        $stmt->close();
                    }
                }
            }

            redirect("");
        }
    }

    public function deleteProduct($id)
    {
        Product::deleteProduct($id);
        Product::deleteProductMainImage($id);
        redirect("index");
    }




    // Category Functions
    public function categories()
    {
        $data = Category::getAllCategories();
        view("products", $data,);
    }
    // ADD
    public function saveCategory()
    {
        if (isset($_POST['submit_btn'])) {
            $name = $_POST['name'];
            $desc = $_POST['description'];
            $status = isset($_POST['status']) ? 1 : 0;

            // image upload
            $image = null;
            if (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {
                $uploadDir = __DIR__ . "/../../assets/img/products/";
                $fileName = basename($_FILES['image']['name']);
                $fileTmp = $_FILES['image']['tmp_name'];

                if (move_uploaded_file($fileTmp, $uploadDir . $fileName)) {
                    $image = $fileName;
                } else {
                    $image = null;
                }
            }
            $save = new Category($name, $desc, $image, $status);
            $save->saveCategory();
            redirect("categories");
        }
    }

    // update
    public function updateCategory()
    {
        if (isset($_POST['update_btn'])) {
            $id     = intval($_POST['id']);
            $name   = $_POST['name'];
            $desc   = $_POST['description'];
            $status = isset($_POST['status']) ? 1 : 0;

            $image = null;
            //new image
            if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
                $uploadDir = __DIR__ . "/../../assets/img/products/";
                $fileName  = basename($_FILES['image']['name']);
                $target    = $uploadDir . $fileName;

                if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
                    $image = $fileName;
                }
            }
            $update = new Category($name, $desc, $image, $status, $id);
            $update->updateCategory();
            redirect("categories");
        }
    }

    // Delete

    public function deleteCategory($id)
    {
        Category::deleteCategory($id);
        redirect("categories");
    }


    // Units Functions

    public function units()
    {
        $data = Unit::getAllUnits();
        view("products", $data);
    }

    public function saveUnit()
    {
        if (isset($_POST['save_btn'])) {
            $name = $_POST['name'];
            $short_name = $_POST['short_name'];
            $save = new Unit($name, $short_name);
            $save->saveUnit();
            redirect("units");
        }
    }
    public function updateUnit()
    {
        if (isset($_POST['update_btn'])) {
            $id = intval($_POST['id']);
            $name = $_POST['name'];
            $short_name = $_POST['short_name'];
            $update = new Unit($name, $short_name, $id);
            $update->updateUnit();
            redirect("units");
        }
    }
    public function deleteUnit($id)
    {
        Unit::deleteUnit($id);
        redirect("units");
    }


    // Brands Section

    public function brands()
    {
        $data = Brand::getAllBrands();
        view("products", $data);
    }
    public function saveBrand()
    {
        if (isset($_POST['save_btn'])) {
            $name = $_POST['name'];
            $description = $_POST['description'];
            $save = new Brand($name, $description);
            $save->saveBrand();
            redirect("brands");
        }
    }
    public function updateBrand()
    {
        if (isset($_POST['update_btn'])) {
            $id = intval($_POST['id']);
            $name = $_POST['name'];
            $description = $_POST['description'];
            $update = new Brand($name, $description, $id);
            $update->updateBrand();
            redirect("brands");
        }
    }
    public function deleteBrand($id)
    {
        Brand::deleteBrand($id);
        redirect("brands");
    }
}
