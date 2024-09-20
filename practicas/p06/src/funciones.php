<?php
    function check($num){
        if ($num%5==0 && $num%7==0)
        {
            echo '<h3>R= El número '.$num.' SÍ es múltiplo de 5 y 7.</h3>';
        }            
        else
        {
            echo '<h3>R= El número '.$num.' NO es múltiplo de 5 y 7.</h3>';
        }
    }
?>
<?php
    function generarNum(){

        ob_start();//Esto sirve para iniciar el buffer de salida

        $matriz=[];
        $iter = 0;
        $totalNumeros = 0;

        //Aqui generamos el contenido de la tabla en el buffer
        echo "<table border='1'>
                <tr>
                <th>Iteración</th>
                <th>Número 1</th>
                <th>Número 2</th>
                <th>Número 3</th>
                </tr>";

        do
        {
            $num = [];

            for($i = 0; $i < 3; $i++)
            {
                $num[] = rand(100,999);
            }
            $iter++;
            $totalNumeros += 3;
            $matriz[] = $num;

            echo "<tr>
                <td>$iter</td>
                <td>{$num[0]}</td>
                <td>{$num[1]}</td>
                <td>{$num[2]}</td>
                </tr>";
            
        }while(!($num[0] % 2 != 0 && $num[1] % 2 == 0 && $num[2] % 2 != 0));

        echo "</table>";
        $tabla = ob_get_clean();
        echo $tabla;

        echo "<h3>R= <mark>$totalNumeros</mark> números obtenidos en <mark>$iter</mark> iteraciones.</h3>";
    }
    


?>

<?php
    function generarMultiplo($multiplo){
        $num;
        global $iteracion;

        echo "<p>Buscando el primer múltiplo de <mark>$multiplo</mark> </p>";

        //-----------------------------------------------WHILE--------------------------------------------------
        /*
        while(true){
            $num = rand(1,100);
            $iteracion ++;

            if($num % $multiplo == 0){
                echo "<h3>El numero $num es multiplo de <mark>$multiplo</mark></h3>";
                echo "<h3>En la iteracion <mark>$iteracion</mark> se encontro el multiplo</h3>";
                break;
            }
        }
        */
        //---------------------------------------------DO-WHILE-------------------------------------------------
        do{
            $num = rand(1, 100);
            $iteracion ++;
        }while($num % $multiplo == 0);

        echo "<h3>El numero $num es multiplo de <mark>$multiplo</mark></h3>";
        echo "<h3>En la iteracion <mark>$iteracion</mark> se encontro el multiplo</h3>";
        //------------------------------------------------------------------------------------------------------
    }
?> 

