<?php

namespace Admin\Lib;

use \PDO,\PDOException;

class Category extends Database {

    //emri i tabeles
    protected static $db_table = "category";

    //fushat qe perdoren per metoden create
    protected static $db_table_fields = array('name','description');

    public $id;

    public $name;

    public $description;

  

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

   

    // public function find_all_produkti(){
    //     $sql = "SELECT * FROM produkti";

    //     $stmt = $this->prepare($sql);

    //     $stmt->execute();

    //     return $stmt->fetchAll(PDO::FETCH_OBJ);
    // }

    // public function find_produkti_id($produkti_id){
    //     $this->produkti_id = $produkti_id;

    //     $sql = "SELECT * FROM produkti WHERE produkti_id = :produkti_id";

    //     $stmt = $this->prepare($sql);

    //     $stmt->bindParam(':produkti_id', $this->produkti_id);

    //     $stmt->execute();

    //     return $stmt->fetchObject();
    // }
}