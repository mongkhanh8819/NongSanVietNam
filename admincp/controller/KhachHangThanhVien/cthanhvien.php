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
        public function add_thanhvien($MaKHTV, $Ten_KHTV, $SDT, $DiaChi, $NgaySinh,$file,$tenanh, $loaianh,$size, $Email, $GioiTinh, $username, $MaXa){
            if($loaianh == "image/jpeg" || $loaianh == "image/png" || $loaianh== "image/jpg"){
				if($size <= 2*1024*1024){
					if(move_uploaded_file($file,"assets/uploads/images/".$tenanh)){
						$p= new mthanhvien();
						$insert=$p->add_KHTV($MaKHTV, $Ten_KHTV, $SDT, $DiaChi, $NgaySinh, $tenanh, $Email, $GioiTinh, $username, $MaXa);
						var_dump($insert);
						if($insert){
							return 1;
						}
						else{
							return 0; //không thể insert
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
        }
		#update khách hàng thành viên
		public function update_thanhvien($MaKHTV, $Ten_KHTV, $SDT, $DiaChi, $NgaySinh, $Email, $GioiTinh, $username, $MaXa){
			$p=new mthanhvien();
			$update=$p->update_KHTV($MaKHTV, $Ten_KHTV, $SDT, $DiaChi, $NgaySinh, $Email, $GioiTinh, $username, $MaXa);
			if($update){
				return 1;// update thành công
			}else{
				return 0;// update không thành công
			}
				
		}
		public function check_user($username){
            $p= new mthanhvien();
            $table = $p -> checkuser($username);
			return $table;
		}

    }
?>