<?php 

	include_once("Model/connect.php");

	class mQrcode{
		//---------------------------
		//---------------------------
		//---------------------------
		//---------------------------
		//-----INSERT NÔNG SẢN MỚI
		//---------------------------
		//---------------------------
		//---------------------------
		public function insert_qrcode($noidung,$images,$manongsan){
			$conn;
			$p = new ketnoi();
			if($p -> moketnoi($conn)){
				$string = "INSERT INTO qrcode(noidung, QR_Image, MaNongSan) VALUES ('".$noidung."','".$images."',".$manongsan.")";
				//echo $string;
				$kq = mysqli_query($conn,$string);
				$p -> dongketnoi($conn);
				return $kq;
			}else{
				return false;
			}
		}
		//---------------------------
		//---------------------------
		//---------------------------
		//---------------------------
		//-----SELECT QRCODE NÔNG SẢN ĐẠT CHUẨN KIỂM ĐỊNH
		//---------------------------
		//---------------------------
		//---------------------------
		public function select_qrcode_by_mancc($mancc){
			$conn;
			$p = new ketnoi();
			if($p -> moketnoi($conn)){
				$string = "SELECT * FROM qrcode JOIN nongsan ON qrcode.MaNongSan = nongsan.MaNongSan WHERE nongsan.TrangThaiKiemDinh = 0 AND nongsan.MaNCC = ".$mancc;
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