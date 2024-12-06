<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once './config/Config.php';
require_once APP_ROOT . '/controllers/HomeController.php';
require_once APP_ROOT . '/controllers/AdminController.php';
require_once APP_ROOT . '/controllers/NewsController.php';
$controller = $_GET['controller'] ?? 'home';
$action = $_GET['action'] ?? 'index';

switch ($controller) {
    case 'home':
        $controllerObj = new HomeController();
        break;
    case 'admin':
        $controllerObj = new AdminController();
        break;
    case 'news':
        $controllerObj = new NewsController();
        break;
    default:
        die("Controller không tồn tại");
}

if (method_exists($controllerObj, $action)) {
    $controllerObj->$action();
} else {
    die("Action không hợp lệ");
}
