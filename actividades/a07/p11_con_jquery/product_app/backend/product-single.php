<?php
    use backend\myapi\Products as Products;
    require_once __DIR__.'/myapi/Products.php'; 

    $prodObj = new Products('marketzone');
    $id = $_POST['id'];  $prodObj->single($id);
    echo $prodObj->getData();
    /*include_once __DIR__.'/database.php';

    $data = array();

    if( isset($_POST['id']) ) {
        $id = $_POST['id'];
        if ( $result = $conexion->query("SELECT * FROM productos WHERE id = {$id}") ) {
            $row = $result->fetch_assoc();

            if(!is_null($row)) {
                foreach($row as $key => $value) {
                    $data[$key] = utf8_encode($value);
                }
            }
            $result->free();
        } else {
            die('Query Error: '.mysqli_error($conexion));
        }
        $conexion->close();
    }

    // SE HACE LA CONVERSIÓN DE ARRAY A JSON
    echo json_encode($data, JSON_PRETTY_PRINT);*/
?>