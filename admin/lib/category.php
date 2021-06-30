<?php

namespace Admin\Lib;

use \PDO,\PDOException;

class Category extends Database {

    //emri i tabeles
    protected static $db_table = "category";

    //fushat qe perdoren per metoden create
    protected static $db_table_fields = array('name');

    private $id;

    private $name;

    public function setId($id){
        $this->id = $id;
    }
    public function getId(){
        return $this->id;
    }

    public function setName($name){
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }

    // public function find_all_categories(){
    //     $sql = "SELECT * FROM category";

    //     $stmt = $this->prepare($sql);

    //     $stmt->execute();

    //     return $stmt->fetchAll(PDO::FETCH_OBJ);
    // }

    // public function find_category_id($category_id){
    //     $this->category_id = $category_id;

    //     $sql = "SELECT * FROM category WHERE category_id = :category_id";

    //     $stmt = $this->prepare($sql);

    //     $stmt->bindParam(':category_id',$this->category_id);

    //     $stmt->execute();

    //     return $stmt->fetchObject();
    // }
}