<?php

require ("connection.php");

Class ProductList extends Connection
{
    public function __construct(){
        parent::__construct();
    }

    public function getProducts(){
        $result = $this->connection->query('SELECT * FROM productos');
        $products = $result->fetch_all(MYSQLI_ASSOC);
        return $products;
    }

}

?>
