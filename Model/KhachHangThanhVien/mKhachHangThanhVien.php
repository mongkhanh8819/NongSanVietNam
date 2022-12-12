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
		//--------------------------------------------
		//--------------------------------------------
		//--------------------------------------------
		//--------------------------------------------
		//hàm get thông tin khách hàng thành viên theo mã
		//--------------------------------------------
		//--------------------------------------------
		//--------------------------------------------
		//--------------------------------------------
		//--------------------------------------------s
		public function select_khtv_by_id($makhtv){
			$conn;
			$p = new ketnoi();
			if($p -> moketnoi($conn)){
				//if (strlen($_SESSION['diachi'])<7) {
				if(isset($_SESSION['xa'])){
           			$string = "SELECT * FROM khachhangthanhvien WHERE MaKHTV ='".$makhtv."'";
          		}
          		else {
          		$string = "SELECT * FROM tinhthanh JOIN huyenquan ON tinhthanh.MaTinh = huyenquan.MaTinh JOIN xaphuong ON huyenquan.MaHuyen = xaphuong.MaHuyen JOIN khachhangthanhvien ON xaphuong.MaXa = khachhangthanhvien.MaXa WHERE MaKHTV ='".$makhtv."'";
				}
				//echo $string;
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
		//hàm cập nhật thông tin
		//---------------------------
		//---------------------------
		//---------------------------
		//---------------------------
		//-----CẬP NHẬT THÔNG TIN CÁ NHÂN KHÁCH HÀNG THÀNH VIÊN 
		//---------------------------
		//---------------------------
		//---------------------------
		public function update_khtv_by_id($makh,$ten,$sdt,$diachi,$ngaysinh,$hinhanh,$email,$gioitinh,$maxa){
			$conn;
			$p = new ketnoi();
			if($p -> moketnoi($conn)){
				if ($hinhanh != "") {
				$string = "UPDATE khachhangthanhvien SET Ten_KHTV = '".$ten."', SDT = '".$sdt."', DiaChi = '".$diachi."', NgaySinh = '".$ngaysinh."', HinhAnh = '".$hinhanh."', Email = '".$email."', GioiTinh = ".$gioitinh.", MaXa = ".$maxa." WHERE MaKHTV = ".$makh;
				}else{
				$string = "UPDATE khachhangthanhvien SET Ten_KHTV = '".$ten."', SDT = '".$sdt."', DiaChi = '".$diachi."', NgaySinh = '".$ngaysinh."', Email = '".$email."', GioiTinh = ".$gioitinh.", MaXa = ".$maxa." WHERE MaKHTV = ".$makh;
				}
				
				echo $string;
				$kq = @mysqli_query($conn,$string);
				$p -> dongketnoi($conn);
				return $kq;
			}else{
				return false;
			}
		}
	}
 ?>