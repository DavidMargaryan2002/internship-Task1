<?php

require_once "../Model/model.php";
session_start();

if(isset($_POST["btn_registration"])) {
    $name = $_POST["firstname"];
    $surname = $_POST["lastname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $age = $_POST["age"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    if(!empty($name) && !empty($surname) && !empty($email) && !empty($phone) && !empty($phone) && !empty($age) && !empty($password) && !empty($confirm_password)) {
        if($password === $confirm_password) {
            $model->insert_user($name, $surname, $email, $phone, $age, $password);
            header("Location: ../index.php");
        } else {
            $_SESSION["error"] = "Սխալ Confirm Password";
            header("Location:../index.php");
        }
    } else {
        $_SESSION["error"] = "Խնդրում ենք լրացնել բոլոր դաշտերը";
        header("Location:../index.php");
    }
}
