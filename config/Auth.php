<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['profile'])) {
    header('Location: ' . BASE_URL . '/views/admin/login.php');
    exit();
}

