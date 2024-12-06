<?php
session_start();
require_once APP_ROOT . '/config/Database.php';

class User {
    private $db;

    public function __construct() {
        $this->db = Database::getConnection();
    }

    public function login($username, $password) {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
        $stmt->bind_param('ss', $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();
    
        if ($result->num_rows === 1) {
            $_SESSION['profile'] = $result->fetch_assoc();
            header('Location: ' . BASE_URL . '/?controller=admin&action=index');
            exit; 
        } else {
            header('Location: ' . BASE_URL . '/?controller=admin&action=index');
        }
    
        $stmt->close(); 
    }
    public function logout() {
        unset($_SESSION['profile']);
        header('Location: ' . BASE_URL . '/?controller=home&action=index');
    }
}
