<?php

class Database
{
    private $host = "localhost";
    private $db_name = "registration";
    private $username = "your_username";
    private $password = "your_password";
    public $conn;

    public function getConnection()
    {
        $this->conn = null;

        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
    }
}

$database = new Database();
$conn = $database->getConnection();

if ($conn) {
    echo "Connected successfully!";
} else {
    echo "Failed to connect to the database.";
}

?>




