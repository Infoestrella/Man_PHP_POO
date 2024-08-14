<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>PDO</title>
</head>
<body>

<?php

$search = $_GET["description"];

try{
    $pdo = new PDO("mysql:host=localhost; dbname=infoestrella", "root", "");
    $pdo->exec("SET CHARACTER SET utf8");

    /* 1. Sustituyo en la sentencia la condición por ? */
    $sql = "SELECT referencia, descripcion FROM productos WHERE descripcion = ?";

    /* 2. Almaceno en variable el objeto PDOStatement con prepare() */
    $statement = $pdo->prepare($sql);

    /* 3. Execute */
    $statement->execute(array($search));

    /* 4. Recorro statement */
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