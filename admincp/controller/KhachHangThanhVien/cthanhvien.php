<?php
    include_once("model/KhachHangThanhVien/mthanhvien.php");

    class cKHTV{
    	//--------------THỐNG KÊ
        //
        #THỐNG KÊ SỐ LƯỢNG KHÁCH HÀNG DOANH NGHIỆP
        public function count_thanhvien(){
            $p = new mthanhvien();
            $table = $p->count_thanhvien();
            return $table;
        }
        //
        //------------------------------------------
        #Hien thi thong tin thanh vien
        public function select_KHTV(){
            $p = new mthanhvien();
            $table = $p->select_thanhvien();
            return $table;
        }
        #Hien thi thong tin thanh vien theo MaKHTV
        public function select_thanhvien_byid($MaKHTV){
            $p=new mthanhvien();
            $table=$p->select_thanhvien_id($MaKHTV);
            return $table;
        }
        #thêm khách hàng thành viên
        public function add_thanhvien($Ten_KHTV, $SDT, $DiaChi, $NgaySinh, $Email, $GioiTinh, $username, $MaXa){
            $p = new mthanhvien();
            $insert = $p->add_KHTV($Ten_KHTV, $SDT, $DiaChi, $NgaySinh, $Email, $GioiTinh, $username, $MaXa);
            var_dump($insert);
            if($insert){
                return 1;// thêm thành công
            }else {
                return 0;//thêm không thành công
            }
           
        }
		#update khách hàng thành viên
		public function update_thanhvien($MaKHTV, $Ten_KHTV, $SDT, $DiaChi, $NgaySinh, $Email, $GioiTinh, $username, $MaXa){
			$p=new mthanhvien();
			$update=$p->update_KHTV($MaKHTV, $Ten_KHTV, $SDT, $DiaChi, $NgaySinh, $Email, $GioiTinh, $username, $MaXa);
			var_dump($update);
			if($update){
				return 1;// update thành công
			}else{
				return 0;// update không thành công
			}
				
		}
		#kiểm tra user
		public function check_user($username){
            $p= new mthanhvien();
            $table = $p -> checkuser($username);
			return $table;
		}
        function delete_khachhangthanhvien($MaKHTV){
			$p = new mthanhvien();
			$table  = $p -> del_KHTV($MaKHTV);
			var_dump($table);
			return $table;
		}

    }
?>