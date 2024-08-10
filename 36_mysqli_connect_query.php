<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Mysql bbdd</title>
</head>
<body>

<?php

/* Relacional, multihilo, multiusuario. 
    Modos de conexiones:
        - Orientado a objetos: Con la clase Mysqli
        - Por procedimientos: Función mysqli_connect */

/* 4 variables con los datos para la conexión */

$db_host = "localhost";
$db_name = "phppoo";
$db_user = "root";
$db_pass = "";

/* Conexión por procedimientos */

$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
$query = "SELECT * FROM persons";

/* $result es un Recordset: Tabla en memoria donde hemos cargado
    todos los datos. */

$result = mysqli_query($connection, $query);

/* Almacena los registros, pero de uno en uno. Cada vez que lo ejecutas
    saltas al siguiente. */
    
$row = mysqli_fetch_row($result);

echo $row[0];
echo $row[1];
echo $row[2];

?>

</body>
</html>