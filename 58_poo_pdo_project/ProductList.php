<?php

require ("connection.php");

Class ProductList extends Connection
{
    public function __construct(){
        parent::__construct();
    }

    public function getProducts($search){
        /* Con mysqli
        $result = $this->connection->query('SELECT * FROM productos WHERE codfamilia="' . $search . '"');
        $products = $result->fetch_all(MYSQLI_ASSOC);
        return $products;
        */

        /* Ahora con PDO*/
        $sql = "SELECT * FROM productos WHERE codfamilia='" . $search . "'";
        $prepared = $this->connection->prepare($sql);
        $prepared->execute(array());
        $result = $prepared->fetchAll(PDO::FETCH_ASSOC);
        $prepared->closeCursor();
        return $result;
        $this->connection = null;
    }

}

?>
