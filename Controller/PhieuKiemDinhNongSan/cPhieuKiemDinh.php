<?php 

	include_once("../Model/PhieuKiemDinhNongSan/mPhieuKiemDinh.php");

	class cPhieuKiemDinhNongSan{
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
		
	}

 ?>