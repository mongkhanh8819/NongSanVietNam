<?php 

	include_once("Model/KhachHangThanhVien/mKhachHangThanhVien.php");

	class cKhachHangThanhVien{
		public function select_khtv(){
			$p = new mKhachHangThanhVien();
			$table = $p -> select_khtv();
			return $table;
		}
		//
		//------------------------------
		//------------------------------
		//------------------------------
		//--------HÀM SELECT khách hàng doanh nghiệp by id
		//------------------------------
		public function get_khtv_by_id($makhtv){
			$p = new mKhachHangThanhVien();
			$matv = $p -> select_khtv_by_id($makhtv);
			return $matv;
		}
		public function them_khtv($ten,$sdt,$diachi,$ngaysinh,$email,$gioitinh,$username,$maxa){
			$p = new mKhachHangThanhVien();
			$insert = $p -> add_khtv($ten,$sdt,$diachi,$ngaysinh,$email,$gioitinh,$username,$maxa);
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
		public function edit_khtv_by_id($makh,$ten,$sdt,$diachi,$ngaysinh,$hinhanh,$email,$gioitinh,$maxa,$file,$type,$size){
			if ($hinhanh != "") {
      			$duoi_file = strtolower(end(explode('.',$hinhanh)));
      			$name = $makh."_khtv_".rand(301,400)."_edited.".basename($duoi_file);
				if($type == "image/jpeg" || $type == "image/png"){
					if($size <= 2*1024*1024){
						if(move_uploaded_file($file,"assets/uploads/avatar/".$name)){
							$p = new mKhachHangThanhVien();
							$edit = $p -> update_khtv_by_id($makh,$ten,$sdt,$diachi,$ngaysinh,$name,$email,$gioitinh,$maxa);
							//var_dump($edit);
							if($edit){
								$_SESSION['avatar'] = $name;
								//$_SESSION['diachi'] = $diachi;
								unset($_SESSION['xa']);
								$_SESSION['name'] = $ten;
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
				$p = new mKhachHangThanhVien();
				$edit = $p -> update_khtv_by_id($makh,$ten,$sdt,$diachi,$ngaysinh,$hinhanh,$email,$gioitinh,$maxa);
				//var_dump($edit);
				if($edit){
					unset($_SESSION['xa']);
					$_SESSION['name'] = $ten;
					return 1;
				}
				else{
					return 0; //không thể edit
				}
			}
		}
	}

 ?>