<?php

try{
    $base = new PDO('mysql:host=localhost; dbname=facturascriptsdb', 'root', '');
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $base->exec("SET CHARACTER SET UTF8");
}catch(Exception $exception){
    die('Error: '. $exception->getMessage());
    echo "Error line: " . $exception->getLine();
}

?>