<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario De Productos</title>
</head>
<body>
    <script src="http://localhost:8089/tecweb/practicas/P09/src/main.js"></script>
    <form id="formularioProductos" action="http://localhost:8089/tecweb/practicas/p09/set_producto_v2.php" method="post" onsubmit="return verifNom() && veriMarca() && veriModelo() && veriPrecio() && limDetalles() && veriUnidades() && verifImagen()">

        <h2>Información de Producto</h2>
    
        <fieldset>
            <legend>Datos</legend>
    
            <ul>
            <li><label for="form-nombre">Nombre:</label> <input type="text" name="nombre" id="form-nombre" placeholder = "Nombre"></li><br/>
            
            <li><label for="form-marca">Marca:</label> 
                <input type="radio" name="marca" id="radio1" value="Marca1"> Roland
                <input type="radio" name="marca" id="radio2" value="Marca2"> Yamaha1
                <input type="radio" name="marca" id="radio3" value="Marca3"> Pearl
            </li><br/>            
            <li><label for="form-modelo">Modelo:</label> <input type="text" name="modelo" id="form-modelo" placeholder = "Modelo"></li><br/>
            <li><label for="form-precio">Precio:</label> <input type="number" name="precio" id="form-precio" placeholder = "Precio" ></li><br/>
            <li><label for="form-detalles">Detalles:</label><br><textarea name="detalles" rows="4" cols="60" id="form-detalles" placeholder="No más de 250 caracteres de longitud"></textarea></li><br/>
            <li><label for="form-unidades">Unidades:</label> <input type="number" name="unidades" id="form-unidades" placeholder = "Unidades"></li><br/>
            <li><label for="form-imagen">URL de Imagen:</label> <input type="text" name="imagen" id="form-imagen" placeholder = "imagen"></li>

        </ul>
        </fieldset>
    
        <p>
            <input type="submit" value="Agregar">
            <input type="reset">
        </p>
    
    </form>
</body>
</html>