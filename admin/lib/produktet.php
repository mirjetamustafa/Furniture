<?php

namespace Admin\Lib;

use \PDO;

class Produktet extends Database {

    private $produkti_id;

    private $name;

    private $description;

    private $price;

    private $image_name;

    private $category_id;

    public function setProdukti_id($produkti_id){
        $this->produkti_id = $produkti_id;
    }
    public function getProdukti_id(){
        return $this->produkti_id;
    }

    public function setName($name){
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }

    public function setDescription($description){
        $this->description = $description;
    }
    public function getDescription(){
        return $this->description;
    }

    public function setPrice($price){
        $this->price = $price;
    }
    public function getPrice(){
        return $this->price;
    }

    public function setImage_name($image_name){
        $this->image_name = $image_name;
    }
    public function getImage_name(){
        return $this->image_name;
    }

    public function setCategory_id($category_id){
        $this->category_id = $category_id;
    }
    public function getCategory_id(){
        return $this->category_id;
    }

    public function find_all_produkti(){
        $sql = "SELECT * FROM produkti";

        $stmt = $this->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function find_produkti_id($produkti_id){
        $this->produkti_id = $produkti_id;

        $sql = "SELECT * FROM produkti WHERE produkti_id = :produkti_id";

        $stmt = $this->prepare($sql);

        $stmt->bindParam(':produkti_id', $this->produkti_id);

        $stmt->execute();

        return $stmt->fetchObject();
    }
}