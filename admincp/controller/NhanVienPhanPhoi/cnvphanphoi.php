<?php
    include_once("model/NhanVienPhanPhoi/mnvphanphoi.php");

    class cNVPP{
    	//--------------THỐNG KÊ
		//
		#THỐNG KÊ SỐ LƯỢNG nhân viên phân phối
		public function count_nhanvien(){
            $p = new mNVPP();
            $table = $p->count_nhanvien();
            return $table;
        }
		//
		//------------------------------------------
        #Hien thi thong tin thanh vien
        public function select_NVPP(){
            $p = new mNVPP();
            $table = $p->select_nhanvien();
            return $table;
        }
        #Hien thi thong tin thanh vien theo MaKHTV
         public function select_nhanvien_byid($MaNVPP){
             $p=new mNVPP();
            $table=$p->select_NVPP_id($MaNVPP);
             return $table;
         }
        #thêm nhân viên phân phối
        public function add_nhanvienphanphoi($MaNVPP, $TenNVPP, $SDT, $DiaChiNha, $NgaySinh, $Email,$GioiTinh,$MaXa,$MaTrungTamPP, $username){
            $p = new mNVPP();
            $insert = $p->add_NVPP($MaNVPP, $TenNVPP, $SDT, $DiaChiNha, $NgaySinh, $Email,$GioiTinh,$MaXa,$MaTrungTamPP, $username);
            var_dump($insert);
            if($insert){
                return 1;// thêm thành công
            }else {
                return 0;//thêm không thành công
            }
           
           
        }
		#kiem tra user
		public function check_user($username){
            $p= new mNVPP();
            $table = $p -> checkuser($username);
			return $table;
		}
		#Cap nhap thong tin nhan vien
		public function update_nhanvienphanphoi($MaNVPP, $TenNVPP, $SDT, $DiaChiNha, $NgaySinh,$Email,$GioiTinh,$MaXa,$MaTrungTamPP, $username){
			$p=new mNVPP();
			$update=$p->update_NVPP($MaNVPP, $TenNVPP, $SDT, $DiaChiNha, $NgaySinh,$Email,$GioiTinh,$MaXa,$MaTrungTamPP, $username);
			var_dump($update);
			if($update){
				return 1;// update thành công
			}else{
				return 0;// update không thành công
			}
				
		}
        #xoa nhan vien
        function delete_nhanvienphanphoi($MaNVPP){
			$p = new mNVPP();
			$table  = $p -> del_NVPP($MaNVPP);
			var_dump($table);
			return $table;
		}
    }
?>