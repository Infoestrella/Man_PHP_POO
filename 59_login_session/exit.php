<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>NoName</title>
</head>
<body>

<?php

session_start();
session_destroy();

header("location:index.php");

?>

</body>
</html>