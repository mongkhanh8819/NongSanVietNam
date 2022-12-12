<?php

    //if (!isset($_SESSION['MaVaiTro'])) {
    include_once("Controller/NongSan/cNongSan.php");
    include_once("Controller/pagination.php");
 
    // Connect DB
      $p = new cNongSan();
     
    // Phân trang
    $config = array(
        'current_page'  => isset($_GET['page']) ? $_GET['page'] : 1,
        'total_record'  => $p->count_all_ns(), // tổng số thành viên
        'limit'         => 3,
        'link_full'     => 'index.php?page={page}',
        'link_first'    => 'index.php',
        'range'         => 9
    );
     
    $paging = new Pagination();
    $paging->init($config);
     
    // Lấy limit, start
    $limit = $paging->get_config('limit');
    $start = $paging->get_config('start');
     
    // Lấy danh sách thành viên
    $member = $p -> get_all_ns($limit, $start);
     
    //Kiểm tra nếu là ajax request thì trả kết quả
    if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
        die (json_encode(array(
            'member' => $member,
            'paging' => $paging->html()
        )));
    }
  //}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="assets/public/images/Fruit-Olive-Green-icon.png">
  <title>NÔNG SẢN VIỆT</title>

  <?php include("styles.php"); ?>
  <?php include("scripts.php"); ?>

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
<div style="position: fixed;top: 0;width: 100%;z-index: 99;">
<div class="block-nav">
    <div class="container">
<!-- Menu -->
<nav class="navbar navbar-expand-lg">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav navbar-list" >
          <li class="nav-item nav-logo"style="margin-top:16px">
           <a href="index.php"> <!-- <img src="https://theme.hstatic.net/200000401005/1000921080/14/logo.svg?v=20" alt=""> --><img src="assets/public/images/logo.png" alt=""></a>
          </li>
          <li>
          <div class="searchSpace">
            <input type="text" class="input-search">
            <i class="fa fa-search search-icon"></i>
          </div>
          </li>
          <li>
          <span>
            <i class="fa fa-shopping-cart" aria-hidden="true"style="margin-top:35px;margin-left:5px"></i>
          </span>
          </li>
          <li>
          <div class="img-flag">
            <img  class="flag-vietnam" src="https://icons.iconarchive.com/icons/wikipedia/flags/512/VN-Vietnam-Flag-icon.png" alt="">
          </div>
          </li>
        <div class="login" style="float:left;display:flex">
          <li>
          <?php if (isset($_SESSION['LoginSuccess']) == true || isset($_SESSION['login_id']) || isset($_SESSION['login_admin'])){
      echo "<a class='nav-link nav-item' href='?dangxuat' style='margin-top:25px'>Đăng Xuất</a>";}else{ ?>
          <a class="nav-link nav-item" href="?dangnhap" style="margin-top:25px">Đăng Nhập</a>
        <?php } ?>
          </li>
          <li class="dropdown user user-menu" style="height: 70px; padding: 0px">
          <!-- <a class="nav-link nav-item" href="register.php" style="margin-top:25px">Đăng Ký</a> -->
          <!--  -->
          <?php if (isset($_SESSION['MaVaiTro']) && $_SESSION['MaVaiTro'] == 1){
      echo "<a class='nav-link nav-item' href=''>".$_SESSION['TenAdmin']."</a>";
      echo "<a class='nav-link nav-item' href='admincp/'>Về ADMINCP</a>";}elseif(isset($_SESSION['MaVaiTro']) && $_SESSION['MaVaiTro'] == 2){ ?>
          <a class="nav-link nav-item dropdown-toggle" data-toggle="dropdown" href="" style="margin-top:25px">
            <span><i class="fa fa-user" aria-hidden="true"></i></span>
            <span class="hidden-xs"><?php echo $_SESSION['TenNVPP']; ?></span></a>
        <?php }elseif(isset($_SESSION['MaVaiTro']) && $_SESSION['MaVaiTro'] == 3){ ?>
          <a class="nav-link nav-item dropdown-toggle" data-toggle="dropdown" href="" style="margin-top:25px">
            <span><i class="fa fa-user" aria-hidden="true"></i></span>
            <span class="hidden-xs"><?php echo $_SESSION['TenNhaCungCap']; ?></span></a>
        <?php }elseif(isset($_SESSION['MaVaiTro']) && $_SESSION['MaVaiTro'] == 4){ ?>
          <a class="nav-link nav-item dropdown-toggle" data-toggle="dropdown" href="" style="margin-top:25px">
            <span><i class="fa fa-user" aria-hidden="true"></i></span>
            <span class="hidden-xs"><?php echo $_SESSION['TenDoanhNghiep']; ?></span></a>
        <?php }elseif(isset($_SESSION['MaVaiTro']) && $_SESSION['MaVaiTro'] == 5){ ?>
          <a class="nav-link nav-item dropdown-toggle" data-toggle="dropdown" href="" style="margin-top:25px">
            <span><i class="fa fa-user" aria-hidden="true"></i></span>
            <span class="hidden-xs"><?php echo $_SESSION['Ten_KHTV']; ?></span></a>
        <?php }elseif(isset($_SESSION['login_id'])){ ?>
          <a class="nav-link nav-item dropdown-toggle" data-toggle="dropdown" href="" style="margin-top:25px">
            <span><i class="fa fa-user" aria-hidden="true"></i></span>
            <span class="hidden-xs"><?php echo $_SESSION['name']; ?></span></a>
        <?php }else{
          echo "<a class='nav-link nav-item' href='register.php' style='margin-top:25px'>Đăng Ký</a>";
        } ?>
        <!--  -->
        <ul class="dropdown-menu" style="text-align: center;">
        <li class="user-header">
            <img src="assets/uploads/avatar/<?php if (isset($_SESSION['MaVaiTro']) || isset($_SESSION['login_id'])) {
              if ($_SESSION['avatar'] == "" || $_SESSION['avatar'] == NULL){
                echo "default.png";
              }else{
                echo $_SESSION['avatar'];
              }
            } else{} ?>" width="150px" height="170px" class="img-circle" alt="User Image">
            <p><?php 
            if (isset($_SESSION['MaVaiTro']) && $_SESSION['MaVaiTro'] == 2) {
              echo $_SESSION['TenNVPP'];
              echo "<br><small>NHÂN VIÊN PHÂN PHỐI</small></p>";
            } elseif(isset($_SESSION['MaVaiTro']) && $_SESSION['MaVaiTro'] == 1) {
              echo $_SESSION['TenAdmin'];
              echo "<br><small>QUẢN TRỊ VIÊN</small></p>";
            } elseif(isset($_SESSION['MaVaiTro']) && $_SESSION['MaVaiTro'] == 3) {
              echo $_SESSION['TenNguoiDaiDien']."<br>";
              echo $_SESSION['TenNhaCungCap'];
              echo "<br><small>NHÀ CUNG CẤP NÔNG SẢN</small></p>";
            } elseif(isset($_SESSION['MaVaiTro']) && $_SESSION['MaVaiTro'] == 4) {
              echo $_SESSION['TenDoanhNghiep'];
              echo "<br><small>DOANH NGHIỆP</small></p>";
            } elseif(isset($_SESSION['MaVaiTro']) && $_SESSION['MaVaiTro'] == 5 ) {
              echo $_SESSION['Ten_KHTV'];
              echo "<br><small>KHÁCH HÀNG</small></p>";
            } elseif(isset($_SESSION['login_id'])) {
              echo $_SESSION['name'];
              echo "<br><small>KHÁCH HÀNG</small></p>";
            } else{}
             ?>
        </li>
        <li class="user-footer">
            <div class="pull-left" style="float:center">
                <a href="?updatett" class="btn btn-default btn-flat" style="width: 200px;">Chi tiết</a>
            </div>
            <?php 

            if(isset($_SESSION['MaVaiTro']) && $_SESSION['MaVaiTro'] == 4) {
              ?><div class="pull-right" style="float:center;">
                <a href="?qldh" class="btn btn-default btn-flat" style="width: 200px;">Quản lý đơn hàng</a>
            </div><?php  
            } elseif(isset($_SESSION['MaVaiTro']) && $_SESSION['MaVaiTro'] == 5 ) {
              ?><div class="pull-right" style="float:center;">
                <a href="?qldh" class="btn btn-default btn-flat" style="width: 200px;">Quản lý đơn hàng</a>
            </div><?php
            } elseif(isset($_SESSION['login_id'])) {
              ?><div class="pull-right" style="float:center;">
                <a href="?qldh" class="btn btn-default btn-flat" style="width: 200px;">Quản lý đơn hàng</a>
            </div><?php
            } else {

            }

             ?>
            <div class="pull-right" style="float:center;">
                <a href="?dangxuat" class="btn btn-default btn-flat" style="width: 200px;">Thoát</a>
            </div>
        </li>
        </ul>
        </li>
        <!--  -->
        </div>

  </div>
