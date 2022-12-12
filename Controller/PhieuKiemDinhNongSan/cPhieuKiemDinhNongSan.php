<?php 

	include_once("Model/PhieuKiemDinhNongSan/mPhieuKiemDinhNongSan.php");

	class cPhieuKiemDinhNongSan{
		//----------------------------
		//----------------------------
		//-------------SELECT
		//-------------PHIẾU KIỂM ĐỊNH
		//-------------NHÀ CUNG CẤP
		//----------------------------
		public function get_phieukiemdinh($mancc){
			$p = new mPhieuKiemDinhNongSan();
			$list = $p -> select_phieukiemdinh($mancc);
			return $list;
		}
		//----------------------------
		//----------------------------
		//-------------SELECT
		//-------------PHIẾU KIỂM ĐỊNH
		//-------------NHÂN VIÊN PHÂN PHỐI
		//----------------------------
		public function get_phieukiemdinh_by_nvpp($manvpp){
			$p = new mPhieuKiemDinhNongSan();
			$list = $p -> select_phieukiemdinh_by_nvpp($manvpp);
			return $list;
		}
		//----------------------------
		//----------------------------
		//-------------SELECT
		//-------------PHIẾU KIỂM ĐỊNH
		//-------------THEO MÃ PHIẾU
		//----------------------------
		public function get_phieukiemdinh_by_maphieu($maphieu){
			$p = new mPhieuKiemDinhNongSan();
			$list = $p -> select_phieukiemdinh_by_maphieu($maphieu);
			return $list;
		}
		//--------------------------
		//--------------------------
		//-------THÊM THÔNG TIN NÔNG SẢN 
		//--------------------------
		//--------------------------
		public function add_phieukiemdinh($diachi, $danhgiancc, $manvpp, $mancc, $manongsan){
			$p = new mPhieuKiemDinhNongSan();
			$insert = $p -> insert_phieukiemdinh($diachi, $danhgiancc, $manvpp, $mancc, $manongsan);
			//var_dump($insert);
			if($insert){
				return 1;
			}
			else{
				return 0; //không thể insert
			}
			
		}
		//--------------------------
		//--------------------------
		//-------CẬP NHẬT THÔNG TIN NÔNG SẢN 
		//--------------------------
		//--------------------------
		public function edit_phieukiemdinh($maphieu, $thongso, $danhgianvpp, $ketluan, $manongsan){
			$p = new mPhieuKiemDinhNongSan();
			$insert = $p -> update_phieukiemdinh($maphieu, $thongso, $danhgianvpp, $ketluan, $manongsan);
			//var_dump($insert);
			if($insert){
				return 1;
			}
			else{
				return 0; //không thể update
			}
			
		}
		
		
	}

 ?>