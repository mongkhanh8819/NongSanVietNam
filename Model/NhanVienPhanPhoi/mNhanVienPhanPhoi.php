<?php 

	include_once("Model/connect.php");

	class mNhanVienPhanPhoi{
		public function select_nvpp(){
			$conn;
			$p = new ketnoi();
			if($p -> moketnoi($conn)){
				$string = "SELECT * FROM nhanvienphanphoi";
				$table = mysqli_query($conn,$string);
				$p -> dongketnoi($conn);
				//
				return $table;
			}else{
				return false;
			}
		}
		//-------------------------
		//-------------------------
		//------------LẤY THÔNG TIN NHÂN VIÊN PHÂN PHỐI THEO MÃ XÃ (SỬ DỤNG CHO CHỨC NĂNG ĐỀ XUẤT)
		//-------------------------
		public function select_nvpp_by_diachi($maxa){
			$conn;
			$p = new ketnoi();
			if($p -> moketnoi($conn)){
				$string = "SELECT nhanvienphanphoi.MaNVPP,nhanvienphanphoi.TenNVPP,trungtamphanphoi.TenTrungTam,trungtamphanphoi.MaXa FROM nhanvienphanphoi JOIN trungtamphanphoi ON nhanvienphanphoi.MaTrungTamPP = trungtamphanphoi.MaTrungTamPP WHERE trungtamphanphoi.MaXa =".$maxa;
				$string .= " LIMIT 1";
				$table = mysqli_query($conn,$string);
				$p -> dongketnoi($conn);
				//
				return $table;
			}else{
				return false;
			}
		}
		//-------------------------
		//-------------------------
		//------------LẤY THÔNG TIN NHÂN VIÊN PHÂN PHỐI THEO ID
		//-------------------------
		public function select_nvpp_by_id($manvpp){
			$conn;
			$p = new ketnoi();
			if($p -> moketnoi($conn)){
				$string = "SELECT * FROM tinhthanh JOIN huyenquan ON tinhthanh.MaTinh = huyenquan.MaTinh JOIN xaphuong ON huyenquan.MaHuyen = xaphuong.MaHuyen JOIN nhanvienphanphoi ON xaphuong.MaXa = nhanvienphanphoi.MaXa JOIN trungtamphanphoi ON nhanvienphanphoi.MaTrungTamPP = trungtamphanphoi.MaTrungTamPP WHERE nhanvienphanphoi.MaNVPP ='".$manvpp."'";
				//$string .= " LIMIT 1";
				//echo $string;
				$table = mysqli_query($conn,$string);
				$p -> dongketnoi($conn);
				//
				return $table;
			}else{
				return false;
			}
		}
		//---------------------------
		//---------------------------
		//---------------------------
		//---------------------------
		//-----CẬP NHẬT THÔNG TIN CÁ NHÂN NHÂN VIÊN PHÂN PHỐI (ACTOR NVPP)
		//---------------------------
		//---------------------------
		//---------------------------
		public function update_nvpp_by_id($manvpp,$tennvpp,$sdt,$diachi,$ngaysinh,$email,$hinhanh,$gioitinh,$maxa){
			$conn;
			$p = new ketnoi();
			if($p -> moketnoi($conn)){
				if ($hinhanh != "") {
				$string = "UPDATE nhanvienphanphoi SET TenNVPP='".$tennvpp."', SDT='".$sdt."', DiaChiNha='".$diachi."', NgaySinh='".$ngaysinh."', HinhAnh='".$hinhanh."', Email='".$email."', GioiTinh=".$gioitinh.", MaXa=".$maxa." WHERE MaNVPP = '".$manvpp."'";	
				}else{
				$string = "UPDATE nhanvienphanphoi SET TenNVPP='".$tennvpp."', SDT='".$sdt."', DiaChiNha='".$diachi."', NgaySinh='".$ngaysinh."', Email='".$email."', GioiTinh=".$gioitinh.", MaXa=".$maxa." WHERE MaNVPP = '".$manvpp."'";
				}
				
				//echo $string;
				$kq = mysqli_query($conn,$string);
				$p -> dongketnoi($conn);
				return $kq;
			}else{
				return false;
			}
		}
	}


 ?>