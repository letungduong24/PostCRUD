<?php

require_once APP_ROOT . '/models/News.php'; 
require_once APP_ROOT . '/models/Categories.php'; 

class NewsController {
    public function index() {
        include APP_ROOT . '/config/Auth.php';
        $newsModel = new News();
        $news = $newsModel->getAllNews();
        include APP_ROOT . '/views/admin/news/index.php'; 
    }
    public function show() {
        include APP_ROOT . '/config/Auth.php';
        $newsModel = new News();
        $new = $newsModel->getOneNew($_GET['id']);
        $categoriesModel = new Categories();
        $categories = $categoriesModel->getAllCategories();
        include APP_ROOT . '/views/news/detail.php'; 
    }
    
}