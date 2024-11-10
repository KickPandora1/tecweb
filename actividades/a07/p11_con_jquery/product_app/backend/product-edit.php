<?php
    use backend\myapi\Products;
    include_once __DIR__.'/myapi/Products.php';

    $prodObj = new Products('marketzone');
    $prodObj->edit($producto = file_get_contents('php://input'));
    
    echo $prodObj->getData();
?>