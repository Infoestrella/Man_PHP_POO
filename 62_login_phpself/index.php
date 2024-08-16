<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>NoName</title>
</head>
<body>

<!-- Todo en una misma página. Recarga cada vez que pulso submit.
    Esto lo hago con $_SERVER -->

<?php

/* ¿Hemos pulsado botón enviar isset send?. La primera vez que entramos
    todavía no lo hemos pulsado */
if (isset($_POST["send"])){

    try{

        $pdo = new PDO("mysql:host=localhost; dbname=infoestrella", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT * FROM usuarios WHERE user = :userMark AND password = :passwordMark";

        $result = $pdo->prepare($sql);

        $user = htmlentities(addslashes($_POST["user"]));
        $password = htmlentities(addslashes($_POST["password"]));

        $result->bindValue(":userMark", $user);
        $result->bindValue(":passwordMark", $password);

        $result->execute();

        $usersCount = $result->rowCount();

        if ($usersCount != 0){

            session_start();
            $_SESSION["user"] = $_POST["user"];
            
            header($_SERVER['PHP_SELF']);
            
        }else{
            echo "Incorrect login";
        }

    }catch(Exception $exception){

        die("Error: " . $exception->getMessage());

    }

}

/* Carga el formulario en la parte de arriba, pero sólo si hemos
    iniciado sesión */

if (!isset($_SESSION["usuario"])){
    include("form.php");
}else{
    echo "User: " . $_SESSION["user"];
}

?>

<h2>Content</h2>
<p>This is restricted content</p>

</body>
</html>