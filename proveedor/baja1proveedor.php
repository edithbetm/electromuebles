<?php
	# Incluir el archivo de conexión a la base de datos.
	include_once '../connect_db.php';
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Eliminar proveedor</title>
		<script type="text/javascript" src="../recursos/stmenu.js"></script>
	</head>
	<body>
		<img src="../recursos/logo.png" width="1650" height="374" alt=""/>
        <script type="text/javascript" src="../recursos/menuh.js"></script>
		<form action="baja2proveedor.php" method="get">
		<table width="100%" height="175" border="1">
				  <tbody>
				    <tr>
				      <td width="72" height="39">id</td>
				      <td width="209">Marca</td>
				      <td width="141">Dirección</td>
				      <td width="120">Correo</td>
				      <td width="95">Telefono</td>
			        </tr>
				    <tr>
				      <td>
			<?php
			$consulta="select * from proveedores";
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
			$consulta="select * from proveedores";
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
			$consulta="select * from proveedores";
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
			$consulta="select * from proveedores";
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
			$consulta="select * from proveedores";
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
				      <td height="61" colspan="5"><input type="text" name="txtbor" id="txtbor">
			          <input type="submit" name="submit" id="submit" value="Borrar"></td>
			        </tr>
			      </tbody>
			    </table>
			</form>
	</body>
</html>
