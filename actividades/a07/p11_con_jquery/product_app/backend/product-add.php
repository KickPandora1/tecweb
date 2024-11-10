<?php
    use backend\myapi\Products;
    include_once __DIR__.'/myapi/Products.php';

    $prodObj = new Products('marketzone');
    $prodObj->add($producto=file_get_contents('php://input'));
    echo $prodObj->getData();
?>