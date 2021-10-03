<?php
$email = $_POST['email'];
$password = $_POST['password'];
session_start();
$_SESSION['email']=$email;
    
/*
$email = stripcslashes($email);
$password = stripcslashes($password);
$email = mysql_real_escape_string($email);
$password = mysql_real_escape_string($password);*/

$connection = mysqli_connect("localhost", "root", "","gustou");

$consulta = "SELECT * FROM admini WHERE email = '$email' AND password = '$password'";
$resultado =mysqli_query($connection, $consulta);

$filas=mysqli_num_rows($resultado);

if ($filas){
    (isset($_SESSION['tipoUsuario']) && $_SESSION['tipoUsuario'] == 'admin');
    header('location: admistracion.html');
}else {
 
    
    header('location: login.html');
}


?>