<?php 

	include_once("Model/KhachHangDoanhNghiep/mdoanhnghiep.php");

	class cKHDN{
		public function select_KHDN(){
			$p = new mKhachHangDoanhNghiep();
			$table = $p -> select_KHDN();
			return $table;
		}
		public function select_DN_byid($MaDN){
            $p= new mKhachHangDoanhNghiep();
            $table = $p->select_KHDN_id($MaDN);
            //var_dump($table);
            return $table;
        }
	}

 ?>