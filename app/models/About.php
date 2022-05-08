<?php
class About {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }
    public function getAbout() {
        $this->db->query("SELECT * FROM employees");
        return $this->db->resultSet();
    }
}