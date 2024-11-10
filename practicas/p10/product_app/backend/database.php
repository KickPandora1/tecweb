<?php
    $conexion = mysqli_connect(
        'localhost', 
        'root', 
        'Ubi131418', 
        'marketzone',
        3307
    );


    /**
     * NOTA: si la conexión falló $conexion contendrá false
     **/
    if(!$conexion) {
        die('¡Base de datos NO conectada!');
    }
?>