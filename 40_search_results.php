<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Mysql bbdd</title>
</head>
<body>

<?php

/* Almacena en $search lo que le pasamos por URL desde 40_search_form.php */

$search = $_GET["search"];

require("38_connection.php");

$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (mysqli_connect_errno()){
    echo "Connection fail.";
    die();
}

mysqli_set_charset($connection, "utf8");

$query = "SELECT * FROM productos WHERE descripcion LIKE '%" . $search . "%'";
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