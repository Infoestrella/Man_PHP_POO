<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Mysql bbdd</title>

</head>
<body>

<?php

/* Cogemos los datos que vienen de 42_insert_form.php con _GET. Los
    datos vienen de sus names */

$reference = $_GET["ref"];
$description = $_GET["description"];
$updated = $_GET["updated"];

require("38_connection.php");

$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (mysqli_connect_errno()){
    echo "Connection fail.";
    die();
}

mysqli_set_charset($connection, "utf8");

$query = "INSERT INTO productos (descripcion, referencia, actualizado)
    VALUES ('$description', '$reference', '$updated')";
$result = mysqli_query($connection, $query);

/* $result devuelve booleano */

if ($result == false){
    echo "Error";
}else{
    echo "Product " . $reference . " saved";
}

mysqli_close($connection);

?>

</body>
</html>