<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>NoName</title>
</head>
<body>

<?php

try{

    $pdo = new PDO("mysql:host=localhost; dbname=infoestrella", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM usuarios WHERE user = :userMark AND password = :passwordMark";

    $result = $pdo->prepare($sql);

    /* htmlentities transforma todo en html y addslashes escapa*/
    $user = htmlentities(addslashes($_POST["user"]));
    $password = htmlentities(addslashes($_POST["password"]));

    /* Asigno variables a marcadores con bindValue */
    $result->bindValue(":userMark", $user);
    $result->bindValue(":passwordMark", $password);

    $result->execute();

    $usersCount = $result->rowCount();

    if ($usersCount != 0){

        /* No se puede hacer la redirección directamente con
            header("location:authorized.php"), podríamos copiar y
            pegar la URL y estaríamos dentro. Hay que utilizar sesiones.
            session_start() puede utilizarse con GET o POST, o bien
            con cookies. Así podemos utilizar el valor de $_SESSION
            en cualquier lugar de nuestro sitio. */

        session_start();
        $_SESSION["user"] = $_POST["user"];
        
        header("location:authorized0.php");
        
    }else{
        /* Redirijo a la misma página */
        header("location:index.php");
    }

}catch(Exception $exception){

    die("Error: " . $exception->getMessage());

}

?>

</body>
</html>