<!doctype html>
<?php
	# Incluir el archivo de conexión a la base de datos.
	include_once '../connect_db.php';
?>
<html>
<head>
<meta charset="utf-8">
<title>Producto eliminado</title>
<script type="text/javascript" src="../recursos/stmenu.js"></script>
</head>
<body>
	<img src="../recursos/logo.png" width="1650" height="374" alt=""/>
	<script type="text/javascript" src="../recursos/menuh.js"></script>
	<?php
	$consulta="Delete from productos where id_producto='$_GET[txtbor]'";
	$respuesta= mysqli_query ($conexion, $consulta) or die (mysql_error (). "No se puede eliminar");

	echo "<h1><center>¡Registro de producto eliminado exitoso!</center></h1>";
	?>
</body>
</html>
