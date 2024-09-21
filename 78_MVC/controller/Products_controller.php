<?php

require_once("model/Products_model.php");
$productModel = new Products_model(); // Instancia clase y llama constructor
$productsArray = $productModel->getProducts();

require_once("view/Products_view.php");

?>