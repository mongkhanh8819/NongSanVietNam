<?php 
	//-----xử lý
	//----------
	//----------
	//----------
	//session
	session_start();
	//
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	//
	//DIFINE CONNECT
	require_once("config/config.php");
	//
	include_once("Controller/TaiKhoan/cTaikhoan.php");
	$account = new cTaikhoan();
	if (isset($_POST['username'])) {
    	$us = $_POST['username'];
	}
	if (isset($_POST['password'])) {
    	$pw = $_POST['password'];
	}
	if (isset($_POST['submit']) && ($_REQUEST['submit'] == 'login')) {
    	$account->login($us, $pw);
	}
	if (isset($_REQUEST['dangxuat'])) {
   		include_once("View/DangNhap/vDangxuat.php");
	}
	//-------giao diện
	//----------
	//----------
	//----------
	//include header
	include("View/layouts/header.php");
	//include slider
	include("View/layouts/slider.php");
	//main contain - dang nhap
	if (isset($_REQUEST['dangnhap'])){
		include("View/DangNhap/vDangnhap.php");
	}elseif(isset($_REQUEST['dangky'])) {
		include("View/DangKy/vDangky.php");
	}
	//
	if(isset($_SESSION['LoginSuccess']) && ($_SESSION['MaVaiTro']) == 2)
	{
		include_once("View/NhanVienPhanPhoi/vGetDSNVPP.php");
	}
	else{

	}
	
	//include footer
	include("View/layouts/footer.php");

 ?>