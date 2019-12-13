<!doctype html>
<?php
	# Incluir el archivo de conexión a la base de datos.
	include_once '../connect_db.php';
?>
<html>
<head>
	<script type="text/javascript" src="../recursos/stmenu.js"></script>
<meta charset="utf-8">
<title>Cliente eliminado</title>
</head>

<body>
	<img src="../recursos/logo.png" width="1650" height="374" alt=""/>
<script type="text/javascript" src="../recursos/menuh.js"></script>
	<?php
$consulta="Delete from clientes where id_cliente='$_GET[txtbor]'";
$respuesta= mysqli_query ($conexion, $consulta) or die (mysql_error (). "No se puede eliminar");

echo "<h1><center>¡Registro de cliente eliminado exitoso!</center></h1>";
?>
	<form action="baja1cliente.php" method="get">
<center><input type="submit" name="submit" id="submit" value="Regresar"></center>
</form>
</body>
</html>
