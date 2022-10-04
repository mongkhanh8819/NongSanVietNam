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
<<<<<<< HEAD
       
=======
        //hàm lấy thông tin chi tiết tài khoản
        public function get_tt_dangnhap($username)
        {
            $p = new mtaiKhoan();
            $tt = $p -> select_tt_taikhoan($username);
            while($row1 = mysqli_fetch_assoc($tt)){
                $_SESSION['MaAdmin'] = $row1['MaAdmin'];
                $_SESSION['TenAdmin'] = $row1['TenAdmin'];}
            
        }
        ////
        public function login($username, $password)
        {
            $password = md5($password);
            $p = new mtaiKhoan();
            $user = $p -> login($username, $password);
            $row = mysqli_fetch_assoc($user);
            if ($row >= 1) {
                $_SESSION['username'] = $row['username'];
                $_SESSION['password'] = $row['password'];
                $_SESSION['MaVaiTro'] = $row['MaVaiTro'];
                $_SESSION['login_admin'] = true;
                $tt_dn = $this -> get_tt_dangnhap($username);
            }else {
                echo "<script>alert('Đăng nhập thất bại')</script>";
            }
        }
        //
>>>>>>> fb1123f1663f2aea2e865cd682364bf2954494dd
    }
?>