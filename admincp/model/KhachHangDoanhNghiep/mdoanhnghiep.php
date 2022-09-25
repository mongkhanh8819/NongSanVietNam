<?php 

	include_once("model/connect.php");

	class mKhachHangDoanhNghiep{
		public function select_KHDN(){
			$conn;
			$p = new ketnoi();
			if($p -> moketnoi($conn)){
				$string = "SELECT * FROM khachhangdoanhnghiep";
				$table = mysqli_query($conn,$string);
				$p -> dongketnoi($conn);
				//
				return $table;
			}else{
				return false;
			}
		}
		public function select_KHDN_id($MaDN){
            $conn;
            $p = new ketnoi();
            if($p->moketnoi($conn)){
                $string="Select * from khachhangdoanhnghiep where MaDN ='".$MaDN."'";
                //echo $string;
                $table=mysqli_query($conn,$string);
                $p->dongketnoi($conn);
                //var_dump($table);
                return $table;
                
            }else{
                return false;
            }
        }
	}


 ?>