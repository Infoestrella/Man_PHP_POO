<?php

require ("config.php");

class Connection
{
    protected $connection;

    public function __construct(){
        $this->connection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        if($this->connection->connect_errno){
            echo "Db connection fail " . $this->connection->connect_errno;
            return;
        }
        $this->connection->set_charset(DB_CHARSET);
    }

}

?>
