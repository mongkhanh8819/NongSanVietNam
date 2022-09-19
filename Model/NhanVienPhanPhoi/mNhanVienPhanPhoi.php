<?php 

	include("Model/connect.php");

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
	}


 ?>