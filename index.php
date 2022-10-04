<?php 
	//-----xử lý
	//----------
	//----------
	//----------
	//session
	session_start();
	session_regenerate_id(true);
	//
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	//
	//DIFINE CONNECT
	require_once("config/config.php");
	//
		
  	include_once("Controller/NongSan/cNhomNongSan.php");
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
	//echo $_SESSION['login_id'];
	if(isset($_SESSION['login_id'])) {
		include_once("View/KhachHangThanhVien/vGiaoDienTV.php");
	}
	elseif (isset($_SESSION['LoginSuccess']) && $_SESSION['LoginSuccess'] == true) {
		switch ($_SESSION['MaVaiTro']) {
			case '1':
				echo "ĐIỀU HƯỚNG RA TRANG ADMINCP";
				break;
			case '2':
				include_once("View/NhanVienPhanPhoi/vGiaoDienNVPP.php");
				break;
			case '3':
				include_once("Controller/NongSan/cNongSan.php");
				include_once("View/NhaCungCapNongSan/vGiaoDienNCC.php");
				break;
			case '4':
				include_once("View/KhachHangDoanhNghiep/vGiaoDienDN.php");
				break;
			case '5':
				include_once("View/KhachHangThanhVien/vGiaoDienTV.php");
				break;
			default:
				break;
		}
	} else{
		include_once("View/NongSan/vThongTinNongSan.php");
	}
	

	//
	// if(isset($_SESSION['LoginSuccess']) && ($_SESSION['MaVaiTro']) == 2)
	// {
	// 	include_once("View/NhanVienPhanPhoi/vGiaoDienNVPP.php");
	// }
	// elseif(isset($_SESSION['LoginSuccess']) && ($_SESSION['MaVaiTro']) == 3){
	// 	include_once("View/NhaCungCapNongSan/vGiaoDienNCC.php");	
	// }
	// elseif(isset($_SESSION['LoginSuccess']) && ($_SESSION['MaVaiTro']) == 4){
	// 	include_once("View/KhachHangDoanhNghiep/vGiaoDienDN.php");	
	// }
	// elseif(isset($_SESSION['LoginSuccess']) && ($_SESSION['MaVaiTro']) == 5){
	// 	include_once("View/KhachHangThanhVien/vGiaoDienTV.php");	
	// }
	// elseif(isset($_SESSION['LoginSuccess']) && ($_SESSION['MaVaiTro']) == 1){
	// 	echo "ĐIỀU HƯỚNG RA TRANG ADMINCP";	
	// }
	//
	//include footer
	include("View/layouts/footer.php");

 ?>