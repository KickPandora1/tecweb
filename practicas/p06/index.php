<?php include "src/funciones.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 4</title>
</head>
<body>
    <h2>Ejercicio 1</h2>
    <p>Escribir programa para comprobar si un número es un múltiplo de 5 y 7</p>
    <form action="http://localhost:8089/tecweb/practicas/p06/index.php" method="GET">
    </form>
    <?php
        if(isset($_GET['numero']))
        {
            $num = $_GET['numero'];
            check($num);
        }
    ?>
</body>
</html>