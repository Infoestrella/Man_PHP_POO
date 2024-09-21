<?php

class Products_model
{
    private $db;
    private $products;

    public function __construct()
    {
        require_once("model/Connect.php");
        $this->db = Connect::connection();
        $this->products = array();
    }

    public function getProducts()
    {
        $query = $this->db->query("SELECT * FROM productos");
        while($rows = $query->fetch(PDO::FETCH_ASSOC)){
            $this->products[] = $rows;
        }
        return $this->products;
    }

}

?>