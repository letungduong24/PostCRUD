<?php

require_once APP_ROOT . '/models/News.php'; 
class AdminController {
    public function index() {
        include APP_ROOT . '/config/Auth.php';
        $newsModel = new News();
        $news = $newsModel->getAllNews();
        include APP_ROOT . '/views/admin/dashboard.php'; 
    }
}
