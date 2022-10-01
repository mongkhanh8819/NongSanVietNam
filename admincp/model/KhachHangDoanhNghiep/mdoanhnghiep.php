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
		public function update_KHDN($MaDN, $TenDoanhNghiep, $SDT, $DiaChi, $Email, $MST, $NgayThanhLap, $GioiThieu, $TenNguoiDaiDien, $DiaChi_NDD, $SDT_NDD, $Email_NDD, $username, $MaXa){
			$conn;
			$p= new ketnoi();
			if($p->moketnoi($conn)){
				$string ="update KhachHangDoanhNghiep";
				$string .= "set MaDN='".$MaDN."', TenDoanhNghiep='".$TenDoanhNghiep."', SDT='".$SDT."', DiaChi='".$DiaChi."', Email='".$Email."', MST='".$MST."', NgayThanhLap='".$NgayThanhLap."', GioiThieu='".$GioiThieu."', TenNguoiDaiDien='".$TenNguoiDaiDien."', DiaChi_NDD='".$DiaChi_NDD."', SDT_NDD='".$SDT_NDD."', Email_NDD='".$Email_NDD."', username='".$username."', MaXa='".$MaXa."'";
				$string .= "Where MaDN='".$MaDN."'";
				//echo $string;
				$table =mysqli_query($conn,$string);
				$p->dongketnoi($conn);
				return $table;

			}else {
				return false;
			}
		}
	}	
?>