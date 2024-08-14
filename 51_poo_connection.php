<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>POO connection</title>
</head>
<body>

<?php

/* Orientado a Objetos: Instancio mysqli y lo trato como clase.
    Después aplico los métodos necesarios. */

$connection = new mysqli("localhost", "root", "", "infoestrella");
echo ($connection->connect_errno) ? "Connection fail: " . $connection->connect_error : "Connection successful.<br>";
$connection->set_charset("utf8");

$sql = "SELECT * FROM productos";
$result = $connection->query($sql);

while ($row = $result->fetch_assoc()){
    echo "<table><tr><td>";
    echo $row["referencia"] . "</td><td>";
    echo $row["descripcion"] . "</td><td>";
    echo $row["codfamilia"] . "</td>";
    echo "</tr></table>";
}

$connection->close();

?>

</body>
</html>