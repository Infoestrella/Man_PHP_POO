<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>PDO</title>
</head>
<body>

<?php

/* Librería para trabajar con cualquier bbdd y PHP. Capa de
    abstracción. Utiliza POO. Ventaja que puede conectar con
    otras bbdd. */

/* Instancio clase PDO.
    Si hay fallos, son excepciones en tiempos de ejecución. Se 
    genera un objeto "Exception" con propiedades y métodos.
    "try"... intenta instanciar
    "catch"... si falla captura el fallo
    "finally"... hayas conectado o no ... Normalmente vacías */

try{
    $pdo = new PDO("mysql:host=localhost; dbname=infoestrella", "root", "");
    echo "Connection successful<br>";
}
catch(Exception $exception){
    die('Exception: ' . $exception->getMessage());
}
finally{
    $pdo = null;
}

?>

</body>
</html>