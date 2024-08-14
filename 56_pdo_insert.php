<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>PDO</title>
</head>
<body>

<?php

$reference = $_GET["reference"];
$description = $_GET["description"];
$family = $_GET["family"];

try{
    $pdo = new PDO("mysql:host=localhost; dbname=infoestrella", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec("SET CHARACTER SET utf8");

    /* Utilizo marcadores :mark para luego asignar en el array a las
        variables */

    $sql = "INSERT INTO productos (referencia, descripcion, codfamilia)
        VALUES (:markReference, :markDescription, :markFamily)";

    $statement = $pdo->prepare($sql);
    $statement->execute(array(
        ":markReference"=>$reference,
        ":markDescription"=>$description,
        ":markFamily"=>$family,
    ));

    echo "Record added successfully";
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