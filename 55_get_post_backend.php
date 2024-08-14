<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>PDO</title>
</head>
<body>

<?php

/* GET envía la información por URL. Si es info sensible se puede
    ver por la web y queda cacheada:
    /54_pdo_marcadores.php?reference=ref1&family=ERP&send=Send
    Se usa con pocos parámetros e info poco sensible. Con AJAX.

    POST no envía por URL. Cuando metamos users and passwords, no
    se quiera rescatar de la caché o trabajemos con mucha información
    (campos textarea)

    */

$reference = $_POST["reference"];
$family = $_POST["family"];

try{
    $pdo = new PDO("mysql:host=localhost; dbname=infoestrella", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec("SET CHARACTER SET utf8");
    $sql = "SELECT referencia, descripcion FROM productos
        WHERE referencia= :markReference AND codfamilia= :markFamily";
    $statement = $pdo->prepare($sql);
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