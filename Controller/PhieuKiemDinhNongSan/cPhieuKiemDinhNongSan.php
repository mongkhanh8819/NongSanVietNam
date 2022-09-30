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
		
		
	}

 ?>