<?php 

	include_once("Model/connect.php");

	class mKhachHangDoanhNghiep{
		//hàm get thông tin khách hàng doanh nghiệp
		public function select_khdn(){
			$conn;
			$p = new ketnoi();
			if($p -> moketnoi($conn)){
				$string = "SELECT * FROM khachhangdoanhnghiep";
				$table = mysqli_query($conn,$string);
				$p -> dongketnoi($conn);
				//
				return $table;
			}else{
				return false;
			}
		}
		//hàm thêm khách hàng doanh nghiệp
		public function add_khdn($madn,$ten,$sdt,$diachi,$ngaysinh,$email,$gioitinh,$username,$maxa){
		$conn;
		$p = new ketnoi();
		if($p -> moketnoi($conn)){
			$sql = "INSERT INTO khachhangdoanhnghiep(MaDN, TenDoanhNghiep, SDT, DiaChi, Email, NgayThanhLap, GioiThieu, TenNguoiDaiDien, username, MaXa) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12],[value-13],[value-14])";
			$result = mysqli_query($conn,$sql);
			$p -> dongketnoi($conn);
			return $result;
		}else{
			return false;
		}
	}
	}


 ?>