<?php 

	include_once("Model/NhanVienPhanPhoi/mNhanVienPhanPhoi.php");

	class cNhanVienPhanPhoi{
		public function select_nvpp(){
			$p = new mNhanVienPhanPhoi();
			$table = $p -> select_nvpp();
			return $table;
		}
	}

 ?>