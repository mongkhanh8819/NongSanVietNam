<?php 

	include_once("Model/NhaCungCapNongSan/mNhaCungCapNongSan.php");

	class cNhaCungCapNongSan{
		//
		public function get_ncc(){
			$p = new mNhaCungCapNongSan();
			$table = $p -> select_ncc();
			return $table;
		}
		//
		public function them_ncc($tenncc,$tenndd,$diachincc,$sdtncc,$emailncc,$username,$maxa){
			$p = new mNhaCungCapNongSan();
			$insert = $p -> add_ncc($tenncc,$tenndd,$diachincc,$sdtncc,$emailncc,$username,$maxa);
			//gọi hàm chèn khách hàng từ model
			if($insert){
				return 1; //chèn thành công
			}else{
				return 0; //chèn không thành công
			}
		}
		//
		public function get_ncc_by_id($mancc){
			$p = new mNhaCungCapNongSan();
			$table = $p -> select_ncc_by_id($mancc);
			return $table;
		}
		//--------------------------
		//--------------------------
		//-------CẬP NHẬT THÔNG TIN NHÀ CUNG CẤP NÔNG SẢN
		//--------------------------
		//--------------------------
		public function edit_ncc_by_id($mancc,$tenncc,$tenndd,$diachincc,$diachindd,$sdtncc,$sdtndd,$emailncc,$emailndd,$maxa,$hinhanh,$file,$type,$size){
			if ($hinhanh != "") {
      			$duoi_file = strtolower(end(explode('.',$hinhanh)));
      			$name = $mancc."_nccnongsan_".rand(101,200)."_edited.".basename($duoi_file);
				if($type == "image/jpeg" || $type == "image/png"){
					if($size <= 2*1024*1024){
						if(move_uploaded_file($file,"assets/uploads/avatar/".$name)){
							$p = new mNhaCungCapNongSan();
							$edit = $p -> update_ncc_by_id($mancc,$tenncc,$tenndd,$diachincc,$diachindd,$sdtncc,$sdtndd,$emailncc,$emailndd,$maxa,$name);
							//var_dump($edit);
							if($edit){
								$_SESSION['avatar'] = $name;
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
				$p = new mNhaCungCapNongSan();
				$edit = $p -> update_ncc_by_id($mancc,$tenncc,$tenndd,$diachincc,$diachindd,$sdtncc,$sdtndd,$emailncc,$emailndd,$maxa,$hinhanh);
				//var_dump($edit);
				if($edit){
					return 1;
				}
				else{
					return 0; //không thể edit
				}
			}
		}
	}

 ?>