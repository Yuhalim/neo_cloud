<?php
include('config.php');
include_once('login.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form class="form" method="post">
        <input type="text" name="email" placeholder="Enter your email" class="input">
        <br><br>
        <input type="password" name="pass" placeholder="Enter your password" class="input">
        <br><br>
        <input type="submit" class="register" value="Log in" name="log">
    </form>
    <div style="color:purple; font-style: italic; text-align: center; font-weight: bold; margin-top: 9px;">
    <?php
        echo $message;
        ?>
    </div>
</body>
</html>