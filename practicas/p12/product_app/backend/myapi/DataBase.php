<?php
namespace TECWEB\MYAPI;

abstract class DataBase {
    protected $conexion;

    public function __construct($db, $user, $pass) {
        $this->conexion = @mysqli_connect(
            'localhost',
            'root',
            'Ubi131418',
            'marketzone'
        );
    
        /**
         * NOTA: si la conexión falló $conexion contendrá false
         **/
        if(!$this->conexion) {
            die('Base de datos NO conectada');
        }
        /*else {
            echo 'Base de datos encontrada';
        }*/
    }
}
?>