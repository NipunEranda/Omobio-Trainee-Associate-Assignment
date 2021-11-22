<?php

class Database{
 
    private $host = "3.90.204.186";            
    private $db_name = "Exam";       
    private $username = "dev";             
    private $password = "1234";                 
    public $conn;
 
    
    // get the database connection
    public function getConnection(){
 
        $this->conn = null;
 
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
 
        return $this->conn;
    }
}
?>