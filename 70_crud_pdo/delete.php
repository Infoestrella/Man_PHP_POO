<?php

include("connection.php");
$customercode = $_GET["customercode"];
$base->query("DELETE FROM clientes WHERE codcliente = '$customercode'");
header("Location:index.php");

?>