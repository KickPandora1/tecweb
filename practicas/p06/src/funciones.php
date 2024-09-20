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
        $matriz=[];
        $iter = 0;
        $totalNumeros = 0;

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

        echo "<br>";
        echo "<h3>R= $totalNumeros números obtenidos en $iter iteraciones.<h3>";
    }
    


?>