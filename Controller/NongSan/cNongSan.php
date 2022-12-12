<?php 

	include_once("Model/NongSan/mNongSan.php");

	class cNongSan{
		//--------------------------
		//--------------------------
		//-------LẤY DANH SÁCH NÔNG SẢN
		//--------------------------
		//--------------------------
		public function get_nongsan(){
			$p = new mNongSan();
			$table = $p -> select_nongsan();
			return $table;
		}
		//
		///phân trang
		///
		///
		///
		function count_nongsan(){
			$p = new mNongSan();
			$tableProduct = $p -> select_nongsan();
			return mysqli_num_rows($tableProduct);
		}
		function get_nongsan_phantrang($page,$count){
			$p = new mNongSan();
			//$total_page = ceil($count/$limit);
			$tableProduct = $p -> select_nongsan_phantrang(($page-1)*$count,$count);
			//var_dump($tableProduct);
			return $tableProduct;
		}
		function get_total_page($count,$limit){
			return  ceil($count/$limit);
		}
		//////////
		////
		//
		//--------------------------
		//--------------------------
		//-------LẤY THÔNG TIN NÔNG SẢN THEO MÃ NHÀ CUNG CẤP
		//--------------------------
		//--------------------------
		public function get_nongsan_by_ncc($mancc){
			$p = new mNongSan();
			$table = $p -> select_nongsan_by_ncc($mancc);
			return $table;
		}
		//--------------------------
		//--------------------------
		//-------LẤY THÔNG TIN NÔNG SẢN THEO MÃ NHÀ CUNG CẤP
		//--------------------------
		//--------------------------
		public function get_nongsan_by_ncc_dc($mancc){
			$p = new mNongSan();
			$table = $p -> select_nongsan_by_ncc_dc($mancc);
			return $table;
		}
		//--------------------------
		//--------------------------
		//-------LẤY THÔNG TIN NÔNG SẢN THEO MÃ NÔNG SẢN
		//--------------------------
		//--------------------------
		public function get_nongsan_by_id($manongsan){
			$p = new mNongSan();
			$table = $p -> select_nongsan_by_id($manongsan);
			return $table;
		}
		//--------------------------
		//--------------------------
		//-------LẤY THÔNG TIN NÔNG SẢN THEO MÃ NÔNG SẢN ĐẠT CHUẨN
		//--------------------------
		//--------------------------
		public function get_nongsan_by_id_dc($manongsan){
			$p = new mNongSan();
			$table = $p -> select_nongsan_by_id_dc($manongsan);
			return $table;
		}
		//--------------------------
		//--------------------------
		//-------LẤY THÔNG TIN NÔNG SẢN ĐẶT MUA
		//--------------------------
		//--------------------------
		public function select_dathang_nongsan($manongsan){
			$p = new mNongSan();
			$table = $p -> select_dathang_nongsan($manongsan);
			return $table;
		}
		//--------------------------
		//--------------------------
		//-------THÊM THÔNG TIN NÔNG SẢN 
		//--------------------------
		//--------------------------
		public function add_nongsan($tenns,$soluong,$gia,$dvt,$mota,$hinhanh,$maloains,$file,$loaianh,$size){
			$mancc = $_SESSION['MaNCC'];
      		$duoi_file = strtolower(end(explode('.',$hinhanh)));
      		$name = rand()."_".$mancc.".".basename($duoi_file);
			if($loaianh == "image/jpeg" || $loaianh == "image/png"){
				if($size <= 2*1024*1024){
					if(move_uploaded_file($file,"assets/uploads/images/".$name)){
						$p = new mNongSan();
						$insert = $p -> insert_nongsan($tenns,$soluong,$gia,$dvt,$mota,$name,$maloains,$mancc);
						//var_dump($insert);
						if($insert){
							return 1;
						}
						else{
							return 0; //không thể insert
						}
					}else{
						return -1; //không thể upload
					}
				}else{
					return -2; //Size kích thước lơn
				}
			}else{
				return -3; //Không đúng loại file
			}
		}
		//--------------------------
		//--------------------------
		//-------CẬP NHẬT THÔNG TIN NÔNG SẢN 
		//--------------------------
		//--------------------------
		public function edit_nongsan($manongsan,$tenns,$soluong,$gia,$dvt,$mota,$hinhanh,$file,$type,$size){
			if ($hinhanh != "") {
				$mancc = $_SESSION['MaNCC'];
      			$duoi_file = strtolower(end(explode('.',$hinhanh)));
      			$name = rand()."_".$mancc."_edited.".basename($duoi_file);
				if($type == "image/jpeg" || $type == "image/png"){
					if($size <= 2*1024*1024){
						if(move_uploaded_file($file,"assets/uploads/images/".$name)){
							$p = new mNongSan();
							$edit = $p -> update_nongsan($manongsan,$tenns,$soluong,$gia,$dvt,$mota,$name);
							//var_dump($edit);
							if($edit){
								return 1;
							}
							else{
								return 0; //không thể edit
							}
						}else{
							return -1; //không thể upload
						}
					}else{
						return -2; //Size kích thước lơn
					}
				}else{
					return -3; //Không đúng loại file
				}	
			}else{
				$p = new mNongSan();
				$edit = $p -> update_nongsan($manongsan,$tenns,$soluong,$gia,$dvt,$mota,$hinhanh);
				//var_dump($edit);
				if($edit){
					return 1;
				}
				else{
					return 0; //không thể edit
				}
			}
		}
		//--------------------------
		//--------------------------
		//-------ĐĂNG BÁN NÔNG SẢN
		//--------------------------
		//--------------------------
		public function dangtin_nongsan($manongsan,$tt){
			$p = new mNongSan();
			$table = $p -> dangban_nongsan($manongsan,$tt);
			return $table;
		}
		//-----------------------
		//-----------------------
		// 
		// 
		// TEST PHÂN TRANG
		// Hàm đếm tổng số thành viên
		public function count_all_ns(){
			$p = new mNongSan();
			$total = $p -> count_all_ns();
			return $total;
		}
		 
		// Lấy danh sách thành viên
		public function get_all_ns($limit, $start){
			$p = new mNongSan();
			$result = $p -> get_all_ns($limit, $start);
			return $result;
		}
		// 
		// 
		// 
	}

 ?>