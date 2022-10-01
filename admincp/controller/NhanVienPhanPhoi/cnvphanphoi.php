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
    }
?>