<?php
require_once 'CProducts.php';
$cproducts = new CProducts;

if($_GET['action']){
    $action = $_GET['action'];
    if($action == 'hide'){
        if($_GET['product_id'] && $_GET['product_id'] > 0){
            $cproducts->hide($_GET['product_id']);
        }
    }
}


$products = $cproducts->getProducts(3);

require_once 'table.php';
