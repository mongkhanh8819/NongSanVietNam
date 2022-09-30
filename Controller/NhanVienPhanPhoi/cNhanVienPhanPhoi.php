<?php 

	include_once("Model/NhanVienPhanPhoi/mNhanVienPhanPhoi.php");

	class cNhanVienPhanPhoi{
		public function select_nvpp(){
			$p = new mNhanVienPhanPhoi();
			$table = $p -> select_nvpp();
			return $table;
		}
		//------------------
		//----------------------
		//-------------------------
		//---------------------------
		//---GET THÔNG TIN NHÂN VIÊN THUỘC MỘT XÃ
		//----------------------------
		//----------------------------
		public function get_nvpp_by_diachi($maxa){
			$p = new mNhanVienPhanPhoi();
			$table = $p -> select_nvpp_by_diachi($maxa);
			return $table;
		}
	}

 ?>