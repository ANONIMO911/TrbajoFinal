<?php
$CORREO = $_POST['CORREO'];
$PASSWORD = $_POST['PASSWORD'];
session_start();
$_SESSION['CORREO']=$CORREO;
/*
$email = stripcslashes($email);
$password = stripcslashes($password);
$email = mysql_real_escape_string($email);
$password = mysql_real_escape_string($password);*/

$connection = mysqli_connect("localhost", "root", "","gustou");

$consulta = "SELECT * FROM clientes WHERE CORREO = '$CORREO' AND PASSWORD = '$PASSWORD'";
$resultado =mysqli_query($connection, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location: carritopaga.html");
}else {
    ?>
    <?php
    include("iniciosecc.php");
    ?>
    <h1>Error en la autenticación</h1>
    <?php
}

mysqli_free_result($resultado);
mysqli_close($connection);
?>