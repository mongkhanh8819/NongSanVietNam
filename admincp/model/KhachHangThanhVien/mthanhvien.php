<?php
    include_once("model/connect.php");

    class mthanhvien{
        #Hien thi thong tin thanh vien
        public function select_thanhvien(){
            $conn;
            $p=new ketnoi();
            if($p->moketnoi($conn)){
                $string = "SELECT * FROM khachhangthanhvien";
                $table =mysqli_query($conn, $string);
                $p->dongketnoi($conn);
                return $table;
            }else {
                return false;
            }

        }
        public function select_thanhvien_id($MaKHTV){
            $conn;
            $p=new ketnoi();
            if($p->moketnoi($conn)){
                $string ="SELECT *FROM khachhangthanhvien WHERE MaKHTV='".$MaKHTV."'";
                $table =mysqli_query($conn,$string);
                $p->dongketnoi($conn);
                return $table;
            }else {
                return false;
            }
        }
    }
?>