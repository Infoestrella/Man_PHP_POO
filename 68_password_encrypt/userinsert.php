<?php

$user = $_POST["user"];
$password = $_POST["password"];

$cryptpassword = password_hash($password, PASSWORD_DEFAULT, array("cost"=>12));

try {

    $base = new PDO('mysql:host=localhost;dbname=infoestrella', 'root', '');
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO usuarios (user, password) VALUES (:user, :password)";
    $result = $base->prepare($sql);

    $result->bindParam(':user', $user);
    $result->bindParam(':password', $cryptpassword);

    if ($result->execute()) {
        echo "User registered successfully";
    } else {
        echo "Failed to register user";
    }

    $result->closeCursor();

} catch (Exception $exception) {
    echo "Error: " . $exception->getMessage() . " on line " . $exception->getLine();
} finally {
    $base = null;
}

?>

