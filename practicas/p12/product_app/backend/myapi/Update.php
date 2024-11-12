<?php
    namespace TECWEB\MYAPI;
    include_once __DIR__.'/DataBase.php';
    class Update extends DataBase {

        public function __construct($db, $user='root', $pass='Ubi131418') {
            $this->data = array();
            parent::__construct($db, $user, $pass);
        }

        public function edit($object) {
            $producto = $object;
            $this->data = array(
                'status'  => 'error',
                'message' => 'No se encontró el producto o ocurrió un error'
            );
        
            if (!empty($producto)) {
                $jsonOBJ = json_decode($producto);
        
                if (isset($jsonOBJ->id)) {
                    $id = $jsonOBJ->id;
        
                    // Verifica si hay un producto con el mismo nombre pero que no sea el actual
                    $sql = "SELECT * FROM productos WHERE nombre = '{$jsonOBJ->nombre}' AND id != '{$id}' AND eliminado = 0";
                    $result = $this->conexion->query($sql);
        
                    if ($result->num_rows == 0) {
                        $this->conexion->set_charset("utf8");
                        $sql = "UPDATE productos SET
                                    nombre = '{$jsonOBJ->nombre}',
                                    marca = '{$jsonOBJ->marca}',
                                    modelo = '{$jsonOBJ->modelo}',
                                    precio = {$jsonOBJ->precio},
                                    detalles = '{$jsonOBJ->detalles}',
                                    unidades = {$jsonOBJ->unidades},
                                    imagen = '{$jsonOBJ->imagen}'
                                WHERE id = '{$id}' AND eliminado = 0";
        
                        if ($this->conexion->query($sql)) {
                            $this->data['status'] = "success";
                            $this->data['message'] = "Producto actualizado correctamente";
                        } else {
                            $this->data['message'] = "ERROR: No se pudo ejecutar $sql. " . mysqli_error($this->conexion);
                        }
                    } else {
                        $this->data['message'] = "Ya existe un producto con ese nombre";
                    }
        
                    $result->free();
                } else {
                    $this->data['message'] = "El id del producto no fue proporcionado en el JSON.";
                }
        
                $this->conexion->close();
            }
        }
        
        
        public function getData() {
            return json_encode($this->data, JSON_PRETTY_PRINT);
        }
    }
?>