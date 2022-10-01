<?php
    include_once("model/connect.php");

    class mNCC{
        #Hiển thị thông tin nhà cung cấp
        public function select_NCC(){
            $conn;
            $p=new ketnoi();
            if($p->moketnoi($conn)){
                $string="SELECT *FROM nhacungcapnongsan";
                $table=mysqli_query($conn,$string);
                $p->dongketnoi($conn);
                return $table;
            }else {
                return false;
            }
        }
        #Xem nhà cung cấp theo ID
        public function select_NCC_id($MaNCC){
            $conn;
            $p=new ketnoi();
            if($p->moketnoi($conn)){
                $string="SELECT * FROM nhacungcapnongsan WHERE MaNCC='".$MaNCC."'";
                $table=mysqli_query($conn,$string);
                $p->dongketnoi($conn);
                return $table;
            }else {
                return false;
            }
        }
    }
?>