<?php
$localhost = "localhost";
$source = "root";
$password = "";
$dbname = "cloud";
$conn = mysqli_connect($localhost, $source, $password, $dbname);
if($conn === false){
    die("error" .mysqli_connect_error());
}
?>
