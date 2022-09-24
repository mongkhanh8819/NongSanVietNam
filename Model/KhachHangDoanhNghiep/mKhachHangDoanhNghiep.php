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
		//hàm get mã doanh nghiệp thuộc bản ghi mới nhất
		public function select_max_madn(){
			$conn;
			$p = new ketnoi();
			if($p -> moketnoi($conn)){
				$string = "SELECT MaDN FROM khachhangdoanhnghiep ORDER BY MaDN DESC LIMIT 1";
				$madn = mysqli_query($conn,$string);
				$p -> dongketnoi($conn);
				//
				return $madn;
			}else{
				return false;
			}
		}
		//hàm thêm khách hàng doanh nghiệp
		public function add_khdn($madn,$tendn,$sdt,$diachi,$email,$ngaythanhlap,$gioithieu,$tenndd,$username,$maxa){
			$conn;
			$p = new ketnoi();
			if($p -> moketnoi($conn)){
				$sql = "INSERT INTO khachhangdoanhnghiep(MaDN, TenDoanhNghiep, SDT, DiaChi, Email, NgayThanhLap, GioiThieu, TenNguoiDaiDien, username, MaXa) VALUES ('".$madn."','".$tendn."','".$sdt."','".$diachi."','".$email."','".$ngaythanhlap."','".$gioithieu."','".$tenndd."','".$username."',".$maxa.")";
				$result = mysqli_query($conn,$sql);
				$p -> dongketnoi($conn);
				return $result;
			}else{
				return false;
			}
		}
	}


 ?>