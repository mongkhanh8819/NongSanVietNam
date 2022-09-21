<?php 

include_once("Model/connect.php");

class mTaikhoan
{
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
}

?>