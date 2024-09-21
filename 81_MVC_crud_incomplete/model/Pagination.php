<?php

require_once("Connect.php");
$connection = Connect::connection();

$recordsperpage = 10;

if (isset($_GET["page"])){ // Si el usuario no ha hecho clic en las páginas
    if($_GET["page"]==1){
        header("Location:index.php");
    }else{
        $page = $_GET["page"];
    }
}else{
    $page = 1;
}

$pagestart = ($page - 1) * $recordsperpage;

$sqltotal = "SELECT nombre, cifnif, telefono1 FROM clientes";
$result = $connection->prepare($sqltotal);
$result->execute(array());

$records = $result->rowCount();
$pages = ceil($records / $recordsperpage);

?>