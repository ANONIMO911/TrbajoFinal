<?php
$email = $_POST['email'];
$password = $_POST['password'];

$email = stripcslashes($email);
$password = stripcslashes($password);
$email = mysql_real_escape_string($email);
$password = mysql_real_escape_string($password);

include('conexion.php');

$result = "select * from admin where email = '$email' and password = '$password'"
             or die("fail to query database " .mysql_error())
$row = mysqli_fetch_array($result);


?>