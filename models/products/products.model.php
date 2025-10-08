<?php
class Product
{

    public $id, $code, $name, $selling_price, $purchase_price, $description, $barcode, $alert_quantity, $discount_type;

    public function __construct($id = null, $code, $name, $selling_price, $purchase_price, $description, $barcode, $alert_quantity, $discount_type)
    {
        $this->id = $id;
        $this->code = $code;
        $this->name = $name;
        $this->selling_price = $selling_price;
        $this->purchase_price = $purchase_price;
        $this->description = $description;
        $this->barcode = $barcode;
        $this->alert_quantity = $alert_quantity;
        $this->discount_type = $discount_type;
    }

    // Fetch

    public static function getAllProducts()
    {
        global $db;
        $sql = $db->prepare("SELECT p.id, p.sku as code, pi.image_path,p.name,c.name as category,u.name as unit,p.selling_price, p.purchase_price from products as p LEFT JOIN categories as c ON p.category_id = c.id LEFT JOIN units as u ON p.unit_id = u.id LEFT JOIN product_images as pi ON p.id = pi.product_id  GROUP BY p.id");
        $sql->execute();
        $result = $sql->get_result();
        $data = $result->fetch_all(MYSQLI_ASSOC);
        return $data;
    }
    // Save

    public function saveProduct()
    {
        global $db;
        $stmt = $db->prepare("INSERT into products (sku, name, selling_price, purchase_price, description, barcode, alert_quantity,discount_type) VALUES(?,?,?,?,?,?,?,?)");
        $stmt->bind_param("ssiissis", $this->code, $this->name, $this->selling_price, $this->purchase_price, $this->description, $this->barcode, $this->alert_quantity, $this->discount_type);
        $stmt->execute();
        return $db->insert_id;
    }
    // Find to get Values For Edit
    public static function findProduct($id)
    {
        global $db;
        $stmt = $db->prepare("SELECT * from products WHERE id= ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $data = $result->fetch_all(MYSQLI_ASSOC);
        return $data;
    }
    public static function findProductRow($id)
    {
        global $db;
        $stmt = $db->prepare("SELECT * from products WHERE id= ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $data = $result->fetch_assoc();
        return $data;
    }
    public static function findMainImage($product_id)
    {
        global $db;
        $stmt = $db->prepare("SELECT image_path FROM product_images WHERE product_id = ? AND is_main = 1 LIMIT 1");
        $stmt->bind_param("i", $product_id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc()['image_path'] ?? null;
    }

    public static function findGalleryImage($id)
    {
        global $db;
        $stmt = $db->prepare("SELECT * from product_images WHERE product_id= ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $galleryImages = $result->fetch_all(MYSQLI_ASSOC);
        return $galleryImages;
    }

    // Update
    public function updateProduct() {}


    // Delete 
    public static function deleteProduct($id)
    {
        global $db;
        $stmt = $db->prepare("DELETE FROM products WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
    }
    public static function deleteProductMainImage($id)
    {
        global $db;
        $stmt = $db->prepare("DELETE FROM product_images WHERE product_id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
    }
}

class ProductImage
{
    public $id, $product_id, $image_path, $is_main;

    public function __construct($id = null, $product_id, $image_path, $is_main)
    {
        $this->id = $id;
        $this->product_id = $product_id;
        $this->image_path = $image_path;
        $this->is_main = $is_main;
    }

    public function saveProductImage()
    {
        global $db;
        $stmt = $db->prepare("INSERT INTO product_images (product_id, image_path,is_main) VALUES (?, ?,?)");
        $stmt->bind_param("isi", $this->product_id, $this->image_path, $this->is_main);
        $stmt->execute();
        return true;
    }
}
