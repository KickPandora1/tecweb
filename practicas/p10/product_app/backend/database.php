<?php
    $conexion = mysqli_connect('localhost', 'root', 'ubi13418', 'marketzone');


    /**
     * NOTA: si la conexión falló $conexion contendrá false
     **/
    if(!$conexion) {
        die('¡Base de datos NO conectada!');
    }
?>