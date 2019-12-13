<?php
	# Incluir el archivo de conexión a la base de datos.
	include_once '../connect_db.php';
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Empleado eliminado</title>
<script type="text/javascript" src="../recursos/stmenu.js"></script>
</head>
<body>
	<img src="../recursos/logo.png" width="1650" height="374" alt=""/>
	<script type="text/javascript" src="../recursos/menuh.js"></script>
	<br>
	<?php
$consulta="Delete from empleados where id_empleado='$_GET[txtbor]'";
$respuesta= mysqli_query ($conexion, $consulta) or die (mysql_error (). "No se puede eliminar");

echo "<h1><center>¡Registro de empleado eliminado exitoso!</center></h1>";
?>
</body>
</html>
