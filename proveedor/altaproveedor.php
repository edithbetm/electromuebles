<!DOCTYPE html>
<?php
	# Incluir el archivo de conexión a la base de datos.
	include_once '../connect_db.php';
?>
<html lang="es" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Registro proveedor</title>
        <script type="text/javascript" src="../recursos/stmenu.js"></script>
    </head>
    <body>
        <img src="../recursos/logo.png" width="1650" height="374" alt=""/>
        <script type="text/javascript" src="../recursos/menuh.js"></script>
        <br>
        <?php
        $consulta="Insert into proveedores(marca, direccion, correo, telefono)values('$_GET[txtmar]','$_GET[txtdir]','$_GET[txtcor]','$_GET[txttel]')";
        mysqli_query($conexion, $consulta)or die (mysql_error()."Error al insertar");
        echo "<h1><center>¡Registro de proveedor exitoso!</center></h1>";
        ?>
    </body>
</html>
