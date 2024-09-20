<?php include "src/funciones.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 6</title>
</head>
<body>
<!-- ******************************************************************Ejercicio 1****************************************************************** -->
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
<!-- ******************************************************************Ejercicio 2****************************************************************** -->
    <h2>Ejercicio 2</h2>
    <p>Crea un programa para la generacion repetitiva de 3 numeros aleatorios hasta obtener una secuencia compuesta por impar, par, impar</p>
    <?php
        generarNum();
    ?>
<!-- ******************************************************************Ejercicio 3****************************************************************** -->
    <h2>Ejercicio 3</h2>
    <p>Utiliza un ciclo while para encontrar el primer número entero obtenido aleatoriamente, pero que además sea múltiplo de un número dado.</p>
    <?php
        if (isset($_GET['multiplo'])) {
            $multiplo = intval($_GET['multiplo']);
            generarMultiplo($multiplo);
        } else {
            echo "Por favor, proporciona un número para encontrar su múltiplo como ?multiplo=3 en la url";
        }
    ?>

<!-- ******************************************************************Ejercicio 4****************************************************************** -->
    <h2>Ejercicio 4</h2>
    <p>Crear un arreglo cuyos índices van de 97 a 122 y cuyos valores son las letras de la ‘a’ a la ‘z’. Usa la función chr(n) que devuelve el caracter cuyo código ASCII es n para poner el valor en cada índice.</p>
    <?php
        asciiLetras();
    ?>

<!-- ******************************************************************Ejercicio 5****************************************************************** -->
    <h2>Ejercicio 5</h2>
    <p>Usar las variables $edad y $sexo en una instrucción if para identificar una persona de sexo “femenino”, cuya edad oscile entre los 18 y 35 años y mostrar un mensaje de bienvenida apropiado.</p>
    <form action="http://localhost:8089/tecweb/practicas/p06/index.php" method="POST">
        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad" required><br>

        <label for="sexo">Sexo:</label>
        <select label="sexo" name="sexo" required><br>
            <option value="femenino">Femenino</option>
            <option value="masculino">Masculino</option>
        </select><br>
        <input type="submit" value="Enviar">
    </form>
    

    <?php 
        mujer($_POST["edad"], $_POST["sexo"]);
    ?>

<!-- ******************************************************************Ejercicio 5****************************************************************** -->
    <h2>Ejercicio 6</h2>
    <p>Crea en código duro un arreglo asociativo que sirva para registrar el parque vehicular de una ciudad.<p>

    <h3>Consultar vehiculos</h3>
    <form method="post">
        Matrícula: <input type="text" name="matricula">
        <input type="submit" value="Consultar">
        <br><br>
    </form>

    <form method="post">
        <input type="submit" name="todos" value="Lista de todos los autos" style="margin-bottom: 20px">
    </form>
    </fieldset>

    <?php
        $matricula = isset($_POST["matricula"]) ? $_POST["matricula"] : null;
        $todos = isset($_POST["todos"]) ? $_POST["todos"] : null;
        listaAutos($matricula, $todos);
        
    ?>

</body>
</html>