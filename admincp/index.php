<?php 

  // include config 
  require_once 'config/config.php';
  // include header
  include_once("view/layouts/header.php");
  // include slidebar
  include_once("view/layouts/slidebar.php");
  
  // include content
  // -------MAIN CONTENT HERE
  //--------------------
  //include_once("view/content.php");
  if (isset($_REQUEST["qlkhdn"])){
    include("View/KhachHangDoanhNghiep/quanlikhachhangDN.php");
    
  }elseif (isset($_REQUEST["qlnv"])){
    include("View/NhanVien/quanlinhanvien.php");
  }elseif (isset($_REQUEST["adddn"])){
    include("view/KhachHangDoanhNghiep/adddoanhnghiep.php");
  }elseif (isset($_REQUEST["updatedn"])) {
    include ("view/KhachHangDoanhNghiep/updatedoanhnghiep.php");
  }
  else {
    include_once("view/content.php");
  }

  //---------------------
  // -------
  // include footer
  include_once("view/layouts/footer.php");

 ?>