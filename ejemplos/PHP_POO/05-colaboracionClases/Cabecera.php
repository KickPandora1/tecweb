<?php
//namespace EJEMPLOS\POO;

class Cabecera{
    private$titulo;
    private $ubicacion;

    public function __construct($title, $location){
        $this->titulo = $title;
        $this->ubicacion = $location;
    }

    public function graficar() {
        $estilo = 'font-size:40px; text-align: '.$this->ubicacion.';';
        echo '<div style="'.$estilo.'">';
        echo '<h4>';
        echo '<a href="'.$this->enlace.'">'.$this->titulo.'</a>';
        echo '</h4>';
        echo '</div>';
    }
}
?>