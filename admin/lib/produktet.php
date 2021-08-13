<?php

namespace Admin\Lib;

use \PDO,\PDOException;

class Produktet extends Database {

    //emri i tabeles
    protected static $db_table = "produkti";

    //fushat qe perdoren per metoden create
    protected static $db_table_fields = array('name','description','price','image_name');

    public $id;

    public $name;

    public $description;

    public $price;

    public $image_name;

  

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