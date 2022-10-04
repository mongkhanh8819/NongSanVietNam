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