<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Desestructuración arrays</title>
</head>
<body>

<?php

$data = [1, 2, 3];

/* Esta es la forma clásica de extraer valor a variable */
$a = $data[0];
echo $a . '<br>'; 

/* Esta es la nueva */
[$a, $b, $c] = $data;
echo $a . '<br>';

/* Otro ejemplo */
function getCoordinates(){
    return[12.31, 56.78];
}

[$lat, $long] = getCoordinates();
echo $lat . ", " . $long . '<br>';

/* Desestructura array asociativo */
$person = ["name"=>"John", "age"=>"45"];
["name"=>$theName, "age"=>$theAge] = $person;
echo $theName . ", " . $theAge;

?>

</body>
</html>