<?php

require_once APP_ROOT . '/models/News.php'; 
require_once APP_ROOT . '/models/Categories.php'; 


class HomeController {
    public function index() {
        $newsModel = new News();
        $categoriesModel = new Categories();
        $categories = $categoriesModel->getAllCategories();
        $news = $newsModel->getAllNews();
        include APP_ROOT . '/views/home/index.php'; 
    }
}
