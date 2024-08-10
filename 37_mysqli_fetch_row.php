<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Mysql bbdd</title>
</head>
<body>

<?php

$db_host = "localhost";
$db_name = "phppoo";
$db_user = "root";
$db_pass = "";

$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

/* Manejo de errores. Se dispara la función y acaba ejecución. */

if (mysqli_connect_errno()){
    echo "Connection fail.";
    //exit();
    die();
}

/* Manejo de caracteres */

mysqli_set_charset($connection, "utf8");

$query = "SELECT * FROM persons";
$result = mysqli_query($connection, $query);

while(($row = mysqli_fetch_row($result)) ==  true){
    echo $row[0] . ", " . $row[1] . ", " . $row[2] . "<br>";
}

mysqli_close($connection);

?>

</body>
</html>