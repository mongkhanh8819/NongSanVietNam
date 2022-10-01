<?php
    include_once("model/KhachHangThanhVien/mthanhvien.php");

    class cKHTV{
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
    }
?>