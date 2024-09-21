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

    $recordsperpage = 40;

    if (isset($_GET["page"])){ // Si el usuario no ha hecho clic en las páginas
        if($_GET["page"]==1){
            header("Location:index.php");
        }else{
            $page = $_GET["page"];
        }
    }else{
        $page = 1;
    }

    $pagestart = ($page - 1) * $recordsperpage;

    /* Sólo para sacar el total de registros */
    $sqltotal = "SELECT nombre, cifnif, telefono1 FROM clientes";
    $result = $base->prepare($sqltotal);
    $result->execute(array());

    $records = $result->rowCount();

    /* ceil redondea hacia arriba */
    $pages = ceil($records / $recordsperpage);
    echo $records . " records<br>";
    echo $page . " of " . $pages . "<br><br>";

    $result->closeCursor();

    /* Parámetro LIMIT[registro_inicio, registro_fin] marca paginación */
    $sqllimited = "SELECT nombre, cifnif, telefono1 FROM clientes LIMIT $pagestart, $recordsperpage";
    $result = $base->prepare($sqllimited);
    $result->execute(array());

    while ($recordset = $result->fetch(PDO::FETCH_ASSOC)){
        echo $recordset["nombre"] . ", " . $recordset["cifnif"] . ", " . $recordset["telefono1"] . "<br>";
    }

}catch(Exception $exception){
    echo $exception->getLine();
}

/* Paginación */
echo "<br>";
for ($i=1; $i<=$pages; $i++){
    echo "<a href='?page=" . $i . "'>" . $i . "</a> ";
}

?>

</body>
</html>