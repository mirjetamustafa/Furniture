<?php

namespace Admin\Lib;
use \PDO,\PDOException;

class Admiin extends Database {

    //emri i tabeles
    protected static $db_table = "admin";

    //fushat qe perdoren per metoden create
    protected static $db_table_fields = array('full_name','username','password');
   
    
    public $id;
    
    public $full_name;
    
    public $username;
    
    public $password;

   

    // public function find_all_admin() {
        
    //     $sql = "SELECT id,full_name,username,password FROM admin";
        
    //     $stmt = $this->prepare($sql);
        
    //     $stmt->execute();

    //     //Kthejm shenimet nga Mysql Object qe krijohet nga tabela admin ne klasen admin

    //     $stmt->setFetchMode(PDO::FETCH_CLASS, __NAMESPACE__."\\Admiin");
        
    //     return $stmt->fetchAll();
    // }

    // public function find_admin_id($id) {
        
    //     $this->id = $id;

    //    // $sql = "SELECT id,full_name,username,password FROM admin";

    //     //$sql.="WHERE id=:id";
    //     $sql = "SELECT * FROM admin WHERE id = :id";


    //     $stmt = $this->prepare($sql);

    //     $stmt->bindParam(':id', $this->id);

    //     $stmt->execute();

    //     //Kthejm shenimet nga Mysql Object qe krijohet nga tabela admin ne klasen admin

    //     $stmt->setFetchMode(PDO::FETCH_CLASS, __NAMESPACE__."\\Admiin");
        
    //     return $stmt->fetch();
    // }

    public function setId($id){
        $this->id = $id;
    }

    public function getId(){
        return $this->id;
    }

    public function setFull_name($full_name){
        $this->full_name = $full_name;
    }

    public function getFull_name(){
        return $this->full_name;
    }

    public function setUsername($username){
        $this->username = $username;
    }

    public function getUsername(){
        return $this->username;
    }

    public function setPassword($password){
        $this->password = $password;
    }

    public function getPassword(){
        return $this->password;
    }

    // public function create_admin(){
    //     try{
    //         $sql = "INSERT INTO admin(full_name,username,password) VALUES";
            
    //         $sql.= "(:full_name,:username,:password)";

    //         $stmt = $this->prepare($sql);

    //         $stmt->bindParam(':full_name', $this->full_name);

    //         $stmt->bindParam(':username', $this->username);

    //         $stmt->bindParam(':password', $this->password);

    //         $stmt->execute();

    //         echo "<div class='text-success'>Admin added successfully</div>";
    //     }

    //     catch(PDOException $e) {
    //         echo "<div class='text-danger'>Error in admin registration process </div>" . $e->getMessage();
    //     }
    // }

    // public function update_admin() {
    //     try{
    //         $sql = "UPDATE  admin SET full_name=:full_name, username=:username,";
            
    //         $sql.= "password=:password WHERE id=:id";

    //         $stmt = $this->prepare($sql);

    //         $stmt->bindParam(':id', $this->id);

    //         $stmt->bindParam(':full_name', $this->full_name);

    //         $stmt->bindParam(':username', $this->username);

    //         $stmt->bindParam(':password', $this->password);

    //         $stmt->execute();

    //         echo "<div class='text-success'>Admin modified successfully</div>";
    //     }

    //     catch(PDOException $e) {
    //         echo "<div class='text-danger'>Error in admin modified process </div>" . $e->getMessage();
    //     }
    // }

    // public function delete_admin(){
    //     try{
    //         $sql = "DELETE FROM admin WHERE id=:id";

    //         $stmt = $this->prepare($sql);

    //         $stmt->bindParam(':id', $this->id);

    //         $stmt->execute();

    //         echo "<div class='text-success'>Admin deleted successfully</div>";
    //     }
    //     catch(PDOException $e) {

    //         echo "<div class='text-danger'>Error in admin deletion process </div>" .$e->getMessage();
    //     }
    // }

    

}