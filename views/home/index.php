<?php 
    include APP_ROOT . '/views/partials/header.php';

?>

<body>
    <?php include APP_ROOT . '/views/partials/navbar.php' ?>
    <?php include APP_ROOT . '/views/partials/categories.php' ?>
    <div class="background shadow-lg mb-3">
        <h1>TLU News</h1>
    </div>
    <div class="content">
        <?php foreach ($news as $new): ?>
            <div class="post shadow-lg">
            <img class="img-post" src="<?php echo BASE_URL; ?>/public/images/<?php echo $new['image']; ?>" alt="Image not found">
            <div class="post-body">
                    <h5 class="img-title my-2"><?php echo $new['title']; ?></h5>
                    <p class="img-body my-2"><?php echo $new['content']; ?></p>
                    <div class="credit d-flex justify-content-between align-items-center">
                        <span><?php echo $new['created_at']; ?> - Admin</span>
                        <a href="<?php echo BASE_URL ?>/?controller=news&action=show&id=<?php echo $new['id'] ?>" class="btn btn-dark search-btn">Chi tiết</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</body>

<?php 
include APP_ROOT .  '/views/partials/footer.php';
?>