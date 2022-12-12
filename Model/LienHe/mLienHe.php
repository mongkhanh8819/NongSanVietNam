<?php 

	include_once("Model/connect.php");

	class mLienHe{
		//---------------------------
		//---------------------------
		//---------------------------
		//---------------------------
		//-----LẤY DỮ LIỆU PHẢN HỒI CỦA NGƯỜI DÙNG 
		//---------------------------
		//---------------------------
		//---------------------------
		public function select_lienhe(){
			$conn;
			$p = new ketnoi();
			if($p -> moketnoi($conn)){
				$string = "SELECT * FROM thongtinlienhe";
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
		//-----THÊM DỮ LIỆU PHẢN HỒI KHÁCH HÀNG
		//---------------------------
		//---------------------------
		//---------------------------
		public function insert_lienhe($tieude,$noidung,$hoten,$tendn,$sodienthoai,$email){
			$conn;
			$p = new ketnoi();
			if($p -> moketnoi($conn)){
				$string = "INSERT INTO thongtinlienhe(tieude, noidung, Nguoigui, TenDN, SoDienThoai, Email) VALUES ('".$tieude."','".$noidung."','".$hoten."','".$tendn."','".$sodienthoai."','".$email."')";
				$table = mysqli_query($conn,$string);
				$p -> dongketnoi($conn);
				//
				return $table;
			}else{
				return false;
			}
		}	
		// 
		// 
		// 
	}


 ?>