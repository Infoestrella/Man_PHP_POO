<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Static</title>
</head>
<body>

<?php

$data = array("Nombre"=>"John", "Surname"=>"Black", "Age"=>45);

/* is_array comprueba si la variable es array. Devuelve boolean. */

if(is_array($data)){
    echo "It is an array<br>";
}else{
    echo "It is not an array";
}

/* Foreach recorre arrays asociativos.
    $key es el índice, $value el valor */

foreach($data as $key=>$value){
    echo "Key: " . $key . ", Value: " . $value . "<br>";
}

/* For es para recorrer arrays indexados.
    count($array) te da el total de elementos */

$week = array("Monday", "Tuesday", "Wedesnay", "Thursday");

sort($week); /* ordena array */

for($i=0; $i<count($week); $i++){
    echo $week[$i] . "<br>";
}

?>

</body>
</html>