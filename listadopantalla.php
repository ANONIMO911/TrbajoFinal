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


$query_Recordset1 = "SELECT * FROM empleados ORDER BY ID_EMPLEADO";
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

<h3>LISTADO DE EMPLEADOS</h3>


</header>
<section id = "seccion">
	<article>
    </div>
<div align="center">

<table border="3" width="1000" bordercolor="#0000FF"  style="font-size:12px" bgcolor="#FFFFFF">  <tr>
    <td><h3>ID EMPLEADO</h3></td>
    <td><h3>NOMBRE EMPLEADO</h3></td>
    <td><h3>APELLIDO EMPLEADO</h3></td>
    <td><h3>TELEFONO</h3></td>
    <td><h3>DIRECCION EMPLEADO</h3></td>
    <td><h3>CARGO</h3></td>
    <td><h3>ID ESTABLECIMIENTO</h3></td>
  </tr>
<?php
   do {
?>
    <tr>
      <td ><?php echo $row_Recordset1['ID_EMPLEADO'];  ?></td>
      <td ><?php echo $row_Recordset1['NOM_EMPLEADO'];  ?></td>
      <td ><?php echo $row_Recordset1['APELLIDO_EMPLEADO'];  ?></td>
      <td ><?php echo $row_Recordset1['TELEFONO'];  ?></td>
      <td ><?php echo $row_Recordset1['DIRECCION_EMPLEADO'];  ?></td>
      <td ><?php echo $row_Recordset1['CARGO'];  ?></td>
      <td ><?php echo $row_Recordset1['ID_ESTABLECIMIENTO'];  ?></td>
	</tr>
    <?php
		 } while ($row_Recordset1 = mysqli_fetch_assoc($Recordset1)); ?>
    </table>
<hr/>


</div>
<hr/>
</article>
</section>
</body>

</html>
<?php
mysqli_free_result($Recordset1);
?>
