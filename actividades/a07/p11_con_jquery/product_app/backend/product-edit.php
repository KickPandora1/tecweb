<?php
    use backend\myapi\Products as Products;
    require_once __DIR__.'/myapi/Products.php'; 

    $prodObj = new Products('marketzone');
    $prodObj->edit($producto = file_get_contents('php://input'));
    
    echo $prodObj->getData();

    /*include_once __DIR__.'/database.php';

    $data = array(
        'status'  => 'error',
        'message' => 'La consulta falló'
    );
    if( isset($_POST['id']) ) {
        $jsonOBJ = json_decode( json_encode($_POST) );
        $sql =  "UPDATE productos SET nombre='{$jsonOBJ->nombre}', marca='{$jsonOBJ->marca}',";
        $sql .= "modelo='{$jsonOBJ->modelo}', precio={$jsonOBJ->precio}, detalles='{$jsonOBJ->detalles}',"; 
        $sql .= "unidades={$jsonOBJ->unidades}, imagen='{$jsonOBJ->imagen}' WHERE id={$jsonOBJ->id}";
        $conexion->set_charset("utf8");
        if ( $conexion->query($sql) ) {
            $data['status'] =  "success";
            $data['message'] =  "Producto actualizado";
		} else {
            $data['message'] = "ERROR: No se ejecuto $sql. " . mysqli_error($conexion);
        }
		$conexion->close();
    } 
    
    // SE HACE LA CONVERSIÓN DE ARRAY A JSON
    echo json_encode($data, JSON_PRETTY_PRINT);
    */
?>