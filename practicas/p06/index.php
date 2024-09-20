<?php include "src/funciones.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 6</title>
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

    <h2>Ejercicio 2</h2>
    <p>Crea un programa para la generacion repetitiva de 3 numeros aleatorios hasta obtener una secuencia compuesta por impar, par, impar<p>
    <?php
        generarNum();
    ?>

    <h2>Ejercicio 3</h2>
    <p>3.1 Utiliza un ciclo while para encontrar el primer número entero obtenido aleatoriamente, pero que además sea múltiplo de un número dado.<p>
    <?php
        if (isset($_GET['multiplo'])) {
            $multiplo = intval($_GET['multiplo']);
            generarMultiplo($multiplo);
        } else {
            echo "Por favor, proporciona un número para encontrar su múltiplo como ?multiplo=3 en la url";
        }
    ?>
</body>
</html>