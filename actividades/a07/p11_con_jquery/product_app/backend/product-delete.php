<?php
    use backend\myapi\Products;
    include_once __DIR__.'/myapi/Products.php';

    $prodObj = new Products('marketzone');
    $id = $_GET['id']; $prodObj->delete($id);
    echo $prodObj->getData();
?>