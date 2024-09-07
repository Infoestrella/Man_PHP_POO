<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pagination</title>
</head>
<body>

<?php

try{

    $base = new PDO("mysql:host=localhost; dbname=infoestrella", "root", "");
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $base->exec("SET CHARACTER SET utf8");

    $recordsperpage = 10;
    $page = 1;

    /* Parámetro LIMIT[registro_inicio, registro_fin] marca paginación */
    $sql = "SELECT nombre, cifnif, telefono1 FROM clientes";
    $result = $base->prepare($sql);
    $result->execute(array());

    $records = $result->rowCount();

    /* ceil redondea hacia arriba */
    $pages = ceil($records / $recordsperpage);
    echo $records . " records<br>";
    echo $page . " of " . $pages . "<br>";

    /*
    while ($recordset = $result->fetch(PDO::FETCH_ASSOC)){
        echo $recordset["nombre"] . " " . $recordset["cifnif"] . " " . $recordset["telefono1"] . "<br>";
    }
    */

    $result->closeCursor();

    $sqllimited = "SELECT nombre, cifnif, telefono1 FROM clientes LIMIT";

}catch(Exception $exception){
    echo $exception->getLine();
}

?>

</body>
</html>