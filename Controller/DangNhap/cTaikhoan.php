<?php 

	include_once('Model/DangNhap/mTaikhoan.php');
	class cTaiKhoan
	{
    	function login($username, $password)
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
    	
	}

 ?>