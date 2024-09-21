<?php

class CustomersModel
{
    private $db;
    private $customers;

    public function __construct()
    {
        require_once("model/Connect.php");
        $this->db = Connect::connection();
        $this->customers = array();
    }

    public function getCustomers()
    {
        require("Pagination.php");

        $query = $this->db->query("SELECT * FROM clientes LIMIT $pagestart, $recordsperpage");
        while($rows = $query->fetch(PDO::FETCH_ASSOC)){
            $this->customers[] = $rows;
        }
        return $this->customers;
    }

}

?>