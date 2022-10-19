<?php 

	include_once("Model/NhanVienPhanPhoi/mNhanVienPhanPhoi.php");

	class cNhanVienPhanPhoi{
		public function select_nvpp(){
			$p = new mNhanVienPhanPhoi();
			$table = $p -> select_nvpp();
			return $table;
		}
		//------------------
		//----------------------
		//-------------------------
		//---------------------------
		//---GET THÔNG TIN NHÂN VIÊN THUỘC MỘT XÃ
		//----------------------------
		//----------------------------
		public function get_nvpp_by_diachi($maxa){
			$p = new mNhanVienPhanPhoi();
			$table = $p -> select_nvpp_by_diachi($maxa);
			return $table;
		}
		//------------------
		//----------------------
		//-------------------------
		//---------------------------
		//---GET THÔNG TIN NHÂN VIÊN THEO ID: MANVPP (DÙNG CHO CHỨC NĂNG GỬI YÊU CẦU KIỂM ĐỊNH)
		//----------------------------
		//----------------------------
		public function get_nvpp_by_id($manvpp){
			$p = new mNhanVienPhanPhoi();
			$table = $p -> select_nvpp_by_id($manvpp);
			return $table;
		}
		//
		//--------------------------
		//--------------------------
		//-------CẬP NHẬT THÔNG TIN NHÂN VIÊN PHÂN PHÔI 
		//--------------------------
		//--------------------------
		public function edit_nvpp_by_id($manvpp,$tennvpp,$sdt,$diachi,$ngaysinh,$email,$maxa,$hinhanh,$gioitinh,$file,$type,$size){
			if ($hinhanh != "") {
      			$duoi_file = strtolower(end(explode('.',$hinhanh)));
      			$name = $manvpp."_nvpp_".rand(1,100)."_edited.".basename($duoi_file);
				if($type == "image/jpeg" || $type == "image/png"){
					if($size <= 2*1024*1024){
						if(move_uploaded_file($file,"assets/uploads/avatar/".$name)){
							$p = new mNhanVienPhanPhoi();
							$edit = $p -> update_nvpp_by_id($manvpp,$tennvpp,$sdt,$diachi,$ngaysinh,$email,$name,$gioitinh,$maxa);
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
				$p = new mNhanVienPhanPhoi();
				$edit = $p -> update_nvpp_by_id($manvpp,$tennvpp,$sdt,$diachi,$ngaysinh,$email,$hinhanh,$gioitinh,$maxa);
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