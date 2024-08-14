<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>PDO</title>
</head>
<body>

<?php

$reference = $_GET["reference"];
$family = $_GET["family"];

/* Sustituye ? por un marcador, lo que permite en execute meter un
    array asociativo */

try{
    $pdo = new PDO("mysql:host=localhost; dbname=infoestrella", "root", "");
    $pdo->exec("SET CHARACTER SET utf8");

    /* 1. Sustituyo en la sentencia la condición por marcador */
    $sql = "SELECT referencia, descripcion FROM productos
        WHERE referencia= :markReference AND codfamilia= :markFamily";
    $statement = $pdo->prepare($sql);

    /* 3. cambio la variable por el marcador => variable */
    $statement->execute(array(":markReference"=>$reference, "markFamily"=>$family));

    while ($arrayResult = $statement->fetch(PDO::FETCH_ASSOC)){
        echo $arrayResult['referencia'] . " -> " . $arrayResult['descripcion'] . "<br>";
    }

    $statement->closeCursor();
}
catch(Exception $exception){
    die('Exception: ' . $exception->getMessage());
}
finally{
    $pdo = null;
}

?>

</body>
</html>