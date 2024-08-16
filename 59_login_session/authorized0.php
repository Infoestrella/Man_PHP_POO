<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>NoName</title>
</head>
<body>

<?php

/* Reanudamos la sesión  creada en login.php, para rescatar la variable
    superglobal. Si no está redirigimos a la principal */

session_start();
if (!isset($_SESSION["user"])){
    header("location:index.php");
}

?>

<?php
echo "Welcome, authorized user! " . $_SESSION["user"] . "<br>";
?>

<a href="authorized1.php">GoTo Authorized One</a><br>
<a href="exit.php">Exit</a>

</body>
</html>