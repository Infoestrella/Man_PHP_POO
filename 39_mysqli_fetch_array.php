<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Mysql bbdd</title>

    <style>

        table{
            width: 50%;
            border: 1px dotted #FF0000;
            margin: auto;
        }

    </style>

</head>
<body>

<?php

require("38_connection.php");

$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (mysqli_connect_errno()){
    echo "Connection fail.";
    die();
}

mysqli_set_charset($connection, "utf8");

/* Comodines
    %: cadena de caracteres
    _: 1 sólo carácter */

$query = "SELECT * FROM productos WHERE descripcion LIKE 'CABLE%'";
$result = mysqli_query($connection, $query);

/* Trabajamos con arrays asociativos */

while(($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) ==  true){
    echo "<table><tr><td>";
    echo $row["referencia"] . "</td><td>";
    echo $row["descripcion"] . "</td><td>";
    echo $row["codfamilia"] . "</td>";
    echo "</tr></table>";
}

mysqli_close($connection);

?>

</body>
</html>