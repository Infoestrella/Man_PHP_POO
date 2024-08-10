<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Mysql bbdd</title>
</head>
<body>

<!-- GET traslada el valor del search a la URL.
    action dice donde va a ir al pulsar submit.
    Botón submit envía formulario y deja el dato en la URL (search=valor)
    para que lo rescate -->
    
<form action = "40_search_results.php" method="get">
    <label>Search<input type="text" name="search"></label>
    <input type="submit" name="send" value="Send">
</form>

</body>
</html>