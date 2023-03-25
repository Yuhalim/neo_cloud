<?php
include('config.php');
include_once('home.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <form method="post" class="form">
        <input type="text" name="fname" placeholder="Enter your first name" class="input">
        <br><br>
        <input type="text" name="lname" placeholder="Enter your last name" class="input">
        <br><br>
        <input type="text" name="user" placeholder="Enter your username" class="input">
        <br><br>
        <input type="number" name="age" placeholder="Enter your age" class="input">
        <br><br>
        <input type="email" name="email" placeholder="Enter your email" class="input">
        <br><br>
        <input type="password" name="pass" placeholder="Enter your password" class="input">
        <br><br>
        <input type="password" name="conf" placeholder="Confirm your password" class="input">
        <br><br>
        <input type="text" name="state" placeholder="Which state are you from" class="input">
        <br><br>
        <input type="submit" name="register" class="register" value="REGISTER">
        <br><br>
    </form>

    <div style="color:purple; font-style: italic; text-align: center; font-weight: bold;">
    <?php
        echo $comment;
        ?>
    </div>
</body>
</html>