<?php 

	include_once("Model/NongSan/mNhomNongSan.php");

	class cNhomNongSan{
		//--------------------------
		//--------------------------
		//-------LẤY DANH SÁCH NHÓM NÔNG SẢN
		//--------------------------
		//--------------------------
		public function get_nhomnongsan(){
			$p = new mNhomNongSan();
			$table = $p -> select_nhomnongsan();
			return $table;
		}
	}

 ?>