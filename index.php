<?php

session_start();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Page</title>
    <link rel="stylesheet" href="Css/style.css" type="text/css">
</head>
<body>
<div class="container">
    <div><h1>Registration Page</h1></div>
    <form method="post" action="Controller/reg_check.php">
        <input type="text" class="first_name" name="firstname" placeholder="First Name">
        <input type="text" class="lastname" name="lastname" placeholder="Last Name">
        <input type="email" class="email" name="email" placeholder="Email">
        <input type="number" class="phone" name="phone" placeholder="Contact Number">
        <input type="number" class="age" name="age" placeholder="Age">
        <input type="password" class="password" name="password" placeholder="Password">
        <input type="password" class="conf_pass" name="confirm_password" placeholder="Confirm password">
        <button class="reg_btn" name="btn_registration">Registration</button>
    </form>
    <div class="error">
        <?php if(isset($_SESSION['error'])): ?>
            <div class="error-message">
                <h2>Error!</h2>
                <p><?= $_SESSION['error']; ?></p>
            </div>
        <?php endif; ?>
        <?php session_unset(); ?>
    </div>
</div>
</body>
</html>
