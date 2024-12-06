<?php
require_once '../config/Config.php';
require_once APP_ROOT . '/models/User.php'; 
        if(isset($_POST['username'])){
            $username = trim($_POST['username']);
            $password = trim($_POST['password']);
            $userModel = new User();
            $userModel->login($username, $password);
        }
        else{
            echo 'Lỗi';
        }

