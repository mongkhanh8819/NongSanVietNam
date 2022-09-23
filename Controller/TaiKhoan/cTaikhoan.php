<?php 

	include_once('Model/TaiKhoan/mTaikhoan.php');
	class cTaiKhoan
	{
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
            	$_SESSION['LoginSuccess'] = true;
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