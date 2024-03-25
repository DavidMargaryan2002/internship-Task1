<?php
class Model
{
    public $conn;

    function __construct()
    {
            $this->conn = mysqli_connect("localhost", "root", "", "registration");
        if (!$this->conn) {
            die(mysqli_connect_error($this->conn));
        }
    }

    function __destruct()
    {
        mysqli_close($this->conn);
    }

    function insert_user($name,$surname,$email,$phone,$age,$password)
    {
        $query = "INSERT INTO `users` (`us_id`, `name`, `surname`, `email`, `phone`, `age`, `password`) VALUES (NULL, '$name', '$surname', '$email', '$phone', '$age', '$password');";
        $conn_query = mysqli_query($this->conn, $query);
    }

}
$model = new Model();

