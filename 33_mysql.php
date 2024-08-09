<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Multidimensional arrays</title>
</head>
<body>

<?php

/* Son arrays dentro de otros arrays. Normalmente 2 dimensiones */

$food = array(
    "Fruit" => array("Tropical"=>"Kiwi", "Citric"=>"Orange"),
    "Milk" => array("Animal"=>"Cow", "Vegetal"=>"Coconut"),
    "Meat" => array("Bovine"=>"Loin", "Pork"=>"Ham")
);

/* Acceso a elemento de array de segunda dimensión */
echo $food["Meat"]["Bovine"] . "<br>";

/* Recorrer todo. Ojo al $value1 en el 2º foreach */
foreach($food as $key1=>$value1){

    echo "<b>" . $key1 . "</b><br>";
    foreach ($value1 as $key2=>$value2){
        echo $key2 . ": " . $value2 . "<br>";
    }
    echo "<br>";

}

var_dump($food); // Imprime el array completo

?>

</body>
</html>