<?php 

	include_once("Model/DonHang/mChiTietHoaDon.php");

	class cChiTietHoaDon{
		//------------------------------
		//------------------------------
		//------------------------------
		//--------HÀM SELECT MÃ HÓA ĐƠN VỪA TẠO
		//------------------------------
		public function select_max_hoadon(){
			$p = new mChiTietHoaDon();
			$mahoadon = $p -> select_max_hoadon();
			return $mahoadon;
		}
		// -----------------
		// -----------------
		// -----------------
		// ----ADD HÓA ĐƠN ĐẶT HÀNG NÔNG SẢN
		// -----------------
		// -----------------
		// -----------------
		public function add_cthoadon($manongsan,$dongia,$soluong,$donvitinh){

			//
			$mahd = $this -> select_max_hoadon();
			while ($row = mysqli_fetch_array($mahd)) {
				$mahoadon = $row['MaHoaDon'];
			}
			//
			$p = new mChiTietHoaDon();
			$insert = $p -> insert_cthoadon($mahoadon,$manongsan,$dongia,$soluong,$donvitinh);
			//gọi hàm chèn khách hàng từ model
			if($insert){
				return 1; //chèn thành công
			}else{
				return 0; //chèn không thành công
			}
		}
	}

 ?>