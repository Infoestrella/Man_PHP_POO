<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Mysql bbdd</title>

</head>
<body>

<?php

$reference = $_GET["ref"];
$description = $_GET["description"];

require("38_connection.php");

$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (mysqli_connect_errno()){
    echo "Connection fail.";
    die();
}

mysqli_set_charset($connection, "utf8");

$query = "UPDATE productos
    SET descripcion = '$description'
    WHERE referencia = '$reference'";
$result = mysqli_query($connection, $query);

if ($result == false){
    echo "Error";
}else{
    echo $reference . " updated";
}

mysqli_close($connection);

?>

</body>
</html>