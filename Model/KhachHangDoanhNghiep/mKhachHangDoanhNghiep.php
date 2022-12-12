<?php 

	include_once("Model/connect.php");

	class mKhachHangDoanhNghiep{
		//hàm get thông tin khách hàng doanh nghiệp
		public function select_khdn(){
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
		//hàm get mã doanh nghiệp thuộc bản ghi mới nhất
		public function select_max_madn(){
			$conn;
			$p = new ketnoi();
			if($p -> moketnoi($conn)){
				$string = "SELECT MaDN FROM khachhangdoanhnghiep ORDER BY MaDN DESC LIMIT 1";
				$madn = mysqli_query($conn,$string);
				$p -> dongketnoi($conn);
				//
				return $madn;
			}else{
				return false;
			}
		}
		//hàm thêm khách hàng doanh nghiệp
		public function add_khdn($madn,$tendn,$sdt,$diachi,$email,$ngaythanhlap,$gioithieu,$tenndd,$username,$maxa){
			$conn;
			$p = new ketnoi();
			if($p -> moketnoi($conn)){
				$sql = "INSERT INTO khachhangdoanhnghiep(MaDN, TenDoanhNghiep, SDT, DiaChi, Email, NgayThanhLap, GioiThieu, TenNguoiDaiDien, username, MaXa) VALUES ('".$madn."','".$tendn."','".$sdt."','".$diachi."','".$email."','".$ngaythanhlap."','".$gioithieu."','".$tenndd."','".$username."',".$maxa.")";
				$result = mysqli_query($conn,$sql);
				$p -> dongketnoi($conn);
				return $result;
			}else{
				return false;
			}
		}
		//--------------------------------------------
		//--------------------------------------------
		//--------------------------------------------
		//--------------------------------------------
		//hàm get thông tin nhà cung cấp nông sản by id
		//--------------------------------------------
		//--------------------------------------------
		//--------------------------------------------
		//--------------------------------------------
		//--------------------------------------------s
		public function select_khdn_by_id($makhdn){
			$conn;
			$p = new ketnoi();
			if($p -> moketnoi($conn)){
				$string = "SELECT * FROM tinhthanh JOIN huyenquan ON tinhthanh.MaTinh = huyenquan.MaTinh JOIN xaphuong ON huyenquan.MaHuyen = xaphuong.MaHuyen JOIN khachhangdoanhnghiep ON xaphuong.MaXa = khachhangdoanhnghiep.MaXa WHERE MaDN ='".$makhdn."'";
				//echo $string;
				$table = mysqli_query($conn,$string);
				$p -> dongketnoi($conn);
				//
				return $table;
			}else{
				return false;
			}
		}
		//---------------------------
		//---------------------------
		//---------------------------
		//---------------------------
		//-----CẬP NHẬT THÔNG TIN CÁ NHÂN KHÁCH HÀNG DOANH NGHIỆP (ACTOR NCC KHÁCH HÀNG DOANH NGHIỆP)
		//---------------------------
		//---------------------------
		//---------------------------
		public function update_khdn_by_id($madn,$tendoanhnghiep,$sdt,$diachidn,$emaildn,$mst,$ngaytl,$gioithieu,$tennguoidaidien,$hinhanh,$diachindd,$sdtndd,$emailndd,$maxa){
			$conn;
			$p = new ketnoi();
			if($p -> moketnoi($conn)){
				if ($hinhanh != "") {
				$string = "UPDATE khachhangdoanhnghiep SET TenDoanhNghiep='".$tendoanhnghiep."', SDT='".$sdt."',DiaChi='".$diachidn."',Email='".$emaildn."',MST='".$mst."',NgayThanhLap='".$ngaytl."',GioiThieu='".$gioithieu."',TenNguoiDaiDien='".$tennguoidaidien."', HinhAnh ='".$hinhanh."',DiaChi_NDD='".$diachindd."', SDT_NDD = '".$sdtndd."', Email_NDD='".$emailndd."',MaXa=".$maxa." WHERE MaDN ='".$madn."'";
				}else{
				$string = "UPDATE khachhangdoanhnghiep SET TenDoanhNghiep='".$tendoanhnghiep."', SDT='".$sdt."',DiaChi='".$diachidn."',Email='".$emaildn."',MST='".$mst."',NgayThanhLap='".$ngaytl."',GioiThieu='".$gioithieu."',TenNguoiDaiDien='".$tennguoidaidien."',DiaChi_NDD='".$diachindd."', SDT_NDD = '".$sdtndd."', Email_NDD='".$emailndd."',MaXa=".$maxa." WHERE MaDN ='".$madn."'";
				}
				
				//echo $string;
				$kq = @mysqli_query($conn,$string);
				$p -> dongketnoi($conn);
				return $kq;
			}else{
				return false;
			}
		}
	}


 ?>