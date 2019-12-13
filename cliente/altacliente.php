<!doctype html>
<?php
	# Incluir el archivo de conexión a la base de datos.
	include_once '../connect_db.php';
?>
<html>
<head>
	<script type="text/javascript" src="../recursos/stmenu.js"></script>
<meta charset="utf-8">
<title>Alta cliente</title>
</head>

<body>
	<img src="../recursos/logo.png" width="1650" height="374" alt=""/>
<script type="text/javascript" src="../recursos/menuh.js"></script>
	<?php
$consulta="Insert into clientes(nombre, direccion, colonia, ciudad, estado, telefono, codigo_postal)values('$_GET[txtnom]','$_GET[txtdir]','$_GET[txtcol]','$_GET[txtciu]','$_GET[txtest]','$_GET[txttel]','$_GET[txtpos]')";
mysqli_query($conexion, $consulta)or die (mysql_error()."Error al insertar");
echo "<h1><center>¡Registro de cliente exitoso!</center></h1>";
?>
<form action="registroaltacliente.php" method="get">
  <center><input type="submit" name="submit" id="submit" value="Regresar"></center>
</form>
</body>
</html>
