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
        public function addtaikhoan($MaVaiTro,$username){
            $conn;
            $p=new ketnoi();
            if ($p->moketnoi($conn)){
                $password =md5('123456789'); 
                $string="Insert into taikhoan(MaVaiTro,username,password) values";
                $string .="('".$MaVaiTro."','".$username."','".$password."')";
                echo $string;
                $table=mysqli_query($conn,$string);
                $p->dongketnoi($conn);
                return $table;
            }else{
                return false;
            }
        }
        #XEM TÀI KHOẢN THEO USERNAME
        public function select_taikhoan_username($username,$MaVaiTro){
            $conn;
            $p=new ketnoi;
            if ($p->moketnoi($conn)){
                // $string="SELECT *FROM taikhoan WHERE username='".$username."'";
                $string="SELECT * FROM taikhoan JOIN vaitro on taikhoan.MaVaiTro = vaitro.MaVaiTro WHERE taikhoan.username='".$username."' && vaitro.MaVaiTro=".$MaVaiTro."";
                // echo $string;
                $table=mysqli_query($conn,$string);
                $p->dongketnoi($conn);
                return $table;
            }else {
                return false;
            }
        }
        #XEM TÀI KHOẢN USERNAME THEO DOANH NGHIỆP
        public function select_taikhoan_usernamedoanhnghiep(){
            $conn;
            $p=new ketnoi;
            if ($p->moketnoi($conn)){
                // $string="SELECT *FROM taikhoan WHERE username='".$username."'";
                $string="SELECT * FROM taikhoan JOIN khachhangdoanhnghiep on taikhoan.username = khachhangdoanhnghiep.username WHERE taikhoan.MaVaiTro=4";
                // echo $string;
                $table=mysqli_query($conn,$string);
                $p->dongketnoi($conn);
                return $table;
            }else {
                return false;
            }
        }
        #UPDATE TÀI KHOẢN
        public function updatetaikhoan($username,$password){
            $conn;
            $p=new ketnoi();
            if($p->moketnoi($conn)){
                $password=md5($password);
                $string="update taikhoan";
                $string .=" set username='".$username."', password='".$password."'";
                $string .= "where username='".$username."'";
                // echo $string;
                $table = mysqli_query($conn, $string);
                $p->dongketnoi($conn);
                return $table;
            }else {
                return false;
            }
        }
        #DELETE TAI KHOAN
        public function deletetaikhoan($username){
            $conn;
            $p=new ketnoi();
            if($p->moketnoi($conn)){
                $string = "DELETE FROM taikhoan WHERE username ='".$username."'";
                echo $string;
                $table=mysqli_query($conn, $string);
                $p->dongketnoi($conn);
                return $table;
            }else {
                return false;
            }
        }

        //LOGIN
        //hàm đăng nhập
        public function login($username, $password){
            $conn;
            $p = new ketnoi();
            if($p -> moketnoi($conn)){
                $sql = "SELECT * FROM taikhoan WHERE username = '".$username."' and password = '".$password."'";
                $sql .= " and MaVaiTro = 1";
                //echo $sql;
                $result = mysqli_query($conn,$sql);
                $p -> dongketnoi($conn);
                return $result;
            }else{
                return false;
            }
        }
        //hàm lấy thông tin người dùng đã đăng nhập vào tài khoản
        public function select_tt_taikhoan($username){
            $conn;
            $p = new ketnoi();
            if($p -> moketnoi($conn)){
                $sql = "SELECT * FROM taikhoan JOIN admin ON taikhoan.username = admin.username WHERE taikhoan.username = '".$username."'";

                $result = mysqli_query($conn,$sql);
                $p -> dongketnoi($conn);
                return $result;
            }else{
                return false;
            }
        }
    }

?>