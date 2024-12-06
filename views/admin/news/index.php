<?php
    require_once APP_ROOT . '/config/Config.php';
    include APP_ROOT . '/views/partials/header.php';
?>

<body>
    <?php include APP_ROOT . '/views/partials/navbar.php'; ?>
    <div class="">
        <div class="heading-news d-flex justify-content-between">
            <h1>Quản lý bài viết</h1>
            <a class="btn btn-success d-flex align-items-center" href="<?php echo BASE_URL?>/?controller=news&action=create">Thêm bài viết</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Tiêu đề</th>
                <th scope="col">Nội dung</th>
                <th scope="col">Ảnh</th>
                <th scope="col">Hành động</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($news as $new){ ?>
                <tr>
                    <th scope="row"><?php echo $new['id'] ?></th>
                    <td><?php echo $new['title'] ?></td>
                    <td><?php echo $new['content'] ?></td>
                    <td><?php echo $new['image'] ?></td>
                    <td>
                        <div class="action-news d-flex">
                            <a href="<?php echo BASE_URL?>/?controller=news&action=update&id=<?php echo $new['id']?>" class="btn btn-warning ms-2">Sửa</a>
                            <a href="<?php echo BASE_URL?>/?controller=news&action=delete&id=<?php echo $new['id']?>" class="btn btn-warning ms-2">Xóa</a>
                        </div>
                    </td>
                </tr>  
                <?php }; ?>          
            </tbody>
        </table>
    </div>
</body>