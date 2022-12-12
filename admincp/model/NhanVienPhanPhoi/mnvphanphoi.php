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
                $string ="SELECT * FROM tinhthanh JOIN huyenquan on tinhthanh.MaTinh = huyenquan.MaTinh JOIN xaphuong on xaphuong.MaHuyen = huyenquan.MaHuyen JOIN nhanvienphanphoi on xaphuong.MaXa = nhanvienphanphoi.MaXa JOIN trungtamphanphoi ON nhanvienphanphoi.MaTrungTamPP = trungtamphanphoi.MaTrungTamPP WHERE MaNVPP='".$MaNVPP."'";
                 $table=mysqli_query($conn,$string);
                //   echo $string;
                 $p->dongketnoi($conn);
                //  var_dump ($table);
                 return $table;
             }else {
                 return false;
             }
        }
        #Thêm nhân viên phân phối
        public function add_NVPP($MaNVPP, $TenNVPP, $SDT, $DiaChiNha, $NgaySinh, $Email,$GioiTinh,$MaXa,$MaTrungTamPP, $username){
            $conn;
            $p = new ketnoi();
            if($p->moketnoi($conn)){
                if($username !=""){
                    $string = "INSERT INTO nhanvienphanphoi(MaNVPP, TenNVPP, SDT, DiaChiNha, NgaySinh, Email, GioiTinh, MaXa, MaTrungTamPP, username) VALUES ";
                    $string .="('".$MaNVPP."','".$TenNVPP."','".$SDT."','".$DiaChiNha."','".$NgaySinh."','".$Email."',".$GioiTinh.",".$MaXa.",'".$MaTrungTamPP."','".$username."')";
                }else{
                    $string = "INSERT INTO nhanvienphanphoi(MaNVPP, TenNVPP, SDT, DiaChiNha, NgaySinh,  Email, GioiTinh, MaXa, MaTrungTamPP)  VALUES ";
                    $string .="('".$MaNVPP."','".$TenNVPP."','".$SDT."','".$DiaChiNha."','".$NgaySinh."','".$Email."',".$GioiTinh.",".$MaXa.",'".$MaTrungTamPP."')";
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
        #kiem tra user
        public function checkuser($username){
			$conn;
			$p= new ketnoi();
			if($p->moketnoi($conn)){
				$string="SELECT * FROM nhanvienphanphoi WHERE username IN (SELECT username FROM taikhoan) && username = '".$username."'";
				echo $string;
				$table= mysqli_query($conn,$string);
				$p->dongketnoi($conn);
				var_dump($table);
				return $table;
			}else {
				return false;
			}
		}
        #Cap nhap nhan vien phan phoi
        public function update_NVPP($MaNVPP, $TenNVPP, $SDT, $DiaChiNha, $NgaySinh,$Email,$GioiTinh,$MaXa,$MaTrungTamPP, $username){
			$conn;
			$p= new ketnoi();
			if($p->moketnoi($conn)){
				if($username !=""){
					$string ="update nhanvienphanphoi";
					$string .= " set MaNVPP='".$MaNVPP."', TenNVPP='".$TenNVPP."', SDT='".$SDT."', DiaChiNha='".$DiaChiNha."', NgaySinh='".$NgaySinh."', Email='".$Email."', GioiTinh='".$GioiTinh."',MaXa='".$MaXa."',MaTrungTamPP='".$MaTrungTamPP."',username='".$username."'";
					$string .= " Where MaNVPP='".$MaNVPP."'";
				}else {
					$string ="update nhanvienphanphoi";
					$string .= " set MaNVPP='".$MaNVPP."', TenNVPP='".$TenNVPP."', SDT='".$SDT."', DiaChiNha='".$DiaChiNha."', NgaySinh='".$NgaySinh."', Email='".$Email."', GioiTinh='".$GioiTinh."',MaXa='".$MaXa."',MaTrungTamPP='".$MaTrungTamPP."'";
					$string .= " Where MaNVPP='".$MaNVPP."'";
				}
				
				echo $string;
				$table =mysqli_query($conn,$string);
				$p->dongketnoi($conn);
				return $table;

			}else {
				return false;
			}
		}
        #xoa nhân viên phân phối
        function del_NVPP($MaNVPP){
			$conn;
			$p = new ketnoi();
			if($p -> moketnoi($conn)){
				$string = "Delete FROM nhanvienphanphoi where MaNVPP='".$MaNVPP."'";
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