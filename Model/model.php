<?php

class Model
{
    public $conn;

    public function __construct()
    {
        $this->conn = mysqli_connect("localhost", "root", "", "registration");
        if (!$this->conn) {
            die(mysqli_connect_error($this->conn));
        }
    }

    public function __destruct()
    {
        mysqli_close($this->conn);
    }

    public function insertUser($name, $surname, $email, $phone, $age, $password)
    {
        $query = "INSERT INTO `users` (`us_id`, `name`, `surname`, `email`, `phone`, `age`, `password`) VALUES (NULL, '$name', '$surname', '$email', '$phone', '$age', '$password');";
        $connQuery = mysqli_query($this->conn, $query);
    }

}

$model = new Model();
