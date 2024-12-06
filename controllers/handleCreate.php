<?php
require_once '../config/Config.php';
require_once APP_ROOT . '/models/News.php';

if (isset($_POST['title'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $idCategory = trim($_POST['categories']);
    $fileName = '';

    if (!empty($_FILES['image']['name'])) {
        $uploadDir = APP_ROOT . '/public/images/'; 
        $fileName = time() . "_" . basename($_FILES['image']['name']);
        $filePath = $uploadDir . $fileName;

        $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
        if (in_array($_FILES['image']['type'], $allowedTypes)) {
            if (!move_uploaded_file($_FILES['image']['tmp_name'], $filePath)) {
                echo "Lỗi khi tải ảnh lên!";
                exit;
            }
        } else {
            echo "Định dạng ảnh không hợp lệ!";
            exit;
        }
    } else {
        $newsModel = new News();
        $existingNews = $newsModel->getOneNew($id);
        $fileName = $existingNews['image'];
    }

    $newsModel = new News();
    $newsModel->create($title, $content, $fileName, $idCategory);

    header('Location: ' . BASE_URL . '/?controller=news&action=index');
    exit;
} else {
    echo "Lỗi: Dữ liệu không hợp lệ!";
}