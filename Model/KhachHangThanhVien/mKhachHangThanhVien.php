<?php 

	include_once("Model/connect.php");

	class mKhachHangThanhVien{
		//hàm get thông tin khách hàng thành viên
		public function select_khtv(){
			$conn;
			$p = new ketnoi();
			if($p -> moketnoi($conn)){
				$string = "SELECT * FROM khachhangthanhvien";
				$table = mysqli_query($conn,$string);
				$p -> dongketnoi($conn);
				//
				return $table;
			}else{
				return false;
			}
		}
		//hàm thêm khách hàng thành viên
		public function add_khtv($ten,$sdt,$diachi,$ngaysinh,$email,$gioitinh,$username,$maxa){
		$conn;
		$p = new ketnoi();
		if($p -> moketnoi($conn)){
			$sql = "INSERT INTO khachhangthanhvien(Ten_KHTV,SDT,DiaChi,NgaySinh,Email,GioiTinh,username,MaXa) VALUES ('".$ten."','".$sdt."','".$diachi."','".$ngaysinh."','".$email."',".$gioitinh.",'".$username."',".$maxa.")";
			$result = mysqli_query($conn,$sql);
			$p -> dongketnoi($conn);
			return $result;
		}else{
			return false;
		}
	}
	}


 ?>