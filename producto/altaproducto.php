<!DOCTYPE html>
<?php
	# Incluir el archivo de conexión a la base de datos.
	include_once '../connect_db.php';
?>
<html lang="es" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Registro producto</title>
        <script type="text/javascript" src="../recursos/stmenu.js"></script>
    </head>
    <body>
        <img src="../recursos/logo.png" width="1650" height="374" alt=""/>
        <script type="text/javascript" src="../recursos/menuh.js"></script>

        <?php
        $consulta="Insert into productos(codigo, tipo, marca, descripcion, precio_normal, precio_descuento, existencia)values('$_GET[txtcod]','$_GET[txttip]','$_GET[txtmar]','$_GET[txtdes]','$_GET[txtnor]','$_GET[txtdesc]','$_GET[txtexi]')";
        mysqli_query($conexion, $consulta)or die (mysql_error()."Error al insertar");
        echo "<h1><center>¡Registro de producto exitoso!</center></h1>";
        ?>
    </body>
</html>
