<?php 

  // include config 
  require_once 'config/config.php';
  include_once 'controller/CONTROLLER_AJAX/cdiachi.php';
  // include header
  include_once("view/layouts/header.php");
  // include slidebar
  include_once("view/layouts/slidebar.php");
  
  // include content
  // -------MAIN CONTENT HERE
  //--------------------
  //include_once("view/content.php");
  # XEM DOANH NGHIEP
  if (isset($_REQUEST["qlkhdn"])){
    include("View/KhachHangDoanhNghiep/quanlikhachhangDN.php");
  }#XEM THONG TIN QUAN LI NHAN VIÊN
  elseif (isset($_REQUEST["qlnv"])){
    include("View/NhanVienPhanPhoi/quanlinhanvien.php");
  }#THÊM DOANH NGHIỆP
  elseif (isset($_REQUEST["adddn"])){
    include("view/KhachHangDoanhNghiep/adddoanhnghiep.php");
  }#CẬP NHẬT THÔNG TIN DOANH NGHIỆP
  elseif (isset($_REQUEST["updatedn"])) {
    include ("view/KhachHangDoanhNghiep/updatedoanhnghiep.php");
  }#XEM KHÁCH HÀNG THÀNH VIÊN
  elseif (isset($_REQUEST["qlkhtv"])){
    include("view/KhachHangThanhVien/quanlithanhvien.php");
  }#THÊM KHÁCH HÀNG THÀNH VIÊN
  elseif (isset($_REQUEST["addtv"])){
    include("view/KhachHangThanhVien/addthanhvien.php");
  }#CẬP NHẬT THÔNG TIN THÀNH VIÊN
  elseif (isset($_REQUEST["updatetv"])) {
    include("view/KhachHangThanhVien/updatethanhvien.php");
  }#XEM NHÀ CUNG CẤP
  elseif (isset($_REQUEST["qlncc"])){
    include("view/NhaCungCap/quanlinhacungcap.php");
  }#THÊM NHÀ CUNG CẤP
  elseif (isset($_REQUEST["addncc"])) {
    include("view/NhaCungCap/addncc.php");
  }#CẬP NHẬT NHÀ CUNG CẤP
  elseif (isset($_REQUEST["updatencc"])) {
    include("view/NhaCungCap/updatencc.php");
  }#THÊM NHÂN VIÊN
  elseif (isset($_REQUEST["addnv"])) {
    include("view/NhanVienPhanPhoi/addnhanvien.php");
  }#CẬP NHẬT NHÂN VIÊN
  elseif (isset($_REQUEST["updatenvpp"])){
    include ("view/NhanVienPhanPhoi/updatenv.php");
  }#XEM TÀI KHOẢN
  elseif (isset($_REQUEST["qltk"])) {
    include("view/TaiKhoan/quanlitaikhoan.php");
  }#THÊM TÀI KHOẢN
  elseif (isset($_REQUEST["addtk"])) {
    include("view/TaiKhoan/addtaikhoan.php");
  }#CẬP NHẬT TÀI KHOẢN
  elseif (isset($_REQUEST["updatetk"])) {
    include("view/TaiKhoan/updatetaikhoan.php");
  }
  else {
    include_once("view/content.php");
  }

  //---------------------
  // -------
  // include footer
  include_once("view/layouts/footer.php");

 ?>