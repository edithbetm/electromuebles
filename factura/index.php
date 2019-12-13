<?php
	# Incluir el archivo de conexión a la base de datos.
	include_once '../connect_db.php';
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Facturar</title>
        <link rel="stylesheet" href="estilos.css">
        <script src="factura.js" charset="utf-8"></script>
    </head>
    <body>
        <form class="formulario" action="generarFactura.php" method="post">
            <p>Cliente a facturar:
                <select class="" name="cliente">
                <?php
                    $consulta = "SELECT id_cliente as id, nombre FROM clientes;";

                    if($resultado = mysqli_query($conexion, $consulta)) {
                        while($fila = mysqli_fetch_assoc($resultado)) {
                            $id = $fila['id'];
                            $nombre = $fila['nombre'];
                            $opcion = "<option value='".$id."'>".$nombre."</option>";
                            echo $opcion;
                        }
                    }
                ?>
                </select>
            </p>

            <p>Seleccione los productos:</p>
            <p>Total: $<span id="total">0.0</span></p>
            <table class="tabla-registros" id="registros">
                <thead>
                    <th>Código</th>
                    <th>Descripcion</th>
                    <th>Precio ($)</th>
                    <th>✓</th>
    				<th>Cantidad</th>
                </thead>
                <tbody class="registros">
                    <?php
                        $consulta = "SELECT * FROM productos;";
                        if($resultado = mysqli_query($conexion, $consulta)) {
                            while($fila = mysqli_fetch_assoc($resultado)) {
                                $id = $fila['id_producto'];
                                $codigo = $fila['codigo'];
                                $descripcion = $fila['descripcion'];
                                $precio = $fila['precio_descuento'];
                                $existencia = $fila['existencia'];
                                $check = "<input type='checkbox' onchange='actualizarTotal(this);' value='".$id."'>";
                                $cant = "<input id='1' type='number' disabled name='' value='1' max='".$existencia."' min='1' onchange='actualizarTotalPorCant(this);'>";
                                echo "<tr id='row_".$id."'>";
                                echo "<td>".$codigo."</td>";
                                echo "<td>".$descripcion."</td>";
                                echo "<td>".$precio."</td>";
                                echo "<td>".$check."</td>";
                                echo "<td>".$cant."</td>";
                                echo "</tr>";
                            }
                        }
                    ?>
                </tbody>
            </table>
            <p>
                <input type="submit" name="" value="Generar factura">
                <button type="button" name="button">
                    <a href="../inicio/">Cancelar</a>
                </button>
            </p>
        </form>
    </body>
</html>
