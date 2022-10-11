<?php 

include_once("Model/connect.php");

class mTaikhoan{
//hàm đăng nhập
	// private $conn;
 //   function __construct()
 //   {
 //       $dbcon = new ketnoi();
 //       $conn = $dbcon->moketnoi($conn);
 //   }
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
	// public function login($username,$password)
 //    {
 //    	var_dump($this->conn);
 //        $sql = mysqli_query($this->conn, "SELECT * FROM taikhoan WHERE username = '".$username."' and password = '".$password."'") or die(mysqli_error($this->conn));
 //        //echo $sele;
 //        return $sql;
 //    }
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
	//hàm lấy thông tin người dùng đã đăng nhập vào tài khoản
	public function select_tt_taikhoan($username,$vaitro){
		$conn;
		$p = new ketnoi();
		if($p -> moketnoi($conn)){
			if ($vaitro == 1) {
				$sql = "SELECT * FROM taikhoan JOIN admin ON taikhoan.username = admin.username WHERE taikhoan.username = '".$username."'";
			}elseif ($vaitro == 2){
				$sql = "SELECT * FROM taikhoan JOIN nhanvienphanphoi ON taikhoan.username = nhanvienphanphoi.username WHERE taikhoan.username = '".$username."'";
			}elseif ($vaitro == 3){
				$sql = "SELECT * FROM taikhoan JOIN nhacungcapnongsan ON taikhoan.username = nhacungcapnongsan.username WHERE taikhoan.username = '".$username."'";
			}elseif ($vaitro == 4){
				$sql = "SELECT * FROM taikhoan JOIN khachhangdoanhnghiep ON taikhoan.username = khachhangdoanhnghiep.username WHERE taikhoan.username = '".$username."'";
			}elseif ($vaitro == 5){
				$sql = "SELECT * FROM taikhoan JOIN khachhangthanhvien ON taikhoan.username = khachhangthanhvien.username WHERE taikhoan.username = '".$username."'";
			}

			$result = mysqli_query($conn,$sql);
			$p -> dongketnoi($conn);
			return $result;
		}else{
			return false;
		}
	}
}

?>