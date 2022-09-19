<!DOCTYPE html>
<html>
<head>
    <title>WEBNONGSAN</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/public/images/Fruit-Olive-Green-icon.png">
    <title>Hệ thống phân phối nông sản sạch</title>
    <?php include("scripts.php"); ?>
    <?php include("styles.php") ?>

    <!-- alert cart -->
    <script src="assets/public/js/sweetalert.min.js"></script>

</head>

<body>
    <div id="site">
        <div id="container">
            <div id="header-wp">
                <div id="head-top" class="clearfix">
                    <div class="wp-inner">
                        <a href="" title="" id="payment-link" class="fl-left">Hình thức thanh toán</a>
                        <div id="main-menu-wp" class="fl-right">
                            <ul id="main-menu" class="clearfix">

                                <li>
                                    <a href="trang-chu.html" title="">Trang chủ</a>
                                </li>
                                <li>
                                    <a href="danh-muc/dien-thoai.html" title="">Sản phẩm</a>
                                </li>
                                <li>
                                    <a href="danh-sach-bai-viet.html" title="">Tin tức</a>
                                </li>
                                <li>
                                    <a href="gioi-thieu.html" title="">Giới thiệu</a>
                                </li>
                                <li>
                                    <a href="lien-he.html" title="">Liên hệ</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="head-body" class="clearfix">
                    <div class="wp-inner">
                        <a href="trang-chu.html" title="" id="logo" class="fl-left"><img src="assets/public/images/logo.png" /></a>
                        <div id="search-wp" class="fl-left">
                            <form method="GET" action="">
                                <input type="text" name="s" id="s" placeholder="Nhập từ khóa tìm kiếm tại đây!">
                                <button type="submit" id="sm-s">Tìm kiếm</button>
                            </form>
                            <ul id="result" class="dropdown-search">

                            </ul>

                        </div>
                        <div id="action-wp" class="fl-right">
                            <div id="advisory-wp" class="fl-left">
                                <span class="title">Tư vấn</span>
                                <span class="phone">0987.654.321</span>
                            </div>
                            <div id="btn-respon" class="fl-right"><i class="fa fa-bars" aria-hidden="true"></i></div>
                            <a href="gio-hang.html" title="giỏ hàng" id="cart-respon-wp" class="fl-right">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                <span id="num">2</span>
                            </a>
                            <div id="cart-wp" class="fl-right">
                                <div id="btn-cart">
                                    <a href="gio-hang.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                                    <span id="num"><?php if (!empty($_SESSION['cart']['buy'])) {
                                                        echo count($_SESSION['cart']['buy']);
                                                    } else {
                                                        echo 0;
                                                    };
                                                    ?></span>
                                </div>
                                <div id="dropdown">
                                    <?php if (!empty($_SESSION['cart']['buy'])) {
                                    ?>
                                        <p class="desc">Có <span id="count"><?php if (!empty($_SESSION['cart']['buy'])) echo count($_SESSION['cart']['buy']); ?> sản phẩm</span> trong giỏ hàng</p>
                                        <ul class="list-cart">
                                            <?php foreach ($_SESSION['cart']['buy'] as $item) { ?>
                                                <li class="clearfix">
                                                    <a href="gio-hang.html" title="" class="thumb fl-left">
                                                        <img class="img_cart" src="uploads/products/<?php echo $item['image'] ?>" alt="<?php echo $item['name'] ?>">
                                                    </a>
                                                    <div class="info fl-right">
                                                        <a href="gio-hang.html" id="name" title="<?php echo $item['name'] ?>" class="product-name"><?php echo $item['name'] ?></a>
                                                        <p class="price" id="price"><?php echo currency_format($item['price']) ?></p>
                                                        <p class="qty" id="qty">Số lượng: <?php echo $item['qty'] ?></p>
                                                    </div>
                                                </li>
                                            <?php }
                                            ?>
                                        </ul>
                                        <div class="action-cart clearfix">
                                            <a href="gio-hang.html" title="Xem giỏ hàng của bạn" class="checkout fl-right">Vào giỏ hàng</a>
                                        </div>
                                    <?php
                                    } else {
                                        echo "<p class='alert_cart'>Bạn chưa có sản phẩm nào ^^!</p>";
                                        echo "<img src='public/images/alert_cart.jpg'>";
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
                    <a class="navbar-brand" href="/">Nền tảng</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="/index.php">Trang chủ Frontend</a>
                            </li>
                        </ul>

                        <ul class="navbar-nav px-3 ml-auto">
                            <li class="nav-item text-nowrap">
                                <a class="nav-link" href="/dang-nhap.php">Đăng nhập</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>