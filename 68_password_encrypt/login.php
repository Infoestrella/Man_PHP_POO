<?php

try {

    $user = htmlentities(addslashes($_POST["user"]));
    $password = htmlentities(addslashes($_POST["password"]));
    $counter = 0;

    $base = new PDO('mysql:host=localhost;dbname=infoestrella', 'root', '');
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM usuarios WHERE user=:user";
    $result = $base->prepare($sql);

    $result->execute(array(":user"=>$user));

    while($recordset = $result->fetch(PDO::FETCH_ASSOC)){
        /* Comparo el password del formulario con el de bbdd */
        if (password_verify($password, $recordset['password'])){
            $counter++;
        }
    }

    echo $counter > 0 ? "Registered user" : "No registered user";

} catch (Exception $exception) {
    echo "Error: " . $exception->getMessage() . " on line " . $exception->getLine();
} finally {

    $base = null;
}

?>

