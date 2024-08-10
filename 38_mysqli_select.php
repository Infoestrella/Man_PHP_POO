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

$query = "SELECT * FROM productos WHERE codfamilia='ERP'";
$result = mysqli_query($connection, $query);

while(($row = mysqli_fetch_row($result)) ==  true){
    echo "<table><tr><td>";
    echo $row[0] . "</td><td>";
    echo $row[1] . "</td><td>";
    echo $row[2] . "</td><td>";
    echo $row[3] . "</td><td>";
    echo $row[4] . "</td><td>";
    echo $row[8] . "</td>";
    echo "</tr></table>";
}


mysqli_close($connection);

?>

</body>
</html>