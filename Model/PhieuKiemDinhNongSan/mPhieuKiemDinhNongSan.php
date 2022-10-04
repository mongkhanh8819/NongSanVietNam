<?php 

	include_once("Model/connect.php");

	class mPhieuKiemDinhNongSan{
		//---------------------------
		//---------------------------
		//---------------------------
		//---------------------------
		//-----LẤY TẤT CẢ NÔNG SẢN 
		//---------------------------
		//---------------------------
		//---------------------------
		public function select_phieukiemdinh($mancc){
			$conn;
			$p = new ketnoi();
			if($p -> moketnoi($conn)){
				$string = "SELECT * FROM nhanvienphanphoi JOIN phieukiemdinhnongsan ON nhanvienphanphoi.MaNVPP = phieukiemdinhnongsan.MaNVPP JOIN nongsan ON phieukiemdinhnongsan.MaNongSan = nongsan.MaNongSan WHERE phieukiemdinhnongsan.MaNCC = ".$mancc;
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
		//-----INSERT PHIẾU KIỂM ĐỊNH NÔNG SẢN 
		//---------------------------
		//---------------------------
		//---------------------------
		public function insert_phieukiemdinh($diachi, $danhgiancc, $manvpp, $mancc, $manongsan){
			$conn;
			$p = new ketnoi();
			if($p -> moketnoi($conn)){
				$string = "INSERT INTO phieukiemdinhnongsan(DiaChi, DanhGiaTuNCC, MaNVPP, MaNCC, MaNongSan) VALUES ('".$diachi."','".$danhgiancc."','".$manvpp."',".$mancc.",".$manongsan.")";
				echo $string;
				$kq = mysqli_query($conn,$string);
				$p -> dongketnoi($conn);
				return $kq;
			}else{
				return false;
			}
		}
		
	}


 ?>