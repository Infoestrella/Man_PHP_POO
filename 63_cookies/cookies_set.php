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

/* Si no digo nada, la cookie dura mientras el navegador está abierto
    - Sintaxis: setcookie(name, value, expireinseconds, path, domain, ...)
    - time() es la fecha y hora actual, si le sumo + 30 son seconds */

setcookie("mycookie", "My first cookie");
setcookie("mycookietiming", "My second cookie whit timming", time()+30);
setcookie(
    "mycookiepath",
    "My second cookie whit timming and path",
    time()+30,
    "phppoo/63_cookies/"
);

/* Con tiempo negativo elimina cookie */

setcookie("mycookie", "My first cookie", time()-1);

?>

</body>
</html>