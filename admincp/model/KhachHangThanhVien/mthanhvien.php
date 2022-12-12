<?php
    include_once("model/connect.php");

    class mthanhvien{
        //--------------THỐNG KÊ
        //
        #THỐNG KÊ SỐ LƯỢNG KHÁCH HÀNG DOANH NGHIỆP
        public function count_thanhvien(){
            $conn;
            $p=new ketnoi();
            if($p->moketnoi($conn)){
                $string = "SELECT count(*) FROM khachhangthanhvien";
                $table =mysqli_query($conn, $string);
                $p->dongketnoi($conn);
                return $table;
            }else {
                return false;
            }

        }
        //
        //------------------------------------------
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
        #Xem khách hàng thành viên theo id
        public function select_thanhvien_id($MaKHTV){
            $conn;
            $p=new ketnoi();
            if($p->moketnoi($conn)){
                $string ="SELECT *FROM tinhthanh JOIN huyenquan on tinhthanh.MaTinh = huyenquan.MaTinh
                    JOIN xaphuong on xaphuong.MaHuyen = huyenquan.MaHuyen JOIN khachhangthanhvien on khachhangthanhvien.MaXa = xaphuong.MaXa
                    WHERE MaKHTV='".$MaKHTV."'";
                $table =mysqli_query($conn,$string);
                $p->dongketnoi($conn);
                return $table;
            }else {
                return false;
            }
        }
        #thêm khách hàng thành viên
        public function add_KHTV($Ten_KHTV, $SDT, $DiaChi, $NgaySinh, $Email, $GioiTinh, $username, $MaXa){
            $conn;
            $p = new ketnoi();
            if($p->moketnoi($conn)){
                if($username !=""){
                    $string = "INSERT INTO khachhangthanhvien(Ten_KHTV, SDT, DiaChi, NgaySinh, Email, GioiTinh, username, MaXa) VALUES ";
                    $string .="('".$Ten_KHTV."','".$SDT."','".$DiaChi."','".$NgaySinh."','".$Email."',".$GioiTinh.",'".$username."',".$MaXa.")";
                }else{
                    $string = "INSERT INTO khachhangthanhvien(Ten_KHTV, SDT, DiaChi, NgaySinh, Email, GioiTinh , MaXa) VALUES ";
                    $string .="('".$Ten_KHTV."','".$SDT."','".$DiaChi."','".$NgaySinh."','".$Email."',".$GioiTinh.",".$MaXa.")";
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
        #update thành viên
        public function update_KHTV($MaKHTV, $Ten_KHTV, $SDT, $DiaChi, $NgaySinh, $Email, $GioiTinh, $username, $MaXa){
			$conn;
			$p= new ketnoi();
			if($p->moketnoi($conn)){
				if($username !=""){
					$string ="update khachhangthanhvien";
					$string .= " set MaKHTV='".$MaKHTV."', Ten_KHTV='".$Ten_KHTV."', SDT='".$SDT."', DiaChi='".$DiaChi."', NgaySinh='".$NgaySinh."',  Email='".$Email."', GioiTinh='".$GioiTinh."', username='".$username."', MaXa='".$MaXa."'";
					$string .= " Where MaKHTV='".$MaKHTV."'";
				}else {
					$string ="update khachhangthanhvien";
					$string .= " set MaKHTV='".$MaKHTV."', Ten_KHTV='".$Ten_KHTV."', SDT='".$SDT."', DiaChi='".$DiaChi."', NgaySinh='".$NgaySinh."',  Email='".$Email."', GioiTinh='".$GioiTinh."', MaXa='".$MaXa."'";
					$string .= " Where MaKHTV='".$MaKHTV."'";
				}
				
				echo $string;
                echo $username;
				$table =mysqli_query($conn,$string);
                var_dump ($table);
				$p->dongketnoi($conn);
				return $table;

			}else {
				return false;
			}
		}
        # kiểm tra user
        public function checkuser($username){
			$conn;
			$p= new ketnoi();
			if($p->moketnoi($conn)){
				$string="SELECT * FROM khachhangthanhvien WHERE username IN (SELECT username FROM taikhoan) && username ='".$username."'";
				//echo $string;
				$table= mysqli_query($conn,$string);
				$p->dongketnoi($conn);
				var_dump($table);
				return $table;
			}else {
				return false;
			}
		}
        #XÓA Thành viên
		function del_KHTV($MaKHTV){
			$conn;
			$p = new ketnoi();
			if($p -> moketnoi($conn)){
				$string = "Delete FROM khachhangthanhvien where MaKHTV='".$MaKHTV."'";
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