<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>PDO</title>
</head>
<body>

<?php

$reference = $_GET["reference"];

try{
    $pdo = new PDO("mysql:host=localhost; dbname=infoestrella", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec("SET CHARACTER SET utf8");
   
    $sql = "DELETE FROM productos WHERE referencia = :markReference";

    $statement = $pdo->prepare($sql);
    $statement->execute(array(":markReference"=>$reference,));

    echo "Record deleted successfully";
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