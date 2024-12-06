<?php
    require_once '../../config/Config.php';
    require_once APP_ROOT . '/config/Config.php';
    include APP_ROOT . '/views/partials/header.php';
?>

<body>
    <?php include APP_ROOT . '/views/partials/navbar.php'; ?>
    <div class="wrap-login">
        <h2 class="d-flex justify-content-center mb-5">Đăng nhập Admin</h2>
        <form class="login-form" method="POST" action="<?php echo BASE_URL . '/controllers/LoginController.php'; ?>">
            <div class="mb-3">
                <label class="form-label">Tên đăng nhập</label>
                <input type="text" class="form-control" name="username">
            </div>
            <div class="mb-3">
                <label class="form-label">Mật khẩu</label>
                <input type="password" class="form-control" name="password">
            </div>
            <div class=" d-flex justify-content-center">
                <button type="submit" class="btn btn-dark search-btn">Đăng nhập</button>
            </div>
        </form>
    </div>
</body>