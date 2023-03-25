<?php
include('config.php');
$comment = "";
if(isset($_POST['register'])){
    $check = mysqli_query($conn, "SELECT * FROM db_table WHERE email='{$_POST['email']}'");
    if($_POST['fname']=="" || $_POST['lname']=="" || $_POST['user']=="" || $_POST['age']=="" || $_POST['email']=="" || $_POST['pass']=="" || $_POST['conf']=="" || $_POST['state']==""){
        $comment = "Please fill out all the fields";
    }
    elseif(mysqli_num_rows($check)>0){
        $comment = 'this user already exists';
    }
    elseif(strlen($_POST['pass'])<6){
        $comment = "the password has to be longer";
    }
    elseif($_POST['pass']!=$_POST['conf']) {
        $comment = 'your passwords did not match';
    }
    else{
        $firstname = $_POST['fname'];
        $lastname = $_POST['lname'];
        $username = $_POST['user'];
        $age = $_POST['age'];
        $email = $_POST['email'];
        $password = password_hash($_POST['pass'], PASSWORD_DEFAULT);
        $state = $_POST['state'];
        $insert = mysqli_query($conn, "INSERT INTO db_table(firstname, lastname, username, age, email, password, state) VALUES('$firstname', '$lastname', '$username', '$age', '$email', '$password','$state')");
        header('Location:log.php');
    }

}



?>
