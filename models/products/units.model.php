<?php

class Unit
{

    public $id, $name, $short_name;


    public function __construct($name, $short_name, $id = null)
    {
        $this->name = $name;
        $this->short_name = $short_name;
        $this->id = $id;
    }

    public static function getAllUnits()
    {
        global $db;
        $stmt = $db->prepare("SELECT * from units");
        $stmt->execute();
        $result = $stmt->get_result();
        $data = $result->fetch_all(MYSQLI_ASSOC);
        return $data;
    }

    public function saveUnit()
    {
        global $db;
        $stmt = $db->prepare("INSERT INTO units (name, short_name)
        VALUES (?, ?)");
        $stmt->bind_param("ss", $this->name, $this->short_name);
        $stmt->execute();
        return true;
    }

    public function updateUnit()
    {
        global $db;
        $this->id = intval($this->id);
        $stmt = $db->prepare("
        UPDATE units 
        SET name = ?, short_name = ? WHERE id = ?");
        $stmt->bind_param("ssi", $this->name, $this->short_name, $this->id);
        return $stmt->execute();
    }
    public static function deleteUnit($id)
    {
        global $db;
        $stmt = $db->prepare("DELETE FROM units WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
    }
}
