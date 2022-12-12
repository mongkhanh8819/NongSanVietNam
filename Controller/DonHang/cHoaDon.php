<?php 

	include_once("Model/DonHang/mHoaDon.php");

	class cHoaDon{
		// -----------------
		// -----------------
		// -----------------
		// ----ADD HÓA ĐƠN ĐẶT HÀNG NÔNG SẢN
		// -----------------
		// -----------------
		// -----------------
		public function add_hoadon($diachi,$tonghoadon,$mancc,$makh){
			$p = new mHoaDon();
			$insert = $p -> insert_hoadon($diachi,$tonghoadon,$mancc,$makh);
			//gọi hàm chèn khách hàng từ model
			if($insert){
				return 1; //chèn thành công
			}else{
				return 0; //chèn không thành công
			}
		}
		// -----------------
		// -----------------
		// -----------------
		// ----LẤY DANH SÁCH HÓA ĐƠN ĐẶT HÀNG NÔNG SẢN THEO MÃ NHÀ CUNG CẤP
		// -----------------
		// -----------------
		// -----------------
		public function get_hoadon_dn($mancc){
			$p = new mHoaDon();
			$list = $p -> select_hoadon_dn($mancc);
			//gọi hàm get danh sách hóa đơn
			return $list;
		}
		// -----------------
		// -----------------
		// -----------------
		// ----LẤY DANH SÁCH HÓA ĐƠN ĐẶT HÀNG NÔNG SẢN THEO MÃ DOANH NGHIỆP
		// -----------------
		// -----------------
		// -----------------
		public function get_hoadon_dn_by_makh($makh){
			$p = new mHoaDon();
			$list = $p -> select_hoadon_dn_by_makh($makh);
			//gọi hàm get danh sách hóa đơn
			return $list;
		}
		// -----------------
		// -----------------
		// -----------------
		// ----LẤY DANH SÁCH HÓA ĐƠN ĐẶT HÀNG NÔNG SẢN THEO MÃ NHÀ CUNG CẤP
		// -----------------
		// -----------------
		// -----------------
		public function get_hoadon_tv($mancc){
			$p = new mHoaDon();
			$list = $p -> select_hoadon_tv($mancc);
			//gọi hàm get danh sách hóa đơn
			return $list;
		}
		// -----------------
		// -----------------
		// -----------------
		// ----LẤY DANH SÁCH HÓA ĐƠN ĐẶT HÀNG NÔNG SẢN THEO MÃ khách hành thành viên
		// -----------------
		// -----------------
		// -----------------
		public function get_hoadon_tv_by_makh($makh){
			$p = new mHoaDon();
			$list = $p -> select_hoadon_tv_by_makh($makh);
			//gọi hàm get danh sách hóa đơn
			return $list;
		}
		// -----------------
		// -----------------
		// -----------------
		// ----QUẢN LÝ ĐƠN HÀNG
		//bao gồm 3 bước xử lý
		/// duyệt 
		/// xác nhận thành công
		/// hủy 
		// -----------------
		// -----------------
		// -----------------
		public function xuly_hoadon($mahoadon,$tt){
			$p = new mHoaDon();
			$ketqua = $p -> update_tt_hoadon($mahoadon,$tt);
			//gọi hàm update đơn hàng
			return $ketqua;
		}

	}

 ?>