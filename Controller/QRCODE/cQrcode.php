<?php 

	include_once("Model/QRCODE/mQrcode.php");

	class cQrcode{
		//--------------------------
		//--------------------------
		//-------insert qrcode
		//--------------------------
		//--------------------------
		public function create_qrcode($noidung,$images,$manongsan){
			$p = new mQrcode();
			$table = $p -> insert_qrcode($noidung,$images,$manongsan);
			return $table;
		}
		//--------------------------
		//--------------------------
		//-------select qrcode
		//--------------------------
		//--------------------------
		public function view_qrcode_by_mancc($mancc){
			$p = new mQrcode();
			$table = $p ->  select_qrcode_by_mancc($mancc);
			return $table;
		}
		
	}

 ?>