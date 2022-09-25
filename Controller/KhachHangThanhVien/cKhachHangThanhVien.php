<?php 

	include_once("Model/KhachHangThanhVien/mKhachHangThanhVien.php");

	class cKhachHangThanhVien{
		public function select_khtv(){
			$p = new mKhachHangThanhVien();
			$table = $p -> select_khtv();
			return $table;
		}
		//
		public function them_khtv($ten,$sdt,$diachi,$ngaysinh,$email,$gioitinh,$username,$maxa){
			$p = new mKhachHangThanhVien();
			$insert = $p -> add_khtv($ten,$sdt,$diachi,$ngaysinh,$email,$gioitinh,$username,$maxa);
			//gọi hàm chèn khách hàng từ model
			if($insert){
				return 1; //chèn thành công
			}else{
				return 0; //chèn không thành công
			}
		}
	}

 ?>