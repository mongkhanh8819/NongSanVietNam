<?php
    include_once("model/NhanVienPhanPhoi/mnvphanphoi.php");

    class cNVPP{
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
        public function add_nhanvienphanphoi($MaNVPP, $TenNVPP, $SDT, $DiaChiNha, $NgaySinh,$file,$tenanh,$loaianh,$size , $Email,$GioiTinh,$MaXa,$MaTrungTamPP, $username){
            if($loaianh == "image/jpeg" || $loaianh == "image/png" || $loaianh== "image/jpg"){
				if($size <= 2*1024*1024){
					if(move_uploaded_file($file,"assets/uploads/images/".$tenanh)){
						$p= new mNVPP();
						$insert=$p->add_NVPP($MaNVPP, $TenNVPP, $SDT, $DiaChiNha, $NgaySinh, $tenanh, $Email,$GioiTinh,$MaXa,$MaTrungTamPP, $username);
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
    }
?>