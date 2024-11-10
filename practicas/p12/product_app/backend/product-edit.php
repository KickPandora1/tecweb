<?php
    use TECWEB\MYAPI\Read;
    require_once __DIR__.'/myapi/Products.php';

    $productos = new Read('marketzone');
    $productos->edit( json_decode( json_encode($_POST) ) );
    echo $productos->getData();
?>