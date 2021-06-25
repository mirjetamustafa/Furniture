<?php

namespace Admin\Lib;
use \PDO;

class Admiin extends Database {

    //emri i tabeles
    protected static $db_table = "admin";

    //fushat qe perdoren per metoden create
    protected static $db_table_fields = array('full_name','username','password');
    
    private $admin_id;
    
    private $full_name;
    
    private $username;
    
    private $password;

    protected function properties()
    {
        $properties = array();
        //veqorive ose metodave statike ju qasemi me fjalen kyqe self
        foreach(self::$db_table_fields as $db_field) {
            if(property_exists($this, $db_field)) {
                $properties[$db_field] = $this->$db_field;
            }
        }
        return $properties;
    }

    public function find_all_admin() {
        
        $sql = "SELECT admin_id,full_name,username,password FROM admin";
        
        $stmt = $this->prepare($sql);
        
        $stmt->execute();

        //Kthejm shenimet nga Mysql Object qe krijohet nga tabela admin ne klasen admin

        $stmt->setFetchMode(PDO::FETCH_CLASS, __NAMESPACE__."\\Admiin");
        
        return $stmt->fetchAll();
    }

    public function find_admin_id($admin_id) {
        
        $this->admin_id = $admin_id;

       // $sql = "SELECT admin_id,full_name,username,password FROM admin";

        //$sql.="WHERE admin_id=:admin_id";
        $sql = "SELECT * FROM admin WHERE admin_id = :admin_id";


        $stmt = $this->prepare($sql);

        $stmt->bindParam(':admin_id', $this->admin_id);

        $stmt->execute();

        //Kthejm shenimet nga Mysql Object qe krijohet nga tabela admin ne klasen admin

        $stmt->setFetchMode(PDO::FETCH_CLASS, __NAMESPACE__."\\Admiin");
        
        return $stmt->fetch();
    }

    public function setAdmin_id($admin_id){
        $this->admin_id = $admin_id;
    }

    public function getAdmin_id(){
        return $this->admin_id;
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

    public function create_admin(){
        try{
            $sql = "INSERT INTO admin(full_name,username,password) VALUES";
            
            $sql.= "(:full_name,:username,:password)";

            $stmt = $this->prepare($sql);

            $stmt->bindParam(':full_name', $this->full_name);

            $stmt->bindParam(':username', $this->username);

            $stmt->bindParam(':password', $this->password);

            $stmt->execute();

            echo "<div class='text-success'>Admin added successfully</div>";
        }

        catch(PDOException $e) {
            echo "<div class='text-danger'>Error in admin registration process </div>" . $e->getMessage();
        }
    }

    public function update_admin() {
        try{
            $sql = "UPDATE  admin SET full_name=:full_name, username=:username,";
            
            $sql.= "password=:password WHERE admin_id=:admin_id";

            $stmt = $this->prepare($sql);

            $stmt->bindParam(':admin_id', $this->admin_id);

            $stmt->bindParam(':full_name', $this->full_name);

            $stmt->bindParam(':username', $this->username);

            $stmt->bindParam(':password', $this->password);

            $stmt->execute();

            echo "<div class='text-success'>Admin modified successfully</div>";
        }

        catch(PDOException $e) {
            echo "<div class='text-danger'>Error in admin modified process </div>" . $e->getMessage();
        }
    }

    public function delete_admin(){
        try{
            $sql = "DELETE FROM admin WHERE admin_id=:admin_id";

            $stmt = $this->prepare($sql);

            $stmt->bindParam(':admin_id', $this->admin_id);

            $stmt->execute();

            echo "<div class='text-success'>Admin deleted successfully</div>";
        }
        catch(PDOException $e) {

            echo "<div class='text-danger'>Error in admin deletion process </div>" .$e->getMessage();
        }
    }

    public function create(){
        try{
            $properties = $this->properties();

            $sql = "INSERT INTO " . self::$db_table . "(" . implode(",",array_keys($properties)) . ")";

            $sql.= "VALUES ('".implode("','",array_values($properties)). "')";

            $stmt = $this->prepare($sql);

            $stmt->execute();

            echo "<div class='text-success'>Admin added succesfully</div>";
        }
        catch(PDOException $e){
            die("<div class='text-danger'>Error during the registration proccess".$e->getMessage());
        }
    }
}