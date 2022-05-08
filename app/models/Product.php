<?php
class Product {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }
    public function getProduct() {
        $this->db->query("SELECT * FROM product");
        return $this->db->resultSet();
    }
}