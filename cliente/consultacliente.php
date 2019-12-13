<!doctype html>
<?php
	# Incluir el archivo de conexión a la base de datos.
	include_once '../connect_db.php';
?>
<html>
<head>
	<script type="text/javascript" src="../recursos/stmenu.js"></script>
<meta charset="utf-8">
<title>Clientes</title>
</head>

<body>
	<img src="../recursos/logo.png" width="1650" height="374" alt=""/>
<script type="text/javascript" src="../recursos/menuh.js"></script>

	<form action="Consulta2.php" method="get">
<table width="1434" height="243" border="1">
		  <tbody>
		    <tr>
		      <td height="39">id_cliente</td>
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
	$consulta="select * from clientes";
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
	$consulta="select * from clientes";
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
	$consulta="select * from clientes";
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
	$consulta="select * from clientes";
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
	$consulta="select * from clientes";
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
	$consulta="select * from clientes";
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
	$consulta="select * from clientes";
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
	$consulta="select * from clientes";
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
		    <tr>
		      <td colspan="8"><input type="text" name="txtbuscar" id="txtbuscar" minlength="3" maxlength="40" required pattern="[A-Za-z ñ]+">
	          <input type="submit" name="submit" id="submit" value="Buscar" ></td>
	        </tr>
	      </tbody>
	    </table>
	</form>
	<form action="../inicio/" method="get">
<center><input type="submit" name="submit" id="submit" value="Inicio"></center>
</form>

</body>
</html>
