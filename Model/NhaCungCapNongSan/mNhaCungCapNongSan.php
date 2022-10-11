<?php 

	include_once("Model/connect.php");

	class mNhaCungCapNongSan{
		//hàm get thông tin nhà cung cấp nông sản
		public function select_ncc(){
			$conn;
			$p = new ketnoi();
			if($p -> moketnoi($conn)){
				$string = "SELECT * FROM nhacungcapnongsan";
				$table = mysqli_query($conn,$string);
				$p -> dongketnoi($conn);
				//
				return $table;
			}else{
				return false;
			}
		}
		//hàm get thông tin nhà cung cấp nông sản by id
		public function select_ncc_by_id($mancc){
			$conn;
			$p = new ketnoi();
			if($p -> moketnoi($conn)){
				$string = "SELECT * FROM tinhthanh JOIN huyenquan ON tinhthanh.MaTinh = huyenquan.MaTinh JOIN xaphuong ON huyenquan.MaHuyen = xaphuong.MaHuyen JOIN nhacungcapnongsan ON xaphuong.MaXa = nhacungcapnongsan.MaXa WHERE MaNCC =".$mancc;
				$table = mysqli_query($conn,$string);
				$p -> dongketnoi($conn);
				//
				return $table;
			}else{
				return false;
			}
		}
		//hàm thêm nhà cung cấp nông sản
		public function add_ncc($tenncc,$tenndd,$diachincc,$sdtncc,$emailncc,$username,$maxa){
			$conn;
			$p = new ketnoi();
			if($p -> moketnoi($conn)){
				$sql = "INSERT INTO nhacungcapnongsan(TenNhaCungCap, TenNguoiDaiDien, DiaChi_NCC, SDT_NCC, EmailNCC, username, MaXa) VALUES ('".$tenncc."','".$tenndd."','".$diachincc."','".$sdtncc."','".$emailncc."','".$username."',".$maxa.")";
				$result = mysqli_query($conn,$sql);
				$p -> dongketnoi($conn);
				return $result;
			}else{
				return false;
			}
		}
		//---------------------------
		//---------------------------
		//---------------------------
		//---------------------------
		//-----CẬP NHẬT THÔNG TIN CÁ NHÂN NHÀ CUNG CẤP NÔNG SẢN (ACTOR NCC NÔNG SẢN)
		//---------------------------
		//---------------------------
		//---------------------------
		public function update_ncc_by_id($mancc,$tenncc,$tenndd,$diachincc,$diachindd,$sdtncc,$sdtndd,$emailncc,$emailndd,$maxa,$hinhanh){
			$conn;
			$p = new ketnoi();
			if($p -> moketnoi($conn)){
				if ($hinhanh != "") {
				$string = "UPDATE nhacungcapnongsan SET TenNhaCungCap='".$tenncc."', TenNguoiDaiDien='".$tenndd."', HinhAnh='".$hinhanh."', DiaChi_NCC = '".$diachincc."', DiaChi_NDD = '".$diachindd."', SDT_NCC = '".$sdtncc."', SDT_NDD = '".$sdtndd."', EmailNCC = '".$emailncc."', EmailNDD = '".$emailndd."', MaXa = ".$maxa." WHERE MaNCC = ".$mancc;	
				}else{
				$string = "UPDATE nhacungcapnongsan SET TenNhaCungCap='".$tenncc."', TenNguoiDaiDien='".$tenndd."', DiaChi_NCC = '".$diachincc."', DiaChi_NDD = '".$diachindd."', SDT_NCC = '".$sdtncc."', SDT_NDD = '".$sdtndd."', EmailNCC = '".$emailncc."', EmailNDD = '".$emailndd."', MaXa = ".$maxa." WHERE MaNCC = ".$mancc;
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