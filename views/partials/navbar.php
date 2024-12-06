<div class="navbar d-flex justify-content-between align-items-center">
        <ul class="nav nav-item">
            <h2 class="heading">TLU News</h2>
            <p>|</p>
            <li><a href="<?php echo BASE_URL?>/?controller=home&action=index">Trang chủ</a></li>
            <li><a href="<?php echo BASE_URL?>/?controller=admin&action=index">Bảng quản trị</a></li>
        </ul>
        <form method="POST" action="<?php echo BASE_URL?>/?controller=news&action=search" class="d-flex nav-item search-form align-items-center justify-content-between">
            <input name="search" type="text" class="form-control search-input" placeholder="Tìm kiếm bài viết">
            <button type="submit" class="btn btn-dark search-btn">Tìm</button>
        </form>
        </div>
    </div>