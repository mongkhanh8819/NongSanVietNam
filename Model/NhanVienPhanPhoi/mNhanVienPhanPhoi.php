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
		//------------LẤY THÔNG TIN NHÂN VIÊN PHÂN PHỐI THEO MÃ XÃ
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
	}


 ?>