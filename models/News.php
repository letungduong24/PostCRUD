<?php
require_once APP_ROOT . '/config/Database.php';

class News {
    private $db;

    public function __construct() {
        $this->db = Database::getConnection();
    }
    public function getAllNews() {
        $stmt = $this->db->prepare("SELECT * FROM news");
        $stmt->execute();
        return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    }
    
}