<?php
require_once APP_ROOT . '/config/Database.php';

class Categories {
    private $db;

    public function __construct() {
        $this->db = Database::getConnection();
    }

    public function getAllCategories() {
        $stmt = $this->db->prepare("SELECT * FROM categories");
        $stmt->execute();
        return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    }
}
