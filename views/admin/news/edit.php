<?php
    require_once APP_ROOT . '/config/Config.php';
    include APP_ROOT . '/views/partials/header.php';
?>

<body>
    <?php include APP_ROOT . '/views/partials/navbar.php'; ?>
    <div class="wrap-login">
        <h2 class="d-flex justify-content-center mb-5">Sửa bài viết</h2>
        <form class="login-form" method="POST" action="<?php echo BASE_URL . '/controllers/HandleEdit.php'; ?>" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="form-label">Tiêu đề</label>
                <input type="text" class="form-control" name="title" value="<?php echo $new['title']; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Nội dung</label>
                <textarea class="form-control" name="content"><?php echo $new['content']; ?></textarea>
            </div>
            <div class="mb-3">
                <label for="image">Ảnh hiện tại:</label><br>
                <img src="<?php echo BASE_URL; ?>/public/images/<?php echo $new['image']; ?>" height="150px"><br><br>
            </div>
            <div class="mb-3">
                <label for="image">Chọn Ảnh Mới:</label>
                <input class="form-control" type="file" name="image" id="image" accept="image/*">
            </div>
            <div class="d-flex justify-content-center">
                <button name="id" value="<?php echo $new['id']; ?>" type="submit" class="btn btn-dark search-btn me-4">Lưu thay đổi</button>
                <a href="<?php echo BASE_URL ?>/?controller=news&action=index" class="btn btn-secondary">Hủy</a>
            </div>
        </form>

    </div>
</body>