<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Static</title>
</head>
<body>

<?php

/* Cada objeto crea una copia de los atributos y métodos de la clase.
    Pero en cada copia se puede comportar de forma diferente.
    Si declaro método como static, los objetos no tienen su propia
    copia, sólo existe el de la clase. */

include ("28_1_distributor.php");

/* Accedo desde fuera de la clase al static, si no fuera private */
//buyVehicle::$discount = 10000;

/* Cargo el método estático de la clase */
buyVehicle::govermentDiscount();

$buyAnthony = new buyVehicle("compact");
$buyAnthony->climateControl();
$buyAnthony->upholstery("white");
echo $buyAnthony->finalPrice() . "<br>";

$buyAna = new buyVehicle("compact");
$buyAnthony->climateControl();
$buyAna->upholstery("beige");
echo $buyAnthony->finalPrice() . "<br>";

?>

</body>
</html>