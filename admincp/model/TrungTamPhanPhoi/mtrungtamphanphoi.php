<?php
    include_once("model/connect.php");

    class mTTPP{
        #Hiển thị thông tin trung tâm phân phối
        public function select_TTPP(){
            $conn;
            $p=new ketnoi();
            if($p->moketnoi($conn)){
                $string="SELECT *FROM trungtamphanphoi";
                $table=mysqli_query($conn,$string);
                $p->dongketnoi($conn);
                return $table;
            }else {
                return false;
            }
        }
        #Xem nhà cung cấp theo ID
        public function select_TTPP_id($MaTrungTamPP){
             $conn;
             $p=new ketnoi();
             if($p->moketnoi($conn)){
                $string ="SELECT *FROM tinhthanh JOIN huyenquan on tinhthanh.MaTinh = huyenquan.MaTinh
                JOIN xaphuong on xaphuong.MaHuyen = huyenquan.MaHuyen JOIN trungtamphanphoi on trungtamphanphoi.MaXa = xaphuong.MaXa
                WHERE MaTrungTamPP='".$MaTrungTamPP."'";
               
                 $table=mysqli_query($conn,$string);
                //  echo $string;
                 $p->dongketnoi($conn);
                 return $table;
             }else {
                 return false;
             }
        }
        #Thêm trung tâm phân phối
        public function add_TTPP($MaTrungTamPP, $TenTrungTam,$DiaChi,$ChucNang,$NguoiDaiDien,$MaXa){
            $conn;
            $p = new ketnoi();
            if($p->moketnoi($conn)){
               
                $string = "INSERT INTO trungtamphanphoi(MaTrungTamPP, TenTrungTam, DiaChi, ChucNang, NguoiDaiDien,  MaXa) VALUES ";
                $string .="('".$MaTrungTamPP."','".$TenTrungTam."','".$DiaChi."','".$ChucNang."','".$NguoiDaiDien."',".$MaXa.")";
               
                $table=mysqli_query($conn,$string);
                echo $string;
                $p->dongketnoi($conn);
                var_dump ($table);
                return $table;
            }else {
                return false;
            }
        }
        #CẬP NHẬT TRUNG TÂM PHÂN PHỐI
        public function update_TTPP($MaTrungTamPP, $TenTrungTam,$DiaChi,$ChucNang,$NguoiDaiDien,$MaXa){
            $conn;
            $p = new ketnoi();
            if($p->moketnoi($conn)){
                $string = "update trungtamphanphoi";
                $string .= " set MaTrungTamPP='".$MaTrungTamPP."',TenTrungTam ='".$TenTrungTam."', DiaChi='".$DiaChi."', ChucNang='".$ChucNang."', NguoiDaiDien='".$NguoiDaiDien."',MaXa='".$MaXa."'";
                $string .= "WHERE MaTrungTamPP='".$MaTrungTamPP."'";
                $table=mysqli_query($conn,$string);
                echo $string;
                $p->dongketnoi($conn);
                var_dump ($table);
                return $table;
            }else {
                return false;
            }
        }
        #Xóa trung tâm phân phối
        function del_TTPP($MaTrungTamPP){
			$conn;
			$p = new ketnoi();
			if($p -> moketnoi($conn)){
				$string = "Delete FROM trungtamphanphoi where MaTrungTamPP='".$MaTrungTamPP."'";
				//echo $string;
				$table = mysqli_query($conn,$string);
				$p -> dongketnoi($conn);
				//var_dump($table);
				return $table;
			}else{
				return false;
			}
		}
    }
?>