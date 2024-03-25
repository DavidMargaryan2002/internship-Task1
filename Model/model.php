<?php

class Model
{
    private $conn;

    public function __construct()
    {
        $host = "localhost";
        $db_name = "registration";
        $username = "root";
        $password = "";

        try {
            $this->conn = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public function __destruct()
    {
        $this->conn = null;
    }

    public function insertUser($name, $surname, $email, $phone, $age, $password)
    {
        $query = "INSERT INTO `users` (`us_id`, `name`, `surname`, `email`, `phone`, `age`, `password`) VALUES (NULL, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$name, $surname, $email, $phone, $age, $password]);
    }
}

