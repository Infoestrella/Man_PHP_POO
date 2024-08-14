<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Mysql bbdd</title>
</head>
<body>

<?php

require("38_connection.php");

/* Método 2: Consultas preparadas. Este es el método adecuado. */

$search = $_GET["search"];

$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (mysqli_connect_errno()){
    echo "Connection fail.";
    die();
}

/* 1. El criterio es ?*/
$sql = "SELECT referencia, descripcion, codfamilia FROM productos WHERE codfamilia = ?";

/* 2. Utiliza mysqli_prepare, que devuelve mysqli_stmt() */
$result = mysqli_prepare($connection, $sql);

/* 3. Unir parámetro a sentencia SQL con mysqli_stmt_bind_param().
    Return true or false. "s" es parámetro string */
$ok = mysqli_stmt_bind_param($result, "s", $search);

/* 4. Ejecuta con mysqli_stmt_execute */
$ok = mysqli_stmt_execute($result);

if($ok == false){
    echo "Error";
}else{
    
/* 5. Asocia variables con cada campo con mysqli_stmt_bind_result() */
    $ok = mysqli_stmt_bind_result($result, $reference, $description, $family);

/* 6. Leer resultados con mysqli_stmt_fetch */
    echo "Results:<br>";
    while (mysqli_stmt_fetch($result)){
        echo $reference . " " . $description . " " . $family . "<br>";
    }
    mysqli_stmt_close($result);

}

mysqli_close($connection);

?>

</body>
</html>