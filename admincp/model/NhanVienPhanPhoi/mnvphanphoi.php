<?php
    include_once("model/connect.php");

    class mNVPP{
        //--------------THỐNG KÊ
        //
        #THỐNG KÊ SỐ LƯỢNG KHÁCH HÀNG DOANH NGHIỆP
        public function count_nhanvien(){
            $conn;
            $p=new ketnoi();
            if($p->moketnoi($conn)){
                $string="SELECT count(*) FROM nhanvienphanphoi";
                $table=mysqli_query($conn,$string);
                $p->dongketnoi($conn);
                return $table;
            }else {
                return false;
            }
        }
        //
        //------------------------------------------
        #Hiển thị thông tin nhà cung cấp
        public function select_nhanvien(){
            $conn;
            $p=new ketnoi();
            if($p->moketnoi($conn)){
                $string="SELECT *FROM nhanvienphanphoi";
                $table=mysqli_query($conn,$string);
                $p->dongketnoi($conn);
                return $table;
            }else {
                return false;
            }
        }
        #Xem nhà cung cấp theo ID
        public function select_NVPP_id($MaNVPP){
             $conn;
             $p=new ketnoi();
             if($p->moketnoi($conn)){
                $string ="SELECT *FROM tinhthanh JOIN huyenquan on tinhthanh.MaTinh = huyenquan.MaTinh
                JOIN xaphuong on xaphuong.MaHuyen = huyenquan.MaHuyen JOIN trungtamphanphoi on trungtamphanphoi.MaXa = xaphuong.MaXa JOIN nhanvienphanphoi on nhanvienphanphoi.MaTrungTamPP = trungtamphanphoi.MaTrungTamPP
                WHERE MaNVPP='".$MaNVPP."'";
                 $table=mysqli_query($conn,$string);
                //  echo $string;
                 $p->dongketnoi($conn);
                //  var_dump ($table);
                 return $table;
             }else {
                 return false;
             }
        }
        #Thêm nhân viên phân phối
        public function add_NVPP($MaNVPP, $TenNVPP, $SDT, $DiaChiNha, $NgaySinh, $HinhAnh, $Email,$GioiTinh,$MaXa,$MaTrungTamPP, $username){
            $conn;
            $p = new ketnoi();
            if($p->moketnoi($conn)){
                if($username !=""){
                    $string = "INSERT INTO nhanvienphanphoi(MaNVPP, TenNVPP, SDT, DiaChiNha, NgaySinh, HinhAnh, Email, GioiTinh, MaXa, MaTrungTamPP, username) VALUES ";
                    $string .="('".$MaNVPP."','".$TenNVPP."','".$SDT."','".$DiaChiNha."','".$NgaySinh."','".$HinhAnh."','".$Email."',".$GioiTinh.",".$MaXa.",'".$MaTrungTamPP."','".$username."')";
                }else{
                    $string = "INSERT INTO nhanvienphanphoi(MaNVPP, TenNVPP, SDT, DiaChiNha, NgaySinh, HinhAnh, Email, GioiTinh, MaXa, MaTrungTamPP)  VALUES ";
                    $string .="('".$MaNVPP."','".$TenNVPP."','".$SDT."','".$DiaChiNha."','".$NgaySinh."','".$HinhAnh."','".$Email."',".$GioiTinh.",".$MaXa.",'".$MaTrungTamPP."')";
                }
                $table=mysqli_query($conn,$string);
                echo $string;
                $p->dongketnoi($conn);
                var_dump ($table);
                return $table;
            }else {
                return false;
            }
        }
    }
?>