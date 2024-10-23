<?php
    include_once __DIR__.'/database.php';

    // SE CREA EL ARREGLO QUE SE VA A DEVOLVER EN FORMA DE JSON
    $data = array();

    // SE VERIFICA HABER RECIBIDO EL DATO DE BÚSQUEDA
    if( isset($_POST['dato']) ) {
        $dato = $conexion->real_escape_string($_POST['dato']);
        
        // SE REALIZA LA QUERY DE BÚSQUEDA USANDO LIKE Y TAMBIÉN EL ID
        $query = "
            SELECT * FROM productos 
            WHERE id = '{$dato}' 
            OR nombre LIKE '%{$dato}%' 
            OR marca LIKE '%{$dato}%'
            OR detalles LIKE '%{$dato}%'
        ";
        
        if ( $result = $conexion->query($query) ) {
            // SE PROCESAN TODOS LOS RESULTADOS
            while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                $producto = array();
                // SE CODIFICAN A UTF-8 LOS DATOS Y SE MAPEAN AL ARREGLO DE RESPUESTA
                foreach($row as $key => $value) {
                    $producto[$key] = utf8_encode($value);
                }
                $data[] = $producto; // Se agregan los productos al arreglo
            }
            $result->free();
        } else {
            die('Query Error: '.mysqli_error($conexion));
        }
        $conexion->close();
    }

    // SE HACE LA CONVERSIÓN DE ARRAY A JSON
    echo json_encode($data, JSON_PRETTY_PRINT);
?>
s