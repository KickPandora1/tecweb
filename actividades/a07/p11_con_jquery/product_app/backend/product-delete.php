<?php
    use backend\myapi\Products as Products;
    require_once __DIR__.'/myapi/Products.php'; 

    $prodObj = new Products('marketzone');
    $id = $_GET['id']; $prodObj->delete($id);
    echo $prodObj->getData();
        /*include_once __DIR__.'/database.php';

        $data = array(
            'status'  => 'error',
            'message' => 'La consulta falló'
        );
        if( isset($_POST['id']) ) {
            $id = $_POST['id'];
            $sql = "UPDATE productos SET eliminado=1 WHERE id = {$id}";
            if ( $conexion->query($sql) ) {
                $data['status'] =  "success";
                $data['message'] =  "Producto eliminado";
            } else {
                $data['message'] = "ERROR: No se ejecuto $sql. " . mysqli_error($conexion);
            }
            $conexion->close();
        } 
        
        // SE HACE LA CONVERSIÓN DE ARRAY A JSON
        echo json_encode($data, JSON_PRETTY_PRINT);*/
?>