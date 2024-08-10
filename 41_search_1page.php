<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Mysql bbdd</title>

    <!-- Hace todo desde la misma página -->

    <?php

    /* El código php en el head, al cargar es lo primero que lee siempre
        Pero lo meto en función para controlar ejecución. */
         
    function execute($theSearch){

        require("38_connection.php");

        $connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

        if (mysqli_connect_errno()){
            echo "Connection fail.";
            die();
        }

        mysqli_set_charset($connection, "utf8");

        $query = "SELECT * FROM productos WHERE descripcion LIKE '%" . $theSearch . "%'";
        $result = mysqli_query($connection, $query);

        while(($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) ==  true){
            echo "<table><tr><td>";
            echo $row["referencia"] . "</td><td>";
            echo $row["descripcion"] . "</td><td>";
            echo $row["codfamilia"] . "</td>";
            echo "</tr></table>";
        }

        mysqli_close($connection);

    }

    ?>

</head>
<body>

<?php
    $mySearch = $_GET["search"];

    /* $_SERVER ¿A qué página tiene que llamar 
        PHP_SELF a ella misma*/

    $myPage = $_SERVER["PHP_SELF"];

    /* La 1ª vez que entra $mySearch es null, así que pinta el form.
        Submit recarga la página, pero $mySearch tiene valor así
        que ejecuta función. */

    if ($mySearch){
        execute($mySearch);
    }else{
        echo("<form action = '" . $myPage . "' method='get'>
        <label>Search<input type='text' name='search'></label>
        <input type='submit' name='send' value='Send'>
        </form>");
    }
?>

</body>
</html>