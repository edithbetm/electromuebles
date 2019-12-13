<!DOCTYPE html>
<?php
	# Incluir el archivo de conexión a la base de datos.
	include_once '../connect_db.php';
?>
<html lang="es" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Eliminar producto</title>
		<script type="text/javascript" src="../recursos/stmenu.js"></script>
	</head>
	<body>
		<img src="../recursos/logo.png" width="1650" height="374" alt=""/>
        <script type="text/javascript" src="../recursos/menuh.js"></script>
		<form action="baja2producto.php" method="get">
		<table width="970" height="175" border="1">
				  <tbody>
				    <tr>
				      <td width="72" height="39">Id</td>
				      <td width="209">Codigo</td>
				      <td width="141">Tipo</td>
				      <td width="120">Marca</td>
				      <td width="95">Descripción</td>
				      <td width="97">Precio Normal</td>
				      <td width="122">Precio Descuento</td>
				      <td width="62">Existencia</td>
			        </tr>
				    <tr>
				      <td>
			<?php
			$consulta="select * from productos";
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
			$consulta="select * from productos";
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
			$consulta="select * from productos";
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
			$consulta="select * from productos";
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
			$consulta="select * from productos";
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
			$consulta="select * from productos";
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
			$consulta="select * from productos";
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
			$consulta="select * from productos";
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
				      <td height="61" colspan="8"><input type="text" name="txtbor" id="txtbor">
			          <input type="submit" name="submit" id="submit" value="Borrar"></td>
			        </tr>
			      </tbody>
			    </table>
			</form>
	</body>
</html>
