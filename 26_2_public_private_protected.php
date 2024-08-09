<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Modularization and encapsulation</title>
</head>
<body>

<?php

/* Modularización: Si se rompe uno, lo otro funciona. Es más
    fácil de trabajar y mantener */

/* Encapsulación es mantener cosas de un determinado objeto
    sólo accesibles desde ese objeto. Con modificadores de
    acceso. Mira el include */

include ("26_1_vehicle.php");

$volvo = new Car();
$pegaso = new Truck();

/* No funciona, wheels es private, así que tenemos que utilizar
    un setter */
// $volvo->wheels = 7;

/* Funciona porque tiene un getter, sino tampoco */
echo "Volvo wheels: " . $volvo->getWheels() . "<br>";

/* No funciona porque Truck no tiene acceso a private wheels */
//echo "Pegaso wheels: " . $pegaso->getWheels() . "<br>"; No funciona

/* Con protected acceso a las clases padres */
echo $pegaso->getEngine();

?>

</body>
</html>