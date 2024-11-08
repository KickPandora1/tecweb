<?php
namespace backend\myapi;
abstract class DataBase{
    protected $conexion;

    protected function DataBase($db,$user='root',$pass='Ubi131418'){
        $this->conexion =@mysqli_connect(
            'localhost',
            $db,
            $user,
            $pass,
            $port
        );

        if(!$this->conexion) {
            die('Base de datos NO conectada!');
        }
    }
}