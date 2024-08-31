<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Spanish</title>
</head>
<body>

<?php

if(isset($_COOKIE["selectedLanguage"])){
    if($_COOKIE["selectedLanguage"]=="es"){
        header("Location:content_spa.php");
    }elseif($_COOKIE["selectedLanguage"]=="en"){
        header("Location:content_eng.php");
    }
}

?>

<a href="createcookie.php?language=es">Contenido en español</a><br>
<a href="createcookie.php?language=en">English content</a>

</body>
</html>