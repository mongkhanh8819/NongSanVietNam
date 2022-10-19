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
        public function add_taikhoan($MaVaiTro, $username){
            $p=new mtaikhoan;
            $insert=$p->addtaikhoan($MaVaiTro,$username);
            var_dump($insert);
            if($insert){
                return 1;
            }else {
                return 0; //không thể insert
            }
        }
        #XEM TÀI KHOẢN THEO USERNAME
        public function select_taikhoan_byusername($username,$MaVaiTro){
            $p=new mtaikhoan;
            $table=$p->select_taikhoan_username($username,$MaVaiTro);
            return $table;
        }
        #XEM TÀI KHOẢN THEO USERNAME DOANH NGHIỆP
        public function select_taikhoan_byusernamedoanhnghiep(){
            $p=new mtaikhoan;
            $table=$p->select_taikhoan_usernamedoanhnghiep();
            return $table;
        }
        #UPDATE TÀI KHOẢN
        public function update_taikhoan($username,$password){
            $p=new mtaikhoan;
            $update=$p->updatetaikhoan($username,$password);
            // var_dump ($update);
            if($update){
                return 1; //update thành công
            }else {
                return 0; //update thất bại
            }
        }
        #DELETE TAI KHOAN
        public function delete_taikhoan($username){
            $p=new mtaikhoan();
            $delete=$p->deletetaikhoan($username);
            var_dump ($delete);
            return $delete;
        }
       

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

    }
?>