<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Mysql bbdd</title>
</head>
<body>

<?php

require("38_connection.php");

/* Método 2: Consultas preparadas. Este es el método adecuado
    para evitar injection. Este sistema es para insertar */

$reference = $_GET["reference"];
$description = $_GET["description"];
$family = $_GET["family"];

$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (mysqli_connect_errno()){
    echo "Connection fail.";
    die();
}

/* 1. El criterio es ? para cada campo*/
$sql = "INSERT INTO productos (referencia, descripcion, codfamilia) VALUES (?, ?, ?)";

/* 2. Utiliza mysqli_prepare, que devuelve mysqli_stmt() */
$result = mysqli_prepare($connection, $sql);

/* 3. Unir parámetro a sentencia SQL con mysqli_stmt_bind_param().
    Los campos se introducen en el mismo orden de sentencia SQL
    Return true or false. "s" es parámetro string, también por
    cada campo */
$ok = mysqli_stmt_bind_param($result, "sss", $reference, $description, $family);

/* 4. Ejecuta con mysqli_stmt_execute */
$ok = mysqli_stmt_execute($result);

if($ok == false){
    echo "Error";
}else{
    echo "Record added<br>";
    mysqli_stmt_close($result);
}

mysqli_close($connection);

?>

</body>
</html>