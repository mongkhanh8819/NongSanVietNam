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

<div class="block-nav">
    <div class="container">
<!-- Menu -->
<nav class="navbar navbar-expand-lg ">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav navbar-list" >
          <li class="nav-item nav-logo"style="margin-top:16px">
           <a href="index.php"> <!-- <img src="https://theme.hstatic.net/200000401005/1000921080/14/logo.svg?v=20" alt=""> --><img src="assets/public/images/logo.png" alt=""></a>
          </li>
        <div class="searchSpace">
            <input type="text" class="input-search">
            <i class="fa fa-search search-icon"></i>
        </div>
        <span>
            <i class="fa fa-shopping-cart" aria-hidden="true"style="margin-top:35px;margin-left:5px"></i>
        </span>
        <div class="img-flag">
            <img  class="flag-vietnam" src="https://icons.iconarchive.com/icons/wikipedia/flags/512/VN-Vietnam-Flag-icon.png" alt="">
        </div>
        <div class="login" style="float:left;display:flex">
          <?php if (isset($_SESSION['LoginSuccess']) == true){
      echo "<a class='nav-link nav-item' href='?dangxuat' style='margin-top:25px'>Đăng Xuất</a>";}else{ ?>
          <a class="nav-link nav-item" href="?dangnhap" style="margin-top:25px">Đăng Nhập</a>
        <?php } ?>
          <a class="nav-link nav-item" href="register.php" style="margin-top:25px">Đăng Ký</a>
          <!--  -->
          <?php if (isset($_SESSION['MaVaiTro'])){
      echo "<a class='nav-link nav-item' href='' style='margin-top:25px'>".$_SESSION['username']."</a>";}elseif(isset($_SESSION['MaVaiTro']) && $_SESSION['MaVaiTro'] == 2){ ?>
          <a class="nav-link nav-item" href="" style="margin-top:25px"><?php echo $_SESSION['username']; ?></a>
        <?php }else{} ?>
      
        </div>

  </div>
</nav>



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