<?php
class User{
 
    private $conn;
    private $table_name = "User";
 
    // object properties
    public $id;
    public $username;
    public $password;
    public $created;
 
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }

    // login user method
    function login(){
        $query = "SELECT
                    `id`, `username`, `password_hash`, `name`, `auth_key`
                FROM
                    " . $this->table_name . " 
                WHERE
                    email='".$this->email."' AND password='".$this->password."'";
        // prepare query statement
        $stmt = $this->conn->prepare($query);
        // execute query
        $stmt->execute();
        return $stmt;
    }
}