<?php

class Brand
{

    public $id, $name, $desc;


    public function __construct($name, $desc, $id = null)
    {
        $this->name = $name;
        $this->desc = $desc;
        $this->id = $id;
    }

    public static function getAllBrands()
    {
        global $db;
        $stmt = $db->prepare("SELECT * from brands");
        $stmt->execute();
        $result = $stmt->get_result();
        $data = $result->fetch_all(MYSQLI_ASSOC);
        return $data;
    }

    public function saveBrand()
    {
        global $db;
        $stmt = $db->prepare("INSERT INTO brands (name, description)
        VALUES (?, ?)");
        $stmt->bind_param("ss", $this->name, $this->desc);
        $stmt->execute();
        return true;
    }

    public function updateBrand()
    {
        global $db;
        $this->id = intval($this->id);
        $stmt = $db->prepare("
        UPDATE brands 
        SET name = ?, description = ? WHERE id = ?");
        $stmt->bind_param("ssi", $this->name, $this->desc, $this->id);
        return $stmt->execute();
    }
    public static function deleteBrand($id)
    {
        global $db;
        $stmt = $db->prepare("DELETE FROM brands WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
    }
}
