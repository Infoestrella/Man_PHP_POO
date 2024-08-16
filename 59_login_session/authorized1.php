<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>NoName</title>
</head>
<body>

<?php

session_start();
if (!isset($_SESSION["user"])){
    header("location:index.php");
}

echo "User: " . $_SESSION["user"] . "<br>";
?>

<a href="authorized0.php">Back</a><br>
<a href="exit.php">Exit</a>

</body>
</html>