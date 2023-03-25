<?php
session_start();

include('config.php');
include('login.php');
include('home.php');
if(isset($_POST['logout'])){
    header('Location:logout.php');
}
if(isset($_POST['view'])){
    header('location:view.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 class="welcome">Welcome to your dashboard,  
        <?php  if(isset($_SESSION['email'])){ 
            $usersess = $_SESSION['email'];
            $sql = "SELECT * FROM db_table WHERE email = '$usersess'";
            $result = mysqli_query($conn , $sql);
              while ($row = mysqli_fetch_assoc($result)) {
                  $id = $row['firstname'];
                  echo $id;
     }
    }?></h1>
    <br><hr><br><br>
    <form method="post">
        <div class="press">
            <input type="submit" value="Log out" class="register" name="logout">
            <input type="submit" value="view" class="register" name="view">

        </div>
    </form>

</body>
</html>