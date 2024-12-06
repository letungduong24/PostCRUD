<?php
    require_once APP_ROOT . '/config/Config.php';
    include APP_ROOT . '/views/partials/header.php';
?>

<body>
    <?php include APP_ROOT . '/views/partials/navbar.php'; ?>
    <div class="wrap-login">
        <h2 class="d-flex justify-content-center mb-5">Thêm bài viết</h2>
        <form class="login-form" method="POST" action="<?php echo BASE_URL . '/controllers/handleCreate.php'; ?>" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="form-label">Tiêu đề</label>
                <input type="text" class="form-control" name="title">
            </div>
            <div class="mb-3">
                <label class="form-label">Nội dung</label>
                <textarea class="form-control" name="content"></textarea>
            </div>
            <div class="mb-3">
            <select name="categories" class="form-select form-select-sm" aria-label="Small select example">
                <?php foreach($categories as $category){ ?>
                <option value="<?php echo $category['id']?>"><?php echo $category['name']?></option>
                <?php }; ?>
            </select>
            </div>
            <div class="mb-3">
                <label for="image">Chọn Ảnh Mới:</label>
                <input class="form-control" type="file" name="image" id="image" accept="image/*">
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-dark search-btn me-4">Lưu thay đổi</button>
                <a href="<?php echo BASE_URL ?>/?controller=news&action=index" class="btn btn-secondary">Hủy</a>
            </div>
        </form>

    </div>
</body>