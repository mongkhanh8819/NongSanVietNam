<?php 

	include_once("Model/KhachHangDoanhNghiep/mdoanhnghiep.php");

	class cKHDN{
        //--------------THỐNG KÊ
        //
        #THỐNG KÊ SỐ LƯỢNG KHÁCH HÀNG DOANH NGHIỆP
        public function count_dn(){
            $p = new mKhachHangDoanhNghiep();
            $table = $p -> count_dn();
            return $table;
        }
        //
        //------------------------------------------
        #xem doanh nghiệp
		public function select_KHDN(){
			$p = new mKhachHangDoanhNghiep();
			$table = $p -> select_KHDN();
			return $table;
		}
        
        #Hiển thị  doanh nghiệp id
        public function select_doanhnghiep_byid_xa($MaDN){
            $p= new mKhachHangDoanhNghiep();
            $table = $p->select_doanhnghiep_id($MaDN);
            // var_dump($table);
            return $table;
        }
        #update doanh nghiệp
		public function update_DN($MaDN, $TenDoanhNghiep, $SDT, $DiaChi, $Email, $MST, $NgayThanhLap, $GioiThieu, $TenNguoiDaiDien, $DiaChi_NDD, $SDT_NDD, $Email_NDD, $username, $MaXa){
            $p = new mKhachHangDoanhNghiep();
            $update = $p -> update_KHDN($MaDN, $TenDoanhNghiep, $SDT, $DiaChi, $Email, $MST, $NgayThanhLap, $GioiThieu, $TenNguoiDaiDien, $DiaChi_NDD, $SDT_NDD, $Email_NDD, $username, $MaXa);
            var_dump($update);
            if($update){
                return 1; //cập nhật thành công
            }else{
                return 0; //cập nhật không thành công
            }
        }
        #thêm doanh nghiệp
        public function add_DN($MaDN, $TenDoanhNghiep, $SDT, $DiaChi, $Email, $MST, $NgayThanhLap, $GioiThieu, $TenNguoiDaiDien, $DiaChi_NDD, $SDT_NDD, $Email_NDD,$username, $MaXa){
            $p = new mKhachHangDoanhNghiep();
            $insert = $p->add_KHDN($MaDN, $TenDoanhNghiep, $SDT, $DiaChi, $Email, $MST, $NgayThanhLap, $GioiThieu, $TenNguoiDaiDien, $DiaChi_NDD, $SDT_NDD, $Email_NDD,$username, $MaXa);
            var_dump($insert);
            if($insert){
                return 1;// thêm thành công
            }else {
                return 0;//thêm không thành công
            }
           
        }
        #kiem tra user
        public function check_user($username){
            $p= new mKhachHangDoanhNghiep();
            $table = $p -> checkuser($username);
			return $table;
		}
        #xóa khách hàng doanh nghiệp
        function delete_khachhangdoanhnghiep($MaDN){
			$p = new mKhachHangDoanhNghiep();
			$table  = $p -> del_KHDN($MaDN);
			var_dump($table);
			return $table;
		}
	}

 ?>