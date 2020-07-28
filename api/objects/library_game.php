<?php
class LibraryGame{
  
    // database connection and table name
    private $conn;
    private $table_name = "library";
  
    // object properties
    public $id;
    public $name;
  
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }

    function read(){
  
    // select all query
    $query = "SELECT name FROM library";
  
    // prepare query statement
    $stmt = $this->conn->prepare($query);
  
    // execute query
    $stmt->execute();
  
    return $stmt;
}}
?>