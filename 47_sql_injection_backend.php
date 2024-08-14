<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Mysql bbdd</title>
</head>
<body>

<?php

require("38_connection.php");

/* Método 1: Con mysqli_real_escape_string, que escapa los caracteres
    especiales. Hay que capturar las variables después de conectar.
    Después aplicamos la función.
    Ver el método 2 en 49_sql_injection... */

$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
$search = mysqli_real_escape_string($connection, $_GET["search"]);

if (mysqli_connect_errno()){
    echo "Connection fail.";
    die();
}

/* Si en el cuadro de búsqueda pongo "myproduct' or '1'='1" (sin las
    comillas dobles), ya tenemos ejecutado el ataque. */

$query = "SELECT * FROM productos WHERE descripcion = '" . $search . "'";
echo $query . '<br>';

$result = mysqli_query($connection, $query);

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