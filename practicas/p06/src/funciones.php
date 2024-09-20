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

<?php
    function asciiLetras(){
        // Crear el arreglo con índices de 97 a 122 y sus valores correspondientes
        $arreglo = [];
        
        for ($i = 97; $i <= 122; $i++) {
            $arreglo[$i] = chr($i); // Asignar el carácter correspondiente a cada índice
        }

        // Generar una tabla en XHTML usando el ciclo foreach
        echo "<table border='1'>";
        echo "<tr><th>Código ASCII</th><th>Letra</th></tr>";

        foreach ($arreglo as $key => $value) {
            echo "<tr><td>$key</td><td>$value</td></tr>"; // Mostrar cada clave (ASCII) y su valor (letra)
        }

        echo "</table>";
    }
?>


<?php
function mujer($edad, $sexo){
    if(isset($_POST["edad"]) && isset($_POST["sexo"])) {
        $edad = $_POST['edad'];
        $sexo = $_POST['sexo'];

        if ($sexo == 'femenino' && $edad >= 18 && $edad <= 35) {
            echo "<h1>Bienvenida</h1>
                <p>Usted está en el rango de edad permitido.</p>";

        } else {
            echo "<h1>Error</h1>
                <p>Lo sentimos, usted no cumple con los criterios requeridos.</p>";
        }
    }
}
?>

<?php
$autos = [
    '123ASDE' => [
        'Auto' => [
            'marca' => 'NISSAN SILVIA',
            'modelo' => 1999,
            'clasificacion' => 'COUPE'
            ],
            'dueño' => [
                'nombre' => 'DIEGO NAVA RIVERA',
                'ciudad' => 'VERACRUZ, VERACRUZ',
                'direccion' => 'BACALAO 54'
            ]
        ],

        '735QBJM' => [
        'Auto' => [
            'marca' => 'TVR SAGARIS',
            'modelo' => 2004,
            'clasificacion' => 'SUPER DEPORTIVO'
            ],
            'dueño' => [
                'nombre' => 'HACIEL VIVEROS REYES',
                'ciudad' => 'QUERETARO, QUERETARO',
                'direccion' => 'ALEJANDRINA 457'
            ]
        ],

        '869YUPI' => [
        'Auto' => [
            'marca' => 'BMW E46',
            'modelo' => 2003,
            'clasificacion' => 'COUPE'
            ],
            'dueño' => [
                'nombre' => 'JUAN CARLOS CONDE RAMIREZ',
                'ciudad' => 'LEON DE LOS ALDAMA, GUANAJUATO',
                'direccion' => 'MASAGUAS LA ALAMEDA 5'
            ]
        ],

        '007JABO' => [
        'Auto' => [
            'marca' => 'HOLDEN COMMODORE',
            'modelo' => 2010,
            'clasificacion' => 'COUPE'
            ],
            'dueño' => [
                'nombre' => 'XIMENA SANCHEZ JIMENEZ',
                'ciudad' => 'ACAPULCO DE JUAREZ, ACAPULCO',
                'direccion' => 'EL CARACOL 7'
            ]
        ],

        '204ERRO' => [
        'Auto' => [
            'marca' => 'TOYOTA ALTEZZA',
            'modelo' => 2004,
            'clasificacion' => 'COUPE'
            ],
            'dueño' => [
                'nombre' => 'FRANCISCO ALVAREZ',
                'ciudad' => 'PACHUCA, HIDALGO',
                'direccion' => 'SILVESTRE 28'
            ]
        ],

        '458QWER' => [
        'Auto' => [
            'marca' => 'MITSUBISHI LANCER EVO',
            'modelo' => 2008,
            'clasificacion' => 'SEDAN DEPORTIVO'
        ],
        'dueño' => [
            'nombre' => 'LUIS HERNANDEZ RIVERA',
            'ciudad' => 'MONTERREY, NUEVO LEON',
            'direccion' => 'PASEO DE LOS LEONES 334'
        ]
    ],

    '569ASDF' => [
        'Auto' => [
            'marca' => 'PORSCHE 911',
            'modelo' => 2019,
            'clasificacion' => 'SUPER DEPORTIVO'
        ],
        'dueño' => [
            'nombre' => 'CLAUDIA GOMEZ FERNANDEZ',
            'ciudad' => 'CIUDAD DE MEXICO, CDMX',
            'direccion' => 'AV. INSURGENTES 1001'
        ]
    ],

    '346ZXCX' => [
        'Auto' => [
            'marca' => 'CITROEN C4',
            'modelo' => 2015,
            'clasificacion' => 'HATCHBACK'
        ],
        'dueño' => [
            'nombre' => 'ROBERTO MARTINEZ LOPEZ',
            'ciudad' => 'MERIDA, YUCATAN',
            'direccion' => 'CALLE 62 567'
        ]
    ],

    '479DFGT' => [
        'Auto' => [
            'marca' => 'SKODA OCTAVIA',
            'modelo' => 2020,
            'clasificacion' => 'SEDAN'
        ],
        'dueño' => [
            'nombre' => 'FERNANDO AGUILAR PEREZ',
            'ciudad' => 'GUADALAJARA, JALISCO',
            'direccion' => 'LOPEZ MATEOS 2345'
        ]
    ],

    '120TYUI' => [
        'Auto' => [
            'marca' => 'HONDA CIVIC',
            'modelo' => 2018,
            'clasificacion' => 'SEDAN'
        ],
        'dueño' => [
            'nombre' => 'CARLOS RUIZ HERNANDEZ',
            'ciudad' => 'CANCUN, QUINTANA ROO',
            'direccion' => 'CALLE NARANJOS 89'
        ]
    ],

    '890HJKL' => [
        'Auto' => [
            'marca' => 'FORD MUSTANG',
            'modelo' => 2016,
            'clasificacion' => 'COUPE DEPORTIVO'
        ],
        'dueño' => [
            'nombre' => 'MARIO PEREZ RAMIREZ',
            'ciudad' => 'TIJUANA, BAJA CALIFORNIA',
            'direccion' => 'AV. REVOLUCION 1200'
        ]
    ],

    '341WERT' => [
        'Auto' => [
            'marca' => 'AUDI A4',
            'modelo' => 2021,
            'clasificacion' => 'SEDAN'
        ],
        'dueño' => [
            'nombre' => 'ANA LUCIA MARTINEZ DIAZ',
            'ciudad' => 'PUEBLA, PUEBLA',
            'direccion' => 'AV. JUAREZ 567'
        ]
    ],

    '652KLMN' => [
        'Auto' => [
            'marca' => 'MERCEDES-BENZ AMG GT',
            'modelo' => 2022,
            'clasificacion' => 'SUPER DEPORTIVO'
        ],

        'dueño' => [
            'nombre' => 'RICARDO SERRANO LOPEZ',
            'ciudad' => 'SAN LUIS POTOSI, SLP',
            'direccion' => 'CAMINO REAL 234'
        ]
    ]
    ];

    function listaAutos($matricula, $todos){
        global $autos;
        if(isset($matricula)){
            if(isset($autos[$matricula])){
                echo '<pre>';
                print_r($autos[$matricula]);
                echo '</pre>';
            }else {
                echo '<p> No se encuentra el vehiculo. Intenta otra vez';
            }
        }

    if(isset($todos)){
        echo '<pre>';
        print_r($autos);
        echo '</pre>';
    }
}

    ?>