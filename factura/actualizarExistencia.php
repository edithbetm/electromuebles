<?php
    include_once '../connect_db.php';
    $id_producto = $_GET['id'];
    $cant = $_GET['nuevaCant'];

    $consulta = "UPDATE productos SET existencia='".$cant."' WHERE  id_producto=".$id_producto.";";

    if($res = mysqli_query($conexion, $consulta)) {
        echo "Se actualizó correctamente";
    }
?>
