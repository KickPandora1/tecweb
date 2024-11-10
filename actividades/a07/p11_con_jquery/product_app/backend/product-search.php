<?php
    use backend\myapi\Products;
    include_once __DIR__.'/myapi/Products.php';

    $prodObj = new Products('marketzone');
    $search = $_GET['search'];  $prodObj->search($search);
    
    echo $prodObj->getData();
?>