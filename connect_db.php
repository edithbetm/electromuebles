<?php
    $server = "localhost";
    $user = "root";
    $pass = "atom1234";
    $db = "electromuebles";
    $conexion = new mysqli($server, $user, $pass, $db);
    // Verificar si ha ocurrido un error al instanciar la conexión con la bd.
    if($conexion->connect_errno) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }

    // Poder ver los warnings, '0' <=> '1'
    error_reporting(E_ALL);
    ini_set('display_errors', '0');
    // Definir el juego de caracteres con el que se trabaja
    $charset = "utf8";
    mysqli_set_charset ($conexion , $charset);
?>
