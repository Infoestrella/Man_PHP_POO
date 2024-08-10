<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Static</title>
</head>
<body>

<?php

/* Cuando hacemos consultas a bbdd las almacenamos en arrays.
    En variable almacenamos 1 valor, en array varios. 
    - Arrays indexados: Con índices: $myArray[0]
    - Arrays asociativos: Los índices son nombre: $myArray["value1"] */

/* Asigna valores de 1 en 1
$week[] = "Monday"; // Asigna el índice 0
$week[1] = "Tuesday"; // Así también sirve
$week[] = "Wedesnay";
*/

/* Asigna todo junto en el indexado */

$week = array("Monday", "Tuesday", "Wedesnay");

/* Agregar un elemento al array indexado */

$week[] = "Thursday";
echo $week[3] . "<br>";

/* Este es un array asociativo */

$data = array("Nombre"=>"John", "Surname"=>"Black");

/* Agrega elemento al array asociativo. Ojo con el = */

$data["Age"] = "45";

echo $data["Age"];

?>

</body>
</html>