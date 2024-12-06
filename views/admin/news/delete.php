<?php
    require_once APP_ROOT . '/config/Config.php';
    include APP_ROOT . '/views/partials/header.php';
?>

<body>
    <?php include APP_ROOT . '/views/partials/navbar.php'; ?>
    <div class="wrap-login">
        <h2 class="d-flex justify-content-center mb-5">Xác nhận xóa bài viết <?php echo $new['title'] ?>?</h2>
        <form class="login-form" method="POST" action="<?php echo BASE_URL . '/controllers/handleDelete.php'; ?>" enctype="multipart/form-data">
            <div class="d-flex justify-content-center">
                <button name="id" value="<?php echo $new['id'] ?>" type="submit" class="btn btn-dark search-btn me-4">Xóa</button>
                <a href="<?php echo BASE_URL ?>/?controller=news&action=index" class="btn btn-secondary">Hủy</a>
            </div>
        </form>

    </div>
</body>