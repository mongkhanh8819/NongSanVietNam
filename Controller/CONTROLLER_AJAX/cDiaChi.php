<?php 

	include_once("Model/AJAX_TINH_HUYEN_XA/mDiaChi.php");

	//
	class cDiaChi{
		public function select_tinhthanh(){
			$p = new mDiaChi();
			$table = $p -> select_tinhthanh();
			return $table;
		}
		public function select_huyenquan($matinh){
			$p = new mDiaChi();
			$table = $p -> select_huyenquan($matinh);
			return $table;
		}
		public function select_xaphuong($mahuyen){
			$p = new mDiaChi();
			$table = $p -> select_xaphuong($matinh);
			return $table;
		}
	}

 ?>