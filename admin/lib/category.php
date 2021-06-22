<?php

namespace Admin\Lib;

use \PDO;

class Category extends Database {
    private $category_id;

    private $name;

    public function setCategory_id($category_id){
        $this->category_id = $category_id;
    }
    public function getCategory_id(){
        return $this->category_id;
    }

    public function setName($name){
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }

    public function find_all_categories(){
        $sql = "SELECT * FROM category";

        $stmt = $this->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function find_category_id($category_id){
        $this->category_id = $category_id;

        $sql = "SELECT * FROM category WHERE category_id = :category_id";

        $stmt = $this->prepare($sql);

        $stmt->bindParam(':category_id',$this->category_id);

        $stmt->execute();

        return $stmt->fetchObject();
    }
}