<?php
    include_once("model/connect.php");

    class mNVPP{
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
                 $string="SELECT * FROM nhanvienphanphoi WHERE MaNVPP='".$MaNVPP."'";
                 $table=mysqli_query($conn,$string);
                 $p->dongketnoi($conn);
                 return $table;
             }else {
                 return false;
             }
        }
    }
?>