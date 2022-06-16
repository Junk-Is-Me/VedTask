<?php
require_once 'CProducts.php';
$cproducts = new CProducts;

if (array_key_exists('action', $_GET) && $_GET['action']) {
    $action = $_GET['action'];
    if ($action == 'hide') {
        if ($_GET['product_id'] && $_GET['product_id'] > 0) {
            $cproducts->hide($_GET['product_id']);
        }
    } elseif ($action == 'increment') {
        $product = $cproducts->increment($_GET['product_id']);
        echo $product['product_quantity'];
        die;
    } elseif ($action == 'decrement') {
        $product = $cproducts->decrement($_GET['product_id']);
        echo $product['product_quantity'];
        die;
    }
}


$products = $cproducts->getProducts(3);

require_once 'table.php';
