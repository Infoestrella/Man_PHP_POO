<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Inheritance</title>
</head>
<body>

<?php

/* PHP no soporta herencia múltiple. Sólo 1. Se puede simular
    con interfaces */

include ("25_1_vehicle.php");

$pegaso = new Truck();

$pegaso->start();
$pegaso->setColour("Green", "Pegaso");

?>

</body>
</html>