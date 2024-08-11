<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Mysql bbdd</title>
</head>
<body>

<?php

$reference = $_GET["reference"];
$description = $_GET["description"];
$updated = $_GET["updated"];

require("38_connection.php");

$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (mysqli_connect_errno()){
    echo "Connection fail.";
    die();
}

mysqli_set_charset($connection, "utf8");

$query = "UPDATE productos
    SET descripcion='$description', actualizado='$updated'
    WHERE referencia='$reference'";

$result = mysqli_query($connection, $query);

if ($result == false){
    echo "Error";
}else{
    echo "Record saved";
    echo "<form action='46_3_crud_update.php' method='get'>";
    echo "<input type='text' name='reference' value='" . $reference . "'><br>";
    echo "<input type='text' name='description' value='" . $description . "'><br>";
    echo "<input type='datetime-local' name='updated' value='" . $updated . "'><br>";
    echo "<input type='submit' name='send' value='updated'>";
    echo "</form><br>";
}


mysqli_close($connection);

?>

</body>
</html>