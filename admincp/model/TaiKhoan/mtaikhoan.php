<?php
    include_once("model/connect.php");
    class mtaikhoan{
        #hiển thị thông tin tài khoản
        public function select_taikhoan(){
            $conn;
            $p=new ketnoi();
            if($p->moketnoi($conn)){
                $string="SELECT *FROM taikhoan";
                $table=mysqli_query($conn,$string);
                $p->dongketnoi($conn);
                return $table;
            }else{
                return false;
            }
        }
        #THÊM TÀI KHOẢN
        public function addtaikhoan($MaVaiTro,$username,$password){
            $conn;
            $p=new ketnoi();
            if ($p->moketnoi($conn)){
                $password = md5($password); 
                $string="Insert into taikhoan(MaVaiTro,username,password) values";
                $string .="('".$MaVaiTro."','".$username."','".$password."')";
                $table=mysqli_query($conn,$string);
                $p->dongketnoi($conn);
                return $table;
            }else{
                return false;
            }
        }
        #XEM TÀI KHOẢN THEO USERNAME
        public function select_taikhoan_username($username){
            $conn;
            $p=new ketnoi;
            if ($p->moketnoi($conn)){
                $string="SELECT *FROM taikhoan WHERE username='".$username."'";
                $table=mysqli_query($conn,$string);
                $p->dongketnoi($conn);
                return $table;
            }else {
                return false;
            }
        }
    }

?>