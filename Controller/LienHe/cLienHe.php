<?php 

	include_once("Model/LienHe/mLienHe.php");

	class cLienHe{
		//------------------------------
		//------------------------------
		//------------------------------
		//--------HÀM SELECT MÃ HÓA ĐƠN VỪA TẠO
		//------------------------------
		public function get_lienhe(){
			$p = new mLienHe();
			$lienhe = $p -> select_lienhe();
			return $lienhe;
		}
		// -----------------
		// -----------------
		// -----------------
		// ----thêm phản hồi liên hệ
		// -----------------
		// -----------------
		// -----------------
		public function add_lienhe($tieude,$noidung,$hoten,$tendn,$sodienthoai,$email){

			//
			$p = new mLienHe();
			$insert = $p -> insert_lienhe($tieude,$noidung,$hoten,$tendn,$sodienthoai,$email);
			//gọi hàm chèn khách hàng từ model
			if($insert){
				return 1; //chèn thành công
			}else{
				return 0; //chèn không thành công
			}
		}
	}

 ?>