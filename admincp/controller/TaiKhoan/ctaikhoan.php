<?php
    include_once ("model/TaiKhoan/mtaikhoan.php");
    class ctaikhoan{
        #Hiển thị thông tin tài khoản
        public function select_taikhoan(){
            $p=new mtaikhoan;
            $table=$p->select_taikhoan();
            return $table;
        }
        #THÊM TÀI KHOẢN
        public function add_taikhoan($MaVaiTro, $username, $password){
            $p=new mtaikhoan;
            $insert=$p->addtaikhoan($MaVaiTro,$username,$password);
            var_dump($insert);
            if($insert){
                return 1;
            }else {
                return 0; //không thể insert
            }
        }
        #XEM TÀI KHOẢN THEO USERNAME
        public function select_taikhoan_byusername($username){
            $p=new mtaikhoan;
            $table=$p->select_taikhoan_username($username);
            return $table;
        }
        // public function update_taikhoan($MaVaiTro,$username,$password){
            // $p=new mtaikhoan;
            // $update=$p->updatetaikhoan($MaVaiTro,$username,$password);
            // if($update){
                // return 1; //update thành công
            // }else {
                // return 0; //update không thành công
            // }
        // }
    }
?>