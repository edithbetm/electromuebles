<?php
	# Incluir el archivo de conexión a la base de datos.
	include_once '../connect_db.php';
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Proveedores</title>
		<script type="text/javascript" src="../recursos/stmenu.js"></script>
	</head>
	<body>
		<img src="../recursos/logo.png" width="1650" height="374" alt=""/>
        <script type="text/javascript" src="../recursos/menuh.js"></script>
		<br>
		<form action="" method="get">
		<table width="100%" height="202" border="1">
				  <tbody>
				    <tr>
				      <td height="39">id</td>
				      <td>Marca</td>
				      <td>Dirección</td>
				      <td>Correo</td>
				      <td>Telefono</td>
			        </tr>
				    <tr>
				      <td>
			<?php
			$consulta="select * from proveedores where marca like '%$_GET[txtbuscar]%'";
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
					echo $arreglo ['id_proveedor'];
					echo "<br>";
					$contador++;
				}

			?></td>
				      <td><?php
			$consulta="select * from proveedores where marca like '%$_GET[txtbuscar]%'";
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
			$consulta="select * from proveedores where marca like '%$_GET[txtbuscar]%'";
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
			$consulta="select * from proveedores where marca like '%$_GET[txtbuscar]%'";
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
					echo $arreglo ['correo'];
					echo "<br>";
					$contador++;
				}

			?></td>
				      <td><?php
			$consulta="select * from proveedores where marca like '%$_GET[txtbuscar]%'";
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
			        </tr>
				    <tr>
				      <td colspan="5"><input type="text" name="txtbuscar" id="txtbuscar">
			          <input type="submit" name="submit" id="submit" value="Buscar"></td>
			        </tr>
			      </tbody>
			    </table>
			</form>

	</body>
</html>
