<?php 

	include_once("Model/connect.php");

	class mChiTietHoaDon{
		//hàm thêm hóa đơn
		public function insert_cthoadon($mahoadon,$manongsan,$dongia,$soluong,$donvitinh){
			$conn;
			$p = new ketnoi();
			if($p -> moketnoi($conn)){
				$sql = "INSERT INTO chitiethoadon(MaHoaDon, MaNongSan, DonGia, SoLuong, DonViTinh) VALUES (".$mahoadon.",".$manongsan.",'".$dongia."',".$soluong.",'".$donvitinh."')";
				$result = mysqli_query($conn,$sql);
				$p -> dongketnoi($conn);
				return $result;
			}else{
				return false;
			}
		}
		//hàm lấy mã hóa đơn đã tạo
		//hàm get mã hóa đơn vừa tạo thuộc bản ghi mới nhất
		public function select_max_hoadon(){
			$conn;
			$p = new ketnoi();
			if($p -> moketnoi($conn)){
				$string = "SELECT MaHoaDon FROM hoadon ORDER BY MaHoaDon DESC LIMIT 1";
				$madn = mysqli_query($conn,$string);
				$p -> dongketnoi($conn);
				//
				return $madn;
			}else{
				return false;
			}
		}
	}
 ?>