<?php
// used to get mysql database connection
class Database{
 
    // specify your own database credentials
    private $host = "ibu-db-server.adnan.dev:3306";
    private $db_name = "db_inas_a";
    private $username = "inas-a";
    private $password = "Bf2aPz6C";
    public $conn;
 
    // get the database connection
    public function getConnection(){
 
        $this->conn = null;
 
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
 
        return $this->conn;
    }
}
?>