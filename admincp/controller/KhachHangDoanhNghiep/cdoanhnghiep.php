<?php 

	include_once("Model/KhachHangDoanhNghiep/mdoanhnghiep.php");

	class cKHDN{
		public function select_KHDN(){
			$p = new mKhachHangDoanhNghiep();
			$table = $p -> select_KHDN();
			return $table;
		}
		public function select_DN_byid($MaDN){
            $p= new mKhachHangDoanhNghiep();
            $table = $p->select_KHDN_id($MaDN);
            //var_dump($table);
            return $table;
        }
		public function update_DN($MaDN, $TenDoanhNghiep, $SDT, $DiaChi, $Email, $MST, $NgayThanhLap, $GioiThieu, $TenNguoiDaiDien, $DiaChi_NDD, $SDT_NDD, $Email_NDD, $username, $MaXa){
            $p = new mqlbenhvien();
            $update = $p -> update_KHDN($MaDN, $TenDoanhNghiep, $SDT, $DiaChi, $Email, $MST, $NgayThanhLap, $GioiThieu, $TenNguoiDaiDien, $DiaChi_NDD, $SDT_NDD, $Email_NDD, $username, $MaXa);
            //var_dump($update);
            if($update){
                return 1;
            }else{
                return 0;
            }
        }
	}

 ?>