<!doctype html>
<?php
	# Incluir el archivo de conexión a la base de datos.
	include_once '../connect_db.php';
?>
<html>
<head>
	<script type="text/javascript" src="../recursos/stmenu.js"></script>
<meta charset="utf-8">
<title>Búsqueda clientes</title>
</head>

<body>
	<img src="../recursos/logo.png" width="1650" height="374" alt=""/>
<script type="text/javascript" src="../recursos/menuh.js"></script>
	<table width="1039" height="305" border="1">
		  <tbody>
		    <tr>
		      <td height="39">id</td>
		      <td>Nombre</td>
		      <td>Dirección</td>
		      <td>Colonia</td>
		      <td>Ciudad</td>
		      <td>Estado</td>
		      <td>Telefono</td>
		      <td>Código Postal</td>
	        </tr>
		    <tr>
		      <td>
	<?php
	$consulta="select * from clientes where nombre like '%$_GET[txtbuscar]%'";
	$resultado=mysqli_query($conexion, $consulta)or die(mysql_error()."No se puede consultar");
	if (!$resultado)
	{
		echo " ";
		die;
	}
	$contador=1;
	$filas=mysqli_num_rows($resultado);

	while ($contador<=$filas)
		{
			$arreglo=mysqli_fetch_array($resultado);
			echo $arreglo ['id_cliente'];
			echo "<br>";
			$contador++;
		}

	?></td>
		      <td><?php
	$consulta="select * from clientes where nombre like '%$_GET[txtbuscar]%'";
	$resultado=mysqli_query($conexion, $consulta)or die(mysql_error()."No se puede consultar");
	if (!$resultado)
	{
		echo " ";
		die;
	}
	$contador=1;
	$filas=mysqli_num_rows($resultado);

	while ($contador<=$filas)
		{
			$arreglo=mysqli_fetch_array($resultado);
			echo $arreglo ['nombre'];
			echo "<br>";
			$contador++;
		}

	?></td>
		      <td><?php
	$consulta="select * from clientes where nombre like '%$_GET[txtbuscar]%'";
	$resultado=mysqli_query($conexion, $consulta)or die(mysql_error()."No se puede consultar");
	if (!$resultado)
	{
		echo " ";
		die;
	}
	$contador=1;
	$filas=mysqli_num_rows($resultado);

	while ($contador<=$filas)
		{
			$arreglo=mysqli_fetch_array($resultado);
			echo $arreglo ['direccion'];
			echo "<br>";
			$contador++;
		}

	?></td>
		      <td><?php
	$consulta="select * from clientes where nombre like '%$_GET[txtbuscar]%'";
	$resultado=mysqli_query($conexion, $consulta)or die(mysql_error()."No se puede consultar");
	if (!$resultado)
	{
		echo " ";
		die;
	}
	$contador=1;
	$filas=mysqli_num_rows($resultado);

	while ($contador<=$filas)
		{
			$arreglo=mysqli_fetch_array($resultado);
			echo $arreglo ['colonia'];
			echo "<br>";
			$contador++;
		}

	?></td>
		      <td><?php
	$consulta="select * from clientes where nombre like '%$_GET[txtbuscar]%'";
	$resultado=mysqli_query($conexion, $consulta)or die(mysql_error()."No se puede consultar");
	if (!$resultado)
	{
		echo " ";
		die;
	}
	$contador=1;
	$filas=mysqli_num_rows($resultado);

	while ($contador<=$filas)
		{
			$arreglo=mysqli_fetch_array($resultado);
			echo $arreglo ['ciudad'];
			echo "<br>";
			$contador++;
		}

	?></td>
		      <td><?php
	$consulta="select * from clientes where nombre like '%$_GET[txtbuscar]%'";
	$resultado=mysqli_query($conexion, $consulta)or die(mysql_error()."No se puede consultar");
	if (!$resultado)
	{
		echo " ";
		die;
	}
	$contador=1;
	$filas=mysqli_num_rows($resultado);

	while ($contador<=$filas)
		{
			$arreglo=mysqli_fetch_array($resultado);
			echo $arreglo ['estado'];
			echo "<br>";
			$contador++;
		}

	?></td>
		      <td><?php
	$consulta="select * from clientes where nombre like '%$_GET[txtbuscar]%'";
	$resultado=mysqli_query($conexion, $consulta)or die(mysql_error()."No se puede consultar");
	if (!$resultado)
	{
		echo " ";
		die;
	}
	$contador=1;
	$filas=mysqli_num_rows($resultado);

	while ($contador<=$filas)
		{
			$arreglo=mysqli_fetch_array($resultado);
			echo $arreglo ['telefono'];
			echo "<br>";
			$contador++;
		}

	?></td>
		      <td><?php
	$consulta="select * from clientes where nombre like '%$_GET[txtbuscar]%'";
	$resultado=mysqli_query($conexion, $consulta)or die(mysql_error()."No se puede consultar");
	if (!$resultado)
	{
		echo " ";
		die;
	}
	$contador=1;
	$filas=mysqli_num_rows($resultado);

	while ($contador<=$filas)
		{
			$arreglo=mysqli_fetch_array($resultado);
			echo $arreglo ['codigo_postal'];
			echo "<br>";
			$contador++;
		}

	?></td>
	        </tr>
	      </tbody>
	    </table>

<form action="consultacliente.php" method="get">
<center><input type="submit" name="submit" id="submit" value="Regresar"></center>
</form>
</body>
</html>
