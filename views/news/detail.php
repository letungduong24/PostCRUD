<?php 
    include APP_ROOT . '/views/partials/header.php';

?>

<body>
    <?php include APP_ROOT . '/views/partials/navbar.php' ?>
    <?php include APP_ROOT . '/views/partials/categories.php' ?>
    <div class="background shadow-lg mb-3">
        <h1>TLU News</h1>
    </div>
    <div class="post-content d-flex">
        <img class="w-50 rounded-4" src="<?php echo BASE_URL; ?>/public/images/<?php echo $new['image']; ?>" alt="Image not found">
        <div class="post-body w-50 d-flex flex-column">
            <h1 class="h1"><?php echo $new['title'] ?></h1>
            <p><?php echo $new['content'] ?></p>
            <p><?php echo $new['created_at'] ?> - Admin</p>
            <a href="<?php echo BASE_URL ?>/?controller=home&action=index" class="btn btn-secondary w-25">Quay lại</a>
        </div>
    </div>
</body>

<?php 
include APP_ROOT .  '/views/partials/footer.php';
?>