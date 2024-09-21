<?php

class Connect
{
    public static function connection()
    {
        try{
            $connection = new PDO('mysql:host=localhost; dbname=infoestrella', 'root', '');
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $connection->exec("SET CHARACTER SET UTF8");
        }catch(Exception $exception){
            die($exception->getMessage());
            echo $exception->getLine();
        }
        return $connection;
    }
}

?>