<?php
include('config.php');
include('dashboard.php');
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
    <div class="table_body">
        <table class="table_con">
            <thead>
            <tr class="table">
                <th>FIRSTNAME</th>
                <th>LASTNAME</th>
                <th>USERNAME</th>
                <th>AGE</th>
                <th>EMAIL</th>
                <th>PASSWORD</th>
                <th>STATE</th>
            </tr>
            </thead>
            <tbody>
            <tr>
            <?php  
                if(isset($_SESSION['email'])){ 
                $usersess = $_SESSION['email'];
                $sql = "SELECT * FROM db_table WHERE email = '$usersess'";
                $result = mysqli_query($conn , $sql);
                  while ($row = mysqli_fetch_assoc($result) ) {
                      echo "
        
                <td>".$row['firstname']."</td>
                <td>".$row['lastname']."</</td>
                <td>".$row['username']."</</td>
                <td>".$row['age']."</</td>
                <td>".$row['email']."</</td>
                <td>************</</td>
                <td>".$row['state']."</</td>";
             }
        }
    ?>
            </tr>
            </tbody>
        </table>
        </div>
</body>
</html>
