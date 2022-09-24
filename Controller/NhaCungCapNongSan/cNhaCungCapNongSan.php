<?php 

	include_once("Model/NhaCungCapNongSan/mNhaCungCapNongSan.php");

	class cNhaCungCapNongSan{
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
	}

 ?>