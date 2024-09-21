<?php

require_once("model/CustomersModel.php");
$customerModel = new CustomersModel(); // Instancia clase y llama constructor
$customersArray = $customerModel->getCustomers();

require_once("view/CustomersView.php");

?>