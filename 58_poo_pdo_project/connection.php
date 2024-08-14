<?php

require ("config.php");

class Connection
{
    protected $connection;

    public function __construct(){
        
        /* Esto conecta con mysqli
        $this->connection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        if($this->connection->connect_errno){
            echo "Db connection fail " . $this->connection->connect_errno;
            return;
        }
        $this->connection->set_charset(DB_CHARSET);
        */

        /* Ahora con PDO*/
        try{
            $this->connection = new PDO(
                'mysql:host=' . DB_HOST . '; dbname=' . DB_NAME, DB_USER, DB_PASSWORD
            );
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->connection->exec("SET CHARACTER SET utf8");
            return $this->connection;
        }catch(Exception $exception){
            echo "Error line: " . $exception->getLine();
        }


    }

}

?>
