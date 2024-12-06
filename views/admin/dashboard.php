<?php
    require_once APP_ROOT . '/config/Config.php';
    include APP_ROOT . '/views/partials/header.php';
?>

<body>
    <?php include APP_ROOT . '/views/partials/navbar.php'; ?>
    <div class="wrap-login">
        <h1>Quản trị viên</h1>
        <div class="panel d-flex flex-column align-items-center">
        <a href="<?php echo BASE_URL?>/?controller=news&action=index" class="btn btn-primary news-manager mb-3">Quản lý bài viết</a>
            <form class="logout-form" method="POST" action="<?php echo BASE_URL . '/controllers/LogoutController.php'; ?>">
                <button type="submit" class="btn btn-dark search-btn">Đăng xuất</button>
            </form>
        </div>

    </div>
</body>