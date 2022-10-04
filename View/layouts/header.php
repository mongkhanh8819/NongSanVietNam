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
          <li class="dropdown user user-menu" style="height: 52px; padding: 0px">
          <!-- <a class="nav-link nav-item" href="register.php" style="margin-top:25px">Đăng Ký</a> -->
          <!--  -->
          <?php if (isset($_SESSION['MaVaiTro']) && $_SESSION['MaVaiTro'] == 1){
      echo "<a class='nav-link nav-item' href='' style='margin-top:25px'>".$_SESSION['TenAdmin']."</a>";
      echo "<a class='nav-link nav-item' href='admincp/' style='margin-top:25px'>Về ADMINCP</a>";}elseif(isset($_SESSION['MaVaiTro']) && $_SESSION['MaVaiTro'] == 2){ ?>
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
            <img src="assets/uploads/avatar/<?php if (isset($_SESSION['MaVaiTro']) && $_SESSION['MaVaiTro'] == 2) {
              echo $_SESSION['avatar'];
            } else {} ?>" width="150px" height="170px" class="img-circle" alt="User Image">
            <p><?php 
            if (isset($_SESSION['MaVaiTro']) && $_SESSION['MaVaiTro'] == 2) {
              echo $_SESSION['TenNVPP'];
              echo "<br><small>NHÂN VIÊN PHÂN PHỐI</small></p>";
            } else {}
             ?>
        </li>
        <li class="user-footer">
            <div class="pull-left" style="float:left">
                <a href="" class="btn btn-default btn-flat">Chi tiết</a>
            </div>
            <div class="pull-right" style="float:right;">
                <a href="?dangxuat" class="btn btn-default btn-flat">Thoát</a>
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
<nav class="navbar navbar-expand-lg ">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav navbar-list" >
          
          <li class="nav-item nav-item_mt">
              <a class="nav-link nav-item" href="#"style="color:black;margin-left: 250px";>Về chúng tôi</a>
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
  </div>
</nav>



</div>
</div>
</div>