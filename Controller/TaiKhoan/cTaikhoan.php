<?php 

	include_once('Model/TaiKhoan/mTaikhoan.php');
	class cTaiKhoan
	{
		//hàm lấy thông tin chi tiết tài khoản
		public function get_tt_dangnhap($username, $mavaitro)
    	{
        	$p = new mTaiKhoan();
        	$tt = $p -> select_tt_taikhoan($username,$mavaitro);
        	if ($mavaitro == 1) {
				while($row1 = mysqli_fetch_assoc($tt)){
        		$_SESSION['MaAdmin'] = $row1['MaAdmin'];
        		$_SESSION['TenAdmin'] = $row1['TenAdmin'];}
        	}elseif ($mavaitro == 2){
				while($row1 = mysqli_fetch_assoc($tt)){
        		$_SESSION['MaNVPP'] = $row1['MaNVPP'];
        		$_SESSION['TenNVPP'] = $row1['TenNVPP'];
        		$_SESSION['avatar'] = $row1['HinhAnh'];}
			}elseif ($mavaitro == 3){
				while($row1 = mysqli_fetch_assoc($tt)){
        		$_SESSION['MaNCC'] = $row1['MaNCC'];
        		$_SESSION['TenNhaCungCap'] = $row1['TenNhaCungCap'];
        		$_SESSION['TenNguoiDaiDien'] = $row1['TenNguoiDaiDien'];
        		$_SESSION['avatar'] = $row1['HinhAnh'];}
			}elseif ($mavaitro == 4){
				while($row1 = mysqli_fetch_assoc($tt)){
        		$_SESSION['MaDN'] = $row1['MaDN'];
        		$_SESSION['TenDoanhNghiep'] = $row1['TenDoanhNghiep'];
        		$_SESSION['avatar'] = $row1['HinhAnh'];}
			}elseif ($mavaitro == 5){
				while($row1 = mysqli_fetch_assoc($tt)){
        		$_SESSION['MaKHTV'] = $row1['MaKHTV'];
        		$_SESSION['Ten_KHTV'] = $row1['Ten_KHTV'];
        		$_SESSION['avatar'] = $row1['HinhAnh'];}
			}else{

			}
        	
    	}
		////
    	public function login($username, $password)
    	{
        	$password = md5($password);
        	$p = new mTaiKhoan();
        	$user = $p -> login($username, $password);
        	$row = mysqli_fetch_assoc($user);
        	if ($row >= 1) {
            	$_SESSION['username'] = $row['username'];
            	$_SESSION['password'] = $row['password'];
            	$_SESSION['MaVaiTro'] = $row['MaVaiTro'];
            	if($row['MaVaiTro'] != 1){
            	$_SESSION['LoginSuccess'] = true;}
            	else{
            	$_SESSION['login_admin'] = true;
            	}
            	$tt_dn = $this -> get_tt_dangnhap($username,$row['MaVaiTro']);
        	}else {
            	echo "<script>alert('Đăng nhập thất bại')</script>";
        	}
    	}
    	//
		public function them_taikhoan($username,$password,$mavaitro){
			$p = new mTaiKhoan();
			$insert = $p -> add_taikhoan($username,$password,$mavaitro);
			//gọi hàm chèn tài khoản từ model
			if($insert){
				return 1; //chèn thành công
			}else{
				return 0; //chèn không thành công
			}
		}
    	
	}

 ?>