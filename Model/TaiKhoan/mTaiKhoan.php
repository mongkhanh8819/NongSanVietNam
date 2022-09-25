<?php 

include_once("Model/connect.php");

class mTaikhoan{
	//hàm đăng nhập
	public function login($username, $password){
		$conn;
		$p = new ketnoi();
		if($p -> moketnoi($conn)){
			$sql = "SELECT * FROM taikhoan WHERE username = '".$username."' and password = '".$password."'";
			$result = mysqli_query($conn,$sql);
			$p -> dongketnoi($conn);
			return $result;
		}else{
			return false;
		}
	}
	//hàm thêm tài khoản
	public function add_taikhoan($username,$password,$vaitro){
		$conn;
		$p = new ketnoi();
		if($p -> moketnoi($conn)){
			$password = md5($password);
			$sql = "INSERT INTO taikhoan(username, password, MaVaiTro) VALUES ";
			$sql .= "('".$username."','".$password."',".$vaitro.")";

			$result = mysqli_query($conn,$sql);
			$p -> dongketnoi($conn);
			return $result;
		}else{
			return false;
		}
	}
}

?>