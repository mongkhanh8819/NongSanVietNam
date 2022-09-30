<?php 

	include_once("Model/connect.php");

	class mNhomNongSan{
		//---------------------------
		//---------------------------
		//---------------------------
		//---------------------------
		//-----LẤY TẤT CẢ NHÓM NÔNG SẢN 
		//---------------------------
		//---------------------------
		//---------------------------
		public function select_nhomnongsan(){
			$conn;
			$p = new ketnoi();
			if($p -> moketnoi($conn)){
				$string = "SELECT * FROM nhomnongsan";
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