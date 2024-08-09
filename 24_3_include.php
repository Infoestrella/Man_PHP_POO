<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>24</title>
</head>
<body>

<?php

include("24_2_vehicle.php");

$volvo = new Car();
$pegaso = new Truck();

echo "Volvo wheels: " . $volvo->wheels . "<br>";
echo "Pegaso wheels: " . $pegaso->wheels . "<br>";

?>

</body>
</html>