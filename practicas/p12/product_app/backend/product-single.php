<?php
    use TECWEB\MYAPI\Read;
    require_once __DIR__.'/myapi/autoload.php';

    $productos = new Read('marketzone');
    $productos->single( $_POST['id'] );
    echo $productos->getData();
?>