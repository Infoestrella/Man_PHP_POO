<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>NoName</title>
</head>
<body>

<?php

/* $authenticated sólo para ver si user y password son correctas,
    la cookie va aparte. Si es la primera vez, tengo que comprobar
    si ya ha estado */

$authenticated = false;

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

        $authenticated = true;
        
        if (isset($_POST["rememberme"])){
            setcookie("userName", $_POST["user"], time()+86400);
        }

        header("location:authorized0.php");
        
    }else{

        /* Redirijo a la misma página */
        if ($authenticated==false){
            header("location:index.php");
        }else{
            header("location:authorized0.php");
        }
        
    }

}catch(Exception $exception){

    die("Error: " . $exception->getMessage());

}

?>

</body>
</html>