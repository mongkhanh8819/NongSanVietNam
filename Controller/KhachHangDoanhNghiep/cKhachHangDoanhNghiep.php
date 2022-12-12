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
		//--------HÀM SELECT khách hàng doanh nghiệp by id
		//------------------------------
		public function get_khdn_by_id($makhdn){
			$p = new mKhachHangDoanhNghiep();
			$madn = $p -> select_khdn_by_id($makhdn);
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
		//
		//--------------------------
		//--------------------------
		//-------CẬP NHẬT THÔNG TIN KHÁCH HÀNG DOANH NGHIỆP
		//--------------------------
		//--------------------------
		public function edit_khdn_by_id($madn,$tendoanhnghiep,$sdt,$diachidn,$emaildn,$mst,$ngaytl,$gioithieu,$tennguoidaidien,$hinhanh,$diachindd,$sdtndd,$emailndd,$maxa,$file,$type,$size){
			if ($hinhanh != "") {
      			$duoi_file = strtolower(end(explode('.',$hinhanh)));
      			$name = $madn."_khdn_".rand(201,300)."_edited.".basename($duoi_file);
				if($type == "image/jpeg" || $type == "image/png"){
					if($size <= 2*1024*1024){
						if(move_uploaded_file($file,"assets/uploads/avatar/".$name)){
							$p = new mKhachHangDoanhNghiep();
							$edit = $p -> update_khdn_by_id($madn,$tendoanhnghiep,$sdt,$diachidn,$emaildn,$mst,$ngaytl,$gioithieu,$tennguoidaidien,$name,$diachindd,$sdtndd,$emailndd,$maxa);
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
				$p = new mKhachHangDoanhNghiep();
				$edit = $p -> update_khdn_by_id($madn,$tendoanhnghiep,$sdt,$diachidn,$emaildn,$mst,$ngaytl,$gioithieu,$tennguoidaidien,$hinhanh,$diachindd,$sdtndd,$emailndd,$maxa);
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