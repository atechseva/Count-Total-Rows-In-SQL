<?php 
session_start();
include("db.php");
error_reporting(0);


if((!isset($_SESSION['email'])) && (!isset($_SESSION['password']))){
header('Location: admin-login.php');
}
$no_of_students=mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(*) FROM `studentregister`"));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
 echo '<p style="font-weight: bold;" class="pt-2">Number of Students : '.$no_of_students[0].'</p>';
 ?>
</body>
</html>