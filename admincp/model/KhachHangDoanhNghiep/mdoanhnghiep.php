<?php 

	include_once("model/connect.php");

	class mKhachHangDoanhNghiep{
		//--------------THỐNG KÊ
		//
		#THỐNG KÊ SỐ LƯỢNG KHÁCH HÀNG DOANH NGHIỆP
		public function count_dn(){
			$conn;
			$p = new ketnoi();
			if($p -> moketnoi($conn)){
				$string = "SELECT count(*) FROM khachhangdoanhnghiep";
				$table = mysqli_query($conn,$string);
				$p -> dongketnoi($conn);
				//
				return $table;
			}else{
				return false;
			}
		}
		//
		//------------------------------------------
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
		##Hiển thị doanh nghiệp theo MADN
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
		#UPDATE KHACH HANG DOANH NGHIEP
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
				echo $username;
				$table =mysqli_query($conn,$string);
				$p->dongketnoi($conn);
				var_dump($table);
				return $table;

			}else {
				return false;
			}
		}
		#KIEM TRA TAI KHOAN DOANH NGHIEP
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
		#XÓA DOANH NGHIỆP
		function del_KHDN($MaDN){
			$conn;
			$p = new ketnoi();
			if($p -> moketnoi($conn)){
				$string = "Delete FROM khachhangdoanhnghiep where MaDN='".$MaDN."'";
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