<?php

namespace Admin\Lib;
use Exception, PDO,PDOException,ReflectionClass;


require_once "../config/config.php";

class Database {
     
    protected static $db_table;
    protected static $db_table_fields;
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $dbname = DB_NAME;

    public function __construct() {
        $this->connectDB();
    }

    private function connectDB() {
        try{
            $dsn = "mysql:host=".$this->host. ";dbname=".$this->dbname;
            $pdo = new PDO($dsn, $this->user, $this->pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            return $pdo;
        }
        catch(Throwable $e) {
            echo "Lidhja me bazen deshtoi". $e->getMessage();
        }
    }

    public function prepare($sql){
        return $this->connectDB()->prepare($sql);
    }

     public function getClassName(){
        $class_name = new ReflectionClass($this);
        return $class_name=ucfirst($class_name->getShortName());
    }


    protected function properties()
    {
        $properties = array();
        //veqorive ose metodave statike ju qasemi me fjalen kyqe self
        foreach(static::$db_table_fields as $db_field) {
            if(property_exists($this, $db_field)) {
                $properties[$db_field] = $this->$db_field;
            }
        }
        return $properties;
    }

    public function find_all(){
        //$class_name = substr(self::$db_table,0,-1);

        $sql="SELECT * FROM " . static::$db_table;
        
        $stmt=$this->prepare($sql);
        
        $stmt->execute();
        
        $stmt->setFetchMode(PDO::FETCH_CLASS, __NAMESPACE__ . "\\{$this->getClassName()}");
        
        return $stmt->fetchAll();
    }


    public function find_id($id){
        //$class_name=substr(static::$db_table,0,-1);

        $sql="SELECT * FROM ". static::$db_table ." WHERE id=:id";
        
        $stmt=$this->prepare($sql);
        
        $stmt->bindParam(':id',$id);
        
        $stmt->execute();
        
        $stmt->setFetchMode(PDO::FETCH_CLASS, __NAMESPACE__ . "\\{$this->getClassName()}");
        
        return $stmt->fetch();
    }



    public function create(){
        try{
            $properties = $this->properties();

            $sql = "INSERT INTO " . static::$db_table . "(" . implode(",",array_keys($properties)) . ")";

            $sql.= "VALUES ('".implode("','",array_values($properties)). "')";

            $stmt = $this->prepare($sql);

            $stmt->execute();

            echo "<div class='text-success'>{$this->getClassName()} Added Successfully</div>";
        }
        catch(PDOException $e){
            die("<div class='text-danger'>Error during the registration proccess".$e->getMessage());
        }
    }
   

    public function update(){
        try {
            
            $proporties=$this->properties();
            
            $proporties_pair=array();
            
            foreach ($proporties as $key => $value) {
            
                $proporties_pair[]="{$key}='{$value}'";
            
            }
            
            $sql="UPDATE ". static::$db_table . " SET ";
            
            $sql.=implode(", ", $proporties_pair);
            
            $sql.=" WHERE id=:id";
            
            $stmt=$this->prepare($sql);
            
            $stmt->bindParam(':id',$this->id);
            
            $stmt->execute();
            
            echo "<div class='text-success'>{$this->getClassName()} Modified Successfully</div>";
            } 
            catch (PDOException $e) {
                die("Error during the modification proccess" . $e->getMessage());
        }
    }

    

 

    public function delete(){
        try {
           
            $sql="DELETE FROM " . static::$db_table ." WHERE id=:id";
           
            $stmt=$this->prepare($sql);
           
            $stmt->bindParam(':id',$this->id, PDO::PARAM_INT);
           
            $stmt->execute();
           
            echo "<div class='text-success'>{$this->getClassName()} Deleted Successfully</div>";
           
            } 
            catch (PDOException $e) {
                die("Error during the deletion proccess" . $e->getMessage());
            }
        }
    


    
}