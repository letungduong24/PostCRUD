<?php
require_once APP_ROOT . '/config/Database.php';

class News {
    private $db;

    public function __construct() {
        $this->db = Database::getConnection();
    }
    public function getOneNew($id){
        $stmt = $this->db->prepare("SELECT * FROM news where id = ?");
        $stmt->bind_param('s', $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }
    public function getAllNews() {
        $stmt = $this->db->prepare("SELECT * FROM news");
        $stmt->execute();
        return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    }
    public function create($title, $content, $image, $categoryId){
        $stmt = $this->db->prepare("INSERT INTO `news`(`title`, `content`, `image`, `created_at`, `categories_id`) VALUES (?, ?, ?, now(), ?)");
        $stmt->bind_param('ssss', $title, $content, $image, $categoryId);
        $stmt->execute();
    }
    public function update($title, $content, $image, $id){
        $stmt = $this->db->prepare("update news set title = ?, content = ?, image = ? where id = ?");
        $stmt->bind_param('ssss', $title, $content, $image, $id);
        $stmt->execute();
    }
    public function delete($id){
        $stmt = $this->db->prepare("delete from news where id=?");
        $stmt->bind_param('s', $id);
        $stmt->execute();
    }
}