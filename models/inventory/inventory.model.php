<?php


class Inventory{

    public $id, $quantity;

    public function __construct($id, $quantity)
    {
        $this->id = $id;
        $this->id = $quantity;

    }

    public static function getAllInventoy(){
        global $db;
        $stmt = $db->prepare("SELECT pi.image_path, p.name, p.sku as code, u.name, i.quantity  ");
    }
}

