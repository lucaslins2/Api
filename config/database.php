<?php
class Database{
 
    // specify your own database credentials
  /*  private $host = "localhost";
    private $db_name = "phplearning";
    private $username = "root";
    private $password = "";
  */
    private $host = "localhost";
    private $db_name = "u683914129_api";
    private $username = "u683914129_zezinho";
    private $password = "Y!kt?=C#9Nn7";
        
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