<?php 

	include_once("Model/KhachHangDoanhNghiep/mKhachHangDoanhNghiep.php");

	class cKhachHangDoanhNghiep{
		//------------------------------
		//------------------------------
		//------------------------------
		//--------HÀM SELECT FULL DỮ LIỆU BẢNG DOANH NGHIỆP
		//------------------------------
		public function select_khdn(){
			$p = new mKhachHangDoanhNghiep();
			$table = $p -> select_khdn();
			return $table;
		}
		//------------------------------
		//------------------------------
		//------------------------------
		//--------HÀM SELECT DỮ LIỆU KHÓA CHÍNH BẢNG DOANH NGHIỆP VỚI BẢN GHI MỚI NHẤT
		//------------------------------
		public function select_max_dn(){
			$p = new mKhachHangDoanhNghiep();
			$madn = $p -> select_max_madn();
			return $madn;
		}
		//------------------------------
		//------------------------------
		//------------------------------
		//--------HÀM THÊM DỮ LIỆU DOANH NGHIỆP
		//------------------------------
		public function them_khdn($tendn,$sdt,$diachi,$email,$ngaythanhlap,$gioithieu,$tenndd,$username,$maxa){
			$p = new mKhachHangDoanhNghiep();
			//------------------------------
			//------------------------------
			//get mã doanh nghiệp
			//------------------------------
			//------------------------------
			//------------------------------
			//------------------------------
			$dn = $this -> select_max_dn();
			while ($row = mysqli_fetch_array($dn)) {
				$madn = $row['MaDN'];
			}
			//------------------------------
     		//-------XỬ LÝ LẤY MÃ DN MỚI
     		//------------------------------
     		
			$cut = substr($madn, 4);
    	 	$new = $cut + 1;
     		$new_madn = "DN00".$new;
     		//------------------------------
     		//-------XỬ LÝ CHÈN DỮ LIỆU
     		//------------------------------
     		//------------------------------
     		//------------------------------
			$insert = $p -> add_khdn($new_madn,$tendn,$sdt,$diachi,$email,$ngaythanhlap,$gioithieu,$tenndd,$username,$maxa);
			//var_dump($insert);
			//gọi hàm chèn khách hàng từ model
			if($insert){
				return 1; //chèn thành công
			}else{
				return 0; //chèn không thành công
			}
		}
	}

 ?>