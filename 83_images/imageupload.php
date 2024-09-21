<?php

/* $_FILES almacena datos de archivo, funciona como $_GET, $_POST */
$imagename = $_FILES['image']['name'];
$imagetype = $_FILES['image']['type'];
$imagesize = $_FILES['image']['size'];

if ($imagesize <= 1000000){

    if ($imagetype == "image/png"){
    
        /* Destination folder */
        $folder = $_SERVER['DOCUMENT_ROOT'] . '/phppoo/83_images/';

        /* tmp_name is system temporal folder */
        move_uploaded_file($_FILES['image']['tmp_name'], $folder . $imagename);

        echo "File " . $imagename . " uploaded";

    }else{
        echo "Type not supported. Only .png";
    }

}else{
    echo "Size excedeed";
}

require ("connection.php");

?>