</nav>
<!-- <img src="assets/uploads/avatar/<?php //echo $_SESSION['avatar']; ?>" alt="" width="60px" height="70px"> -->

</div>
</div>
<div class="block-nav" style="background-color:white;">
    <div class="container">
<!-- Menu -->
<!-- <nav class="navbar navbar-expand-lg ">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
 -->
  <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav navbar-list" >
          <li class="nav-item nav-item_mt">
              <a class="nav-link nav-item" href="index.php"style="color:black;margin-left: 250px";>Về chúng tôi</a>
          </li>
  
            <li class="nav-item nav-item_mt dropdown">
              <a class="nav-link nav-item dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"style="color:black">
              Giải pháp
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Trái cây</a>
                <a class="dropdown-item" href="#">Rau củ</a>
                <a class="dropdown-item" href="#">Khác</a>
              </div>
            </li>
          <li class="nav-item nav-item_mt">
            <a class="nav-link nav-item" href="#"style="color:black">Sản phẩm</a>
          </li>
          <li class="nav-item nav-item_mt">
              <a class="nav-link nav-item" href="#"style="color:black">Tin tức</a>
            </li>
          <li class="nav-item nav-item_mt">
              <a class="nav-link nav-item" href="#"style="color:black">Tuyển dụng</a>
            </li>
          
            <li class="nav-item nav-item_mt nav-item_mr">
              <a class="nav-link nav-item" href="#"style="color:black">Liên hệ</a>
            </li>
        </ul>
  </div> -->
  <!-- ĐÂY LÀ MENU -->
  <div class="topnav" id="myTopnav" style="margin-left: 0%;">
        <a href="index.php" class="active">TRANG CHỦ</a>
        <a href="?gioithieu">GIỚI THIỆU</a>
        <a href="?tintuc">TIN TỨC</a>
        <a href="?luongthuc">LƯƠNG THỰC</a>
        <a href="?raucu">RAU CỦ SẠCH</a>
        <a href="?hoaqua">HOA QUẢ</a>
        <a href="?huongdan">HƯỚNG DẪN MUA HÀNG</a>
        <a href="?truyxuat">TRUY XUẤT NGUỒN GỐC</a>
        <a href="?lienhe">LIÊN HỆ</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
          <i class="fa fa-bars"></i>
        </a>  
  </div>
<!-- </nav> -->



</div>



</div>



</div>
