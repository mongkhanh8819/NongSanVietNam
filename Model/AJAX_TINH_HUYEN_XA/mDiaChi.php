<?php 
	
	include_once("Model/connect.php");

	class mDiaChi{
		//select tinh ajax
		public function select_tinhthanh(){
			$conn;
			$p = new ketnoi();
			if($p -> moketnoi($conn)){
				$sql = "SELECT * FROM tinhthanh";
				$table = mysqli_query($conn,$sql);
				$p -> dongketnoi($conn);
				return $table;
			}else{
				return false;
			}
		}
		//select huyen ajax
		public function select_huyenquan($matinh){
			$conn;
			$p = new ketnoi();
			if($p -> moketnoi($conn)){
				$sql = "SELECT * FROM huyenquan WHERE MaTinh  = ".$matinh;
				$table = mysqli_query($conn,$sql);
				$p -> dongketnoi($conn);
				//
				return $table;
			}else{
				return false;
			}
		}
		//select xa ajax
		public function select_xaphuong($mahuyen){
			$conn;
			$p = new ketnoi();
			if($p -> moketnoi($conn)){
				$sql = "SELECT * FROM xaphuong WHERE MaHuyen = ".$mahuyen;
				$table = mysqli_query($conn,$sql);
				$p -> dongketnoi($conn);
				//
				return $table;
			}else{
				return false;
			}
		}
	}

 ?>