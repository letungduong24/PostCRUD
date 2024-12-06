<?php
require_once '../config/Config.php';
require_once APP_ROOT . '/models/News.php';

if (isset($_POST['id'])) {
    $id = trim($_POST['id']);
    $newsModel = new News();
    $newsModel->delete($id);

    header('Location: ' . BASE_URL . '/?controller=news&action=index');
    exit;
} else {
    echo "Lỗi: Dữ liệu không hợp lệ!";
}