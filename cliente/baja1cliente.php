<!doctype html>
<?php
	# Incluir el archivo de conexión a la base de datos.
	include_once '../connect_db.php';
?>
<html>
<head>
	<script type="text/javascript" src="../recursos/stmenu.js"></script>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	<img src="../recursos/logo.png" width="1650" height="374" alt=""/>
<script type="text/javascript" src="../recursos/menuh.js"></script>
	<form action="baja2cliente.php" method="get">
<table width="1758" height="180" border="1" align="center">
		  <tbody>
		    <tr>
		      <td width="72" height="39">id_cliente</td>
		      <td width="254">Nombre</td>
		      <td width="135">Dirección</td>
		      <td width="120">Colonia</td>
		      <td width="103">Ciudad</td>
		      <td width="113">Estado</td>
		      <td width="121">Telefono</td>
		      <td width="84">Código Postal</td>
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
		      <td height="61" colspan="8"><input type="text" name="txtbor" id="txtbor" required pattern="[0-9]+" maxlength="30" minlength="1">
	          <input type="submit" name="submit" id="submit" value="Borrar"></td>
	        </tr>
	      </tbody>
	    </table>
	</form>

<form action="../inicio/" method="get">
<center><input type="submit" name="submit" id="submit" value="Inicio"></center>
</form>

</body>
</html>
