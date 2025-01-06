<?php

class Coon {
    private $coon = null; 
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $database = "ecommerce";

    function __construct() {
        $this->coon = new mysqli($this->host, $this->user, $this->password, $this->database);
        if ($this->coon->connect_error) {
            die("Connection failed: " . $this->coon->connect_error);
        }
    }

    public function closeConnection() {
        if ($this->coon !== null) {
            $this->coon->close();
        }
    }

    public function getConnection() {
        return $this->coon;
    }

    public function insert($fullname, $email, $phone_number, $password) {
        $stmt = $this->coon->prepare("INSERT INTO users (username, email, phone_number, password_hash) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $fullname, $email, $phone_number, $password);
        
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
    

    function __destruct() {
        $this->closeConnection();
    }
}

?>
