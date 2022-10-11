<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="../assets/public/images/Fruit-Olive-Green-icon.png">
  <title>NÔNG SẢN VIỆT</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="../assets/public/style2.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../assets/vendor/font-awesome/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/vendor/dist/css/adminlte.min.css">
  
  <link rel="stylesheet" type="text/css" href="../assets/public/css/dangky.css">

  <style type="text/css">
  ul li a{
    font-size: 15px;
  }
  body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
  }

  .topnav {
      overflow: hidden;
      background-color: white;
  }

  .topnav a {
      float: left;
      display: block;
      color: black;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 13px;
      font-weight: bold;
  }

  .topnav a:hover {
      background-color: #69a747;
      color: black;
  }

  .topnav a.active {
      background-color: white;
      /*background-color: green;*/
      color: black;
      /*color: white;*/

  }

  .topnav .icon {
      display: none;
  }

  @media screen and (max-width: 600px) {
      .topnav a:not(:first-child) {display: none;}
      .topnav a.icon {
      float: right;
      display: block;
      }
  }

  @media screen and (max-width: 600px) {
    .topnav.responsive {position: relative;}
    .topnav.responsive .icon {
      position: absolute;
      right: 0;
      top: 0;
    }
    .topnav.responsive a {
      float: none;
      display: block;
      text-align: left;
    }
}
</style>

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
            <img src="assets/uploads/avatar/<?php if (isset($_SESSION['MaVaiTro'])) {
              echo $_SESSION['avatar'];
            } else {} ?>" width="150px" height="170px" class="img-circle" alt="User Image">
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
            } elseif(isset($_SESSION['MaVaiTro']) && $_SESSION['MaVaiTro'] == 5) {
              echo $_SESSION['Ten_KHTV'];
              echo "<br><small>KHÁCH HÀNG</small></p>";
            } else {}
             ?>
        </li>
        <li class="user-footer">
            <div class="pull-left" style="float:left">
                <a href="?updatett" class="btn btn-default btn-flat">Chi tiết</a>
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
        <a href="../" class="active">TRANG CHỦ</a>
        <a href="gioithieu/">GIỚI THIỆU</a>
        <a href="#">TIN TỨC</a>
        <a href="#3">LƯƠNG THỰC</a>
        <a href="#4">RAU CỦ SẠCH</a>
        <a href="#5">HOA QUẢ</a>
        <a href="#6">ĐẶC SẢN</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
          <i class="fa fa-bars"></i>
        </a>  
  </div>
<!-- </nav> -->



</div>
</div>
</div>
<!-- Slider -->

<div id="carouselExampleIndicators" style="margin-top: 150px;" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner"> 
      <div class="carousel-item active">
        <img style="height:450px; " class="d-block w-100" src="assets/public/images/banner_nongsan.png" alt="First slide">
      </div>
      <div class="carousel-item">
        <img style="height:450px; " class="d-block w-100" src="assets/public/images/banner_nongsan2" alt="Third slide">
      </div> 
      <!-- <div class="carousel-item">
        <img style="height:500px; " class="d-block w-100" src="https://growmax.weba.vn/shop/images/growmax/slider/banner1.jpg" alt="Second slide">
      </div> -->
     
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <div class="background-circle">
  
  </div>


  <!-- Slider -->
<!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted" >
<!-- style="margin-top:500px" -->
    <!-- Section: Links  -->
    <section class="" style="background-color:#69a747;color: #fff">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3" >
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4" style="padding-top:30px">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
                <img src="assets/public/images/logo.png" alt="">
            </h6>
            <p>
                Hệ sinh thái nông nghiệp ứng dụng công nghệ. Mang nông sản xanh, sạch với giá hợp lý đến mọi người
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4" style="padding-top:30px">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
                Chính sách đổi trả
            </h6>
            <h6 class="text-uppercase fw-bold mb-4">
                Tuyển dụng
            </h6>
            <h6 class="text-uppercase fw-bold mb-4">
                Thông báo
            </h6>
           
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4" style="padding-top:30px">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
                Điều khoản sử dụng
            </h6>

            <h6 class="text-uppercase fw-bold mb-4">
                Tin tức
            </h6>

            <h6 class="text-uppercase fw-bold mb-4">
                <div>
                    <a href="" class="me-4 text-reset" style="margin:0 8px">
                      <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="" class="me-4 text-reset" style="margin:0 8px">
            
                      <i class="fab fa-twitter"></i>
                    </a>
                    <a href="" class="me-4 text-reset" style="margin:0 8px">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="" class="me-4   text-reset" style="margin:0 8px">
                        <i class="fab fa-instagram"></i>
                    </a>
                  
                  </div>
            </h6>
           
          </div>
          <!-- Grid column -->
        </div>

        <div class="text-center p-4" >
            <h3>IUH - 2022</h3>
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->
  
  </footer>
  <!-- Footer -->

 <!-- Footer -->


</div>
<!-- ./wrapper -->
</body>
</html>
<!-- jQuery -->
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../assets/vendor/dist/js/adminlte.min.js"></script>
  <script src="../assets/public/ajax/ajax_loainongsan.js"></script>
  <script src="../assets/public/ajax/ajax_getmanongsan.js"></script>
  <script src="../assets/public/ajax/ajax_tinh_thanh.js"></script>
  
  <!-- AdminLTE for demo purposes -->
  <!-- <script src="assets/vendor/dist/js/demo.js"></script> -->
  <!--  -->
  <script>
    if ( window.history.replaceState ) {
      window.history.replaceState( null, null, window.location.href );
    }
  </script>
  <script>
    function myFunction() {
      var x = document.getElementById("myTopnav");
      if (x.className === "topnav") {
        x.className += " responsive";
      } else {
        x.className = "topnav";
      }
    }
  </script>