<?php
$nombre = isset($_POST["nombre"])? $_POST["nombre"] : 'nombre_producto';
$marca  = isset($_POST["marca"])? $_POST["marca"] : 'marca_producto';
$modelo = isset($_POST["modelo"])? $_POST["modelo"] : 'modelo_producto';
$precio = isset($_POST["precio"])? $_POST["precio"] : 'precio_producto';
$detalles = isset($_POST["detalles"])? $_POST["detalles"] : 'detalles_producto';
$unidades = isset($_POST["unidades"])? $_POST["unidades"] : 'unidades_producto';
$url = isset($_POST["urlImage"])? $_POST["urlImage"] : 'url_imagen';
/** SE CREA EL OBJETO DE CONEXION */
@$link = new mysqli('localhost', 'root', 'Ubi131418', 'marketzone');	

/** comprobar la conexión */
if ($link->connect_errno) 
{
    die('Falló la conexión: '.$link->connect_error.'<br/>');
    /** NOTA: con @ se suprime el Warning para gestionar el error por medio de código */
}

/** Crear una tabla que no devuelve un conjunto de resultados */
$sql_check = "SELECT * FROM productos WHERE nombre = '{$nombre}' AND marca = '{$marca}' AND modelo = '{$modelo}'";
$sql = "INSERT INTO productos VALUES (null, '{$nombre}', '{$marca}', '{$modelo}', {$precio}, '{$detalles}', {$unidades}, '{$url}')";
$result_check = $link->query($sql_check);

if ($result_check->num_rows > 0) 
    {
        // Si ya existe el producto, mostrar un mensaje de error
        echo "<p>El producto ya existe en la base de datos.</p>";
    }
else
{
    echo 'Producto insertado con ID: '.$link->insert_id;
}


$link->close();
?>