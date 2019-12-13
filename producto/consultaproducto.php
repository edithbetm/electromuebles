<!DOCTYPE html>
<?php
	# Incluir el archivo de conexión a la base de datos.
	include_once '../connect_db.php';
?>
<html lang="es" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Búsqueda productos</title>
		<script type="text/javascript" src="../recursos/stmenu.js"></script>
	</head>
	<body>
		<img src="../recursos/logo.png" width="1650" height="374" alt=""/>
		<script type="text/javascript" src="../recursos/menuh.js"></script>
		<form action="" method="get">
		<table width="1400" height="204" border="1">
				  <tbody>
				    <tr>
				      <td width="109" height="39">Id_producto</td>
				      <td width="65">Codigo</td>
				      <td width="41">Tipo</td>
				      <td width="58">Marca</td>
				      <td width="103">Descripción</td>
				      <td width="126">Precio Normal</td>
				      <td width="152">Precio Descuento</td>
				      <td width="60">Existencia</td>
			        </tr>
				    <tr>
				      <td>
			<?php
			$consulta="select * from productos where descripcion like '%$_GET[txtbuscar]%'";
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
					echo $arreglo ['id_producto'];
					echo "<br>";
					$contador++;
				}

			?></td>
				      <td><?php
			$consulta="select * from productos where descripcion like '%$_GET[txtbuscar]%'";
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
					echo $arreglo ['codigo'];
					echo "<br>";
					$contador++;
				}

			?></td>
				      <td><?php
			$consulta="select * from productos where descripcion like '%$_GET[txtbuscar]%'";
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
					echo $arreglo ['tipo'];
					echo "<br>";
					$contador++;
				}

			?></td>
				      <td><?php
			$consulta="select * from productos where descripcion like '%$_GET[txtbuscar]%'";
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
					echo $arreglo ['marca'];
					echo "<br>";
					$contador++;
				}

			?></td>
				      <td><?php
			$consulta="select * from productos where descripcion like '%$_GET[txtbuscar]%'";
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
					echo $arreglo ['descripcion'];
					echo "<br>";
					$contador++;
				}

			?></td>
				      <td><?php
			$consulta="select * from productos where descripcion like '%$_GET[txtbuscar]%'";
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
					echo $arreglo ['precio_normal'];
					echo "<br>";
					$contador++;
				}

			?></td>
				      <td><?php
			$consulta="select * from productos where descripcion like '%$_GET[txtbuscar]%'";
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
					echo $arreglo ['precio_descuento'];
					echo "<br>";
					$contador++;
				}

			?></td>
				      <td><?php
			$consulta="select * from productos where descripcion like '%$_GET[txtbuscar]%'";
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
					echo $arreglo ['existencia'];
					echo "<br>";
					$contador++;
				}

			?></td>
			        </tr>
				    <tr>
				      <td colspan="8" align="center"><input type="text" name="txtbuscar" id="txtbuscar">
			          <input type="submit" name="submit" id="submit" value="Buscar"></td>
			        </tr>
			      </tbody>
			    </table>
			</form>
	</body>
</html>
