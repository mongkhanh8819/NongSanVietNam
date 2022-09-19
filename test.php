<!DOCTYPE html>
<html>
<head>
    <title>WEBNONGSAN</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hệ thống phân phối nông sản sạch</title>
    <link href="assets/public/css/bootstrap/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/public/css/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/public/reset.css" rel="stylesheet" type="text/css" />
    <link href="assets/public/css/carousel/owl.carousel.css" rel="stylesheet" type="text/css" />
    <link href="assets/public/css/carousel/owl.theme.css" rel="stylesheet" type="text/css" />
    <link href="assets/public/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/public/style.css" rel="stylesheet" type="text/css" />
    <link href="assets/public/responsive.css" rel="stylesheet" type="text/css" />
    <script src="assets/public/js/jquery-2.2.4.min.js" type="text/javascript"></script>
    <script src="assets/public/js/elevatezoom-master/jquery.elevatezoom.js" type="text/javascript"></script>
    <script src="assets/public/js/bootstrap/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/public/js/carousel/owl.carousel.js" type="text/javascript"></script>
    <script src="assets/public/js/main.js" type="text/javascript"></script>
    <script src="assets/public/js/ajax.js" type="text/javascript"></script>

<!-- alert cart -->
<script src="public/js/sweetalert.min.js"></script>
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
                        <a href="trang-chu.html" title="" id="logo" class="fl-left"><img src="public/images/logo.png" /></a>
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
            </div>
<!-- HEADER -->

<div class="section" id="category-product-wp">
    <div class="section-head">
        <h3 class="section-title">Danh mục nông sản</h3>
    </div>
    <div class="secion-detail">
        <ul class="list-item">
            <li>
                <a href="danh-muc/dien-thoai.html" title="">Điện thoại</a>
            </li>
            <li>
                <a href="danh-muc/laptop.html" title="">Laptop</a>
            </li>
            <li class="">
                <a href="?page=category_product" title="" disabled="disabled">Máy tính bảng</a>
            </li>
            <li class="">
                <a href="?page=category_product" title="">Tai nghe</a>
            </li>
            <li class="">
                <a href="?page=category_product" title="">Thời trang</a>
            </li>
            <li class="">
                <a href="?page=category_product" title="">Đồ gia dụng</a>
            </li>
            <li class="">
                <a href="?page=category_product" title="">Thiết bị văn phòng</a>
            </li>
        </ul>
    </div>
</div>

<div class="section" id="selling-wp">
    <div class="section-head">
        <h3 class="section-title">Sản phẩm bán chạy</h3>
    </div>
    <div class="section-detail">
    </div>
</div>
<!-- slidebar -->
    <div id="footer-wp">
    <div id="foot-body">
        <div class="wp-inner clearfix">
            <div class="block" id="info-company">
                <h3 class="title">ISMART</h3>
                <p class="desc">ISMART luôn cung cấp luôn là sản phẩm chính hãng có thông tin rõ ràng, chính sách ưu đãi cực lớn cho khách hàng có thẻ thành viên.</p>
                <div id="payment">
                    <div class="thumb">
                        <img src="public/images/img-foot.png" alt="">
                    </div>
                </div>
            </div>
            <div class="block menu-ft" id="info-shop">
                <h3 class="title">Thông tin cửa hàng</h3>
                <ul class="list-item">
                    <li>
                        <p>Nguyễn Văn Bảo - Gò Vấp</p>
                    </li>
                    <li>
                        <p>0365529294 </p>
                    </li>
                    <li>
                        <p>Đặng Dương Anh Tuấn</p>
                    </li>
                    <li>
                        <p>Huỳnh Nguyễn Đan Trường</p>
                    </li>
                    <li>
                        <p>Trịnh Nhân Nghĩa</p>
                    </li>
                    
                </ul>
            </div>
            <div class="block menu-ft policy" id="info-shop">
                <h3 class="title">Chính sách mua hàng</h3>
                <ul class="list-item">
                    <li>
                        <a href="" title="">Quy định - chính sách</a>
                    </li>
                    <li>
                        <a href="" title="">Chính sách bảo hành - đổi trả</a>
                    </li>
                    <li>
                        <a href="" title="">Chính sách hội viện</a>
                    </li>
                    <li>
                        <a href="" title="">Giao hàng - lắp đặt</a>
                    </li>
                </ul>
            </div>
            <div class="block" id="newfeed">
                <h3 class="title">Bảng tin</h3>
                <p class="desc">Đăng ký với chung tôi để nhận được thông tin ưu đãi sớm nhất</p>
                <div id="form-reg">
                    <form method="POST" action="">
                        <input type="email" name="email" id="email" placeholder="Nhập email tại đây">
                        <button type="submit" id="sm-reg">Đăng ký</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="foot-bot">
        <div class="wp-inner">
            <p id="copyright">© Bản quyền thuộc về Đặng Dương Anh Tuấn</p>
        </div>
    </div>
</div>
</div>
<!-- footer -->
<div id="btn-top"><img src="public/images/icon-to-top.png" alt=""/></div>
<div id="fb-root"></div>
</body>
</html>
<!-- FOOTER -->