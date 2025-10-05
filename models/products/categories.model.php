<?php


class Category
{

    public $id, $name, $desc, $image, $status;

    public function __construct($name, $desc, $image, $status, $id = null)
    {
        $this->name = $name;
        $this->desc = $desc;
        $this->image = $image;
        $this->status = $status;
        $this->id = $id;
    }

    public static function getAllCategories()
    {
        global $db;
        $stmt = $db->query("SELECT * from categories");
        $data = $stmt->fetch_all(MYSQLI_ASSOC);
        return $data;
    }
    public function saveCategory()
    {
        global $db;
        $stmt = $db->prepare("INSERT INTO categories (name, description, image_path, status)
        VALUES (?, ?, ?, ?)");
        $stmt->bind_param("sssi", $this->name, $this->desc, $this->image, $this->status);
        $stmt->execute();
        return true;
    }
    // public static function findCategory($id)
    // {
    //     global $db;
    //     $stmt = $db->prepare("SELECT * FROM categories WHERE id = ?");
    //     $stmt->bind_param("i", $id);
    //     $stmt->execute();
    //     $result = $stmt->get_result();
    //     $data = $result->fetch_assoc();
    //     return $data;
    // }
    public function updateCategory()
    {
        global $db;
        $this->id = intval($this->id);
        // If no new image uploaded, keep the old one
        if (empty($this->image)) {
            $stmt = $db->prepare("SELECT image_path FROM categories WHERE id = ?");
            $stmt->bind_param("i", $this->id);
            $stmt->execute();
            $result = $stmt->get_result();
            $old = $result->fetch_assoc();
            $this->image = $old['image_path'];
        }

        // Update query
        $stmt = $db->prepare("
        UPDATE categories 
        SET name = ?, description = ?, image_path = ?, status = ? 
        WHERE id = ?");
        $stmt->bind_param("sssii", $this->name, $this->desc, $this->image, $this->status, $this->id);
        return $stmt->execute();
    }

    public static function deleteCategory($id)
    {
        global $db;
        $stmt = $db->prepare("DELETE FROM categories WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
    }
}
