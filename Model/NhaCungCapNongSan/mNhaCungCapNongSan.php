<?php 

	include_once("Model/connect.php");

	class mNhaCungCapNongSan{
		//hàm get thông tin nhà cung cấp nông sản
		public function select_ncc(){
			$conn;
			$p = new ketnoi();
			if($p -> moketnoi($conn)){
				$string = "SELECT * FROM nhacungcapnongsan";
				$table = mysqli_query($conn,$string);
				$p -> dongketnoi($conn);
				//
				return $table;
			}else{
				return false;
			}
		}
		//hàm thêm nhà cung cấp nông sản
		public function add_ncc($tenncc,$tenndd,$diachincc,$sdtncc,$emailncc,$username,$maxa){
			$conn;
			$p = new ketnoi();
			if($p -> moketnoi($conn)){
				$sql = "INSERT INTO nhacungcapnongsan(TenNhaCungCap, TenNguoiDaiDien, DiaChi_NCC, SDT_NCC, EmailNCC, username, MaXa) VALUES ('".$tenncc."','".$tenndd."','".$diachincc."','".$sdtncc."','".$emailncc."','".$username."',".$maxa.")";
				$result = mysqli_query($conn,$sql);
				$p -> dongketnoi($conn);
				return $result;
			}else{
				return false;
			}
	}
	}


 ?>