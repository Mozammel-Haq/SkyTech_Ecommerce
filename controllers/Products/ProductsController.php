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
        $discount_type = $_POST['discount_type'];

        // Insert product
        $stmt = $db->prepare("INSERT INTO products (sku, name, selling_price, purchase_price, description, barcode, alert_quantity, discount_type) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        if (!$stmt) {
            die("Prepare failed: " . $db->error);
        }
        $stmt->bind_param("ssiissis", $code, $name, $selling_price, $purchase_price, $description, $barcode, $alert_quantity, $discount_type);
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
                $image = new ProductImage(null, $product_id, $image_name, 1);
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
                    $gallery = new ProductImage(null, $product_id, $fileName, 0);
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
            $name = $_POST['name'];
            $code = $_POST['code'];
            $category = $_POST['category'];
            $selling_price = $_POST['selling_price'];
            $purchase_price = $_POST['purchase_price'];
            $unit = $_POST['unit'];
            $discount_type = $_POST['discount_type'];
            $barcode = $_POST['barcode'];
            $alert_quantity = $_POST['alert_quantity'];
            $tax = $_POST['tax'];
            $description = $_POST['description'];

            // Handle image upload
            $image_name = $_POST['old_image'] ?? '';
            if (!empty($_FILES['image']['name'])) {
                $uploadDir = __DIR__ . "/../../assets/img/products/";
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0777, true);
                }
                $image_name = basename($_FILES['image']['name']);
                $targetPath = $uploadDir . $image_name;

                if (!move_uploaded_file($_FILES['image']['tmp_name'], $targetPath)) {
                    echo "Image upload failed!";
                    return;
                }
            }
            // Update main product info
            $sql = $db->prepare("UPDATE products 
            SET name=?, sku=?, category_id=?, selling_price=?, purchase_price=?, unit_id=?, discount_type=?, barcode=?, alert_quantity=?, tax_id=?, description=? 
            WHERE id=?");
            $sql->execute([$name, $code, $category, $selling_price, $purchase_price, $unit, $discount_type, $barcode, $alert_quantity, $tax, $description, $id]);

            // Check if a product_images row exists
            $check = $db->prepare("SELECT id FROM product_images WHERE product_id=?");
            $check->execute([$id]);
            $existing = $check->fetch();

            if ($existing) {
                // Update existing image row
                $stmt = $db->prepare("UPDATE product_images SET image_path=?, is_main=1 WHERE product_id=?");
                $stmt->execute([$image_name, $id]);
            } else if (!empty($image_name)) {
                // Insert new row if image uploaded
                $stmt = $db->prepare("INSERT INTO product_images (product_id, image_path, is_main) VALUES (?, ?, 1)");
                $stmt->execute([$id, $image_name]);
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
