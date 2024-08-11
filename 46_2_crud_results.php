<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Mysql bbdd</title>
</head>
<body>

<?php

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
    echo "<form action='46_3_crud_update.php' method='get'>";
    echo "<input type='text' name='reference' value='" . $row['referencia'] . "'><br>";
    echo "<input type='text' name='description' value='" . $row['descripcion'] . "'><br>";
    echo "<input type='datetime-local' name='updated' value='" . $row['actualizado'] . "'><br>";
    echo "<input type='submit' name='send' value='updated'>";
    echo "</form><br>";
}

mysqli_close($connection);

?>

</body>
</html>