<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Cookies</title>
</head>
<body>

<?php

/* Cookie es un fichero de texto plano que se guarda en disco duro
    al abrir la web. Puede almacenar casi cualquier cosa y rescatarla.
    Un carrito de la compra, un historial de navegación, por ejemplo.
    Pueden permanecer en el dd el tiempo que programemos. */

/*
if (isset($_COOKIE["mycookie"])){
    echo $_COOKIE["mycookie"];
}else{
    echo "Not cookie";
}
*/

echo isset($_COOKIE["mycookie"]) ? $_COOKIE["mycookie"] . "<br>" : "Not cookie<br>" ;
echo isset($_COOKIE["mycookietiming"]) ? $_COOKIE["mycookietiming"] . "<br>" : "Not cookie timing<br>" ;
echo isset($_COOKIE["mycookiepath"]) ? $_COOKIE["mycookiepath"] . "<br>" : "Not cookie timing with path<br>" ;

?>

</body>
</html>