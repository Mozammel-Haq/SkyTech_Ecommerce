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
    public function saveProduct()
    {
        if (isset($_POST['save_btn'])) {

            $code = $_POST['code'];
            $name = $_POST['name'];
            $category_id = $_POST['category']; // should hold ID, not name
            $brand_id = $_POST['brand'];       // should hold ID
            $unit_id = $_POST['unit'];         // should hold ID
            $selling_price = $_POST['selling_price'];
            $purchase_price = $_POST['purchase_price'];
            $description = $_POST['description'];
            $barcode = $_POST['barcode'];
            $alert_quantity = $_POST['alert_quantity'];
            $discount_type = $_POST['discount_type'];

            $product = new Product(null, $code, $name, $selling_price, $purchase_price, $description, $barcode, $alert_quantity, $discount_type);
            $product_id = $product->saveProduct();

            // image upload
            $image_name = null;
            if (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {
                $uploadDir = __DIR__ . "/../../assets/img/products/";
                $image_name = basename($_FILES['image']['name']);
                move_uploaded_file($_FILES['image']['tmp_name'], $uploadDir . $image_name);
                $image = new ProductImage(null, $product_id, $image_name);
                $image->saveProductImage();
            }

            // gallery images
            if (!empty($_FILES['gallery']['name'][0])) {
                foreach ($_FILES['gallery']['name'] as $key => $name) {
                    $tmp = $_FILES['gallery']['tmp_name'][$key];
                    $fileName =$name;
                    move_uploaded_file($tmp, $uploadDir . $fileName);
                    $gallery = new ProductImage(null, $product_id, $fileName);
                    $gallery->saveProductImage();
                }
            }

            //Update product
            global $db;
            $stmt = $db->prepare("UPDATE products SET category_id = ?, brand_id = ?, unit_id = ? WHERE id = ?");
            $stmt->bind_param("iiii", $category_id, $brand_id, $unit_id, $product_id);
            $stmt->execute();
            redirect("index");
        }
    }
    public function deleteProduct($id){
        Product::deleteProduct($id);
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

            // Handle image upload
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
            // Handle file upload if new image is provided
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
