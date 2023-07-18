<?php
include ('config.php');
include_once('home.php');
include_once('log.php');
$message="";
if(isset($_POST['log'])){
    if($_POST['email']!="" && $_POST['pass']!=""){
        $email= $_POST['email'];
        $pass = $_POST['pass'];
        $sql = "SELECT * FROM db_table WHERE email='{$_POST['email']}'";
        $result = mysqli_query($conn , $sql);
        while ($row = mysqli_fetch_assoc($result)){
            $password = $row['password'];
        $access = password_verify($pass, $password);

        if($access===False){
            $message = 'Username and Password not valid';
               
        }else{
            session_start();
            $_SESSION["email"] = $email;
            header('location:dashboard.php'); 
        }
    }
    }else{
        $message='Please fill all areas';
    }
}
?>
