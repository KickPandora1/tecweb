<?php
    use backend\myapi\Products;
    include_once __DIR__.'/myapi/Products.php';

    $prodObj = new Products('marketzone');
    $id = $_POST['id'];  $prodObj->single($id);
    
    echo $prodObj->getData();
?>