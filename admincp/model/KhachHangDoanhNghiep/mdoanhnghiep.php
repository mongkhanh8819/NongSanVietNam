<?php 

	include_once("model/connect.php");

	class mKhachHangDoanhNghiep{
		#xem doanh nghiệp
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
		#xem doanh nghiệp theo id
		// public function select_KHDN_id($MaDN){
            // $conn;
            // $p = new ketnoi();
            // if($p->moketnoi($conn)){
                // $string="Select * from khachhangdoanhnghiep where MaDN ='".$MaDN."'";
                //echo $string;
                // $table=mysqli_query($conn,$string);
                // $p->dongketnoi($conn);
                //var_dump($table);
                // return $table;
                
            // }else{
                // return false;
            // }
		// }
		#them doanh nghiệp
		public function add_KHDN($MaDN, $TenDoanhNghiep, $SDT, $DiaChi, $Email, $MST, $NgayThanhLap, $GioiThieu, $TenNguoiDaiDien, $DiaChi_NDD, $SDT_NDD, $Email_NDD,$username, $MaXa){
			$conn;
			$p = new ketnoi();
			if($p->moketnoi($conn)){
				if ($username !="") {
					$string="insert into khachhangdoanhnghiep(MaDN,TenDoanhNghiep,SDT,DiaChi,Email,MST,NgayThanhLap,GioiThieu,TenNguoiDaiDien,DiaChi_NDD, SDT_NDD,Email_NDD,username,MaXa) values";
                	$string .= "('".$MaDN."','".$TenDoanhNghiep."','".$SDT."','".$DiaChi."','".$Email."','".$MST."','".$NgayThanhLap."','".$GioiThieu."','".$TenNguoiDaiDien."','".$DiaChi_NDD."','".$SDT_NDD."','".$Email_NDD."','".$username."',".$MaXa.")";
				}else {
					$string="insert into khachhangdoanhnghiep(MaDN,TenDoanhNghiep,SDT,DiaChi,Email,MST,NgayThanhLap,GioiThieu,TenNguoiDaiDien,DiaChi_NDD, SDT_NDD,Email_NDD,MaXa) values";
                	$string .= "('".$MaDN."','".$TenDoanhNghiep."','".$SDT."','".$DiaChi."','".$Email."','".$MST."','".$NgayThanhLap."','".$GioiThieu."','".$TenNguoiDaiDien."','".$DiaChi_NDD."','".$SDT_NDD."','".$Email_NDD."',".$MaXa.")";
				}
				
                $table=mysqli_query($conn,$string);
                echo $string;
                $p->dongketnoi($conn);
				var_dump($table);
                return $table;
            }else{
                return false;
            }
		}
		##Hiển thị update doanh nghiệp từ xã tỉnh huyện
		public function select_doanhnghiep_id($MaDN){
			$conn;
			$p= new ketnoi();
			if($p->moketnoi($conn)){
				$string="SELECT *FROM tinhthanh JOIN huyenquan on tinhthanh.MaTinh = huyenquan.MaTinh
						JOIN xaphuong on xaphuong.MaHuyen = huyenquan.MaHuyen JOIN khachhangdoanhnghiep on khachhangdoanhnghiep.MaXa = xaphuong.MaXa
						WHERE MaDN ='".$MaDN."'";
				// echo $string;
				$table=mysqli_query($conn,$string);
				$p->dongketnoi($conn);
				// var_dump($table);
				return $table;
						
			}else{
				return false;
			}
			
		}
		public function update_KHDN($MaDN, $TenDoanhNghiep, $SDT, $DiaChi, $Email, $MST, $NgayThanhLap, $GioiThieu, $TenNguoiDaiDien, $DiaChi_NDD, $SDT_NDD, $Email_NDD, $username, $MaXa){
			$conn;
			$p= new ketnoi();
			if($p->moketnoi($conn)){
				if($username !=""){
					$string ="update KhachHangDoanhNghiep";
					$string .= " set MaDN='".$MaDN."', TenDoanhNghiep='".$TenDoanhNghiep."', SDT='".$SDT."', DiaChi='".$DiaChi."', Email='".$Email."', MST='".$MST."', NgayThanhLap='".$NgayThanhLap."', GioiThieu='".$GioiThieu."', TenNguoiDaiDien='".$TenNguoiDaiDien."', DiaChi_NDD='".$DiaChi_NDD."', SDT_NDD='".$SDT_NDD."', Email_NDD='".$Email_NDD."', username='".$username."', MaXa='".$MaXa."'";
					$string .= " Where MaDN='".$MaDN."'";
				}else {
					$string ="update KhachHangDoanhNghiep";
					$string .= " set MaDN='".$MaDN."', TenDoanhNghiep='".$TenDoanhNghiep."', SDT='".$SDT."', DiaChi='".$DiaChi."', Email='".$Email."', MST='".$MST."', NgayThanhLap='".$NgayThanhLap."', GioiThieu='".$GioiThieu."', TenNguoiDaiDien='".$TenNguoiDaiDien."', DiaChi_NDD='".$DiaChi_NDD."', SDT_NDD='".$SDT_NDD."', Email_NDD='".$Email_NDD."', MaXa='".$MaXa."'";
					$string .= " Where MaDN='".$MaDN."'";
				}
				
				echo $string;
				$table =mysqli_query($conn,$string);
				$p->dongketnoi($conn);
				var_dump($table);
				return $table;

			}else {
				return false;
			}
		}
		public function checkuser($username){
			$conn;
			$p= new ketnoi();
			if($p->moketnoi($conn)){
				$string="SELECT * FROM khachhangdoanhnghiep WHERE username IN (SELECT username FROM taikhoan) && username = '".$username."'";
				echo $string;
				$table= mysqli_query($conn,$string);
				$p->dongketnoi($conn);
				var_dump($table);
				return $table;
			}else {
				return false;
			}
		}
	}	
?>