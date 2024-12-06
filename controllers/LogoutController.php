<?php
require_once '../config/Config.php';
require_once APP_ROOT . '/models/User.php'; 
$userModel = new User();
$userModel->logout();
