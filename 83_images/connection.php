<?php

require ("connection_data.php");

$connection = mysqli_connect($db_host, $db_user, $db_pwd);

if (mysqli_connect_errno()){
    echo "Connection fail";
    exit();
}

mysqli_select_db($connection, $db_name) or die ("Database not found");
mysqli_set_charset($connection, "utf8");
$query = "UPDATE persons SET image='$imagename' WHERE id='1'";
echo $query;
$result = mysqli_query($connection, $query);

?>