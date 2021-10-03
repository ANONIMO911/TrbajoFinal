<?php require_once('conexion.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}


$query_Recordset1 = "SELECT * FROM clientes ORDER BY ID_CLIENTE";
$Recordset1 = mysqli_query($connection, $query_Recordset1) or die(mysqli_error());
$row_Recordset1 = mysqli_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysqli_num_rows($Recordset1);


?>
<!doctype html>
<html lang="es">
<html class="">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Inicio</title>
</head>


<body bgcolor="#CCCCCC">
<header>
<div align="center">

<h3>LISTADO DE CLIENTES</h3>


</header>
<section id = "seccion">
	<article>
    </div>
<div align="center">

<table border="3" width="1000" bordercolor="#0000FF"  style="font-size:12px" bgcolor="#FFFFFF">  <tr>
    <td><h3>ID CLIENTE</h3></td>
    <td><h3>NOMBRE CLIENTE</h3></td>
    <td><h3>APELLIDO CLIENTE</h3></td>
    <td><h3>TELEFONO CLIENTE</h3></td>
    <td><h3>DIRECCION CLIENTE</h3></td>
    <td><h3>CORREO CLIENTE</h3></td>
   <!-- <td><h3>CONTRASEÑA CLIENTE</h3></td>-->
   
  </tr>
<?php
   do {
?>
    <tr>
      <td ><?php echo $row_Recordset1['ID_CLIENTE'];  ?></td>
      <td ><?php echo $row_Recordset1['NOM_CLIENTE'];  ?></td>
      <td ><?php echo $row_Recordset1['APELLIDO_CLIENTE'];  ?></td>
      <td ><?php echo $row_Recordset1['TELEF_CLIENT'];  ?></td>
      <td ><?php echo $row_Recordset1['DIRECCION_CLIENTE'];  ?></td>
      <td ><?php echo $row_Recordset1['CORREO'];  ?></td>
     <!-- <td ><?php echo $row_Recordset1['PASSWORD'];  ?></td>-->
     
	</tr>
    <?php
		 } while ($row_Recordset1 = mysqli_fetch_assoc($Recordset1)); ?>
    </table>
<hr/>

<a href="contacto.php" style="text-decoration: none rgb(20, 20, 20);" >Regresar</a>
</div>
<hr/>
</article>
</section>
</body>

</html>
<?php
mysqli_free_result($Recordset1);
?>