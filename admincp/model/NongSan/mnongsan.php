<?php 

	include_once("model/connect.php");

	class mNongSan{
		//THỐNG KÊ
		//---------------------------
		//---------------------------
		//---------------------------
		//---------------------------
		//-----LẤY SỐ LƯỢNG NÔNG SẢN 
		//---------------------------
		//---------------------------
		//---------------------------
		public function count_nongsan(){
			$conn;
			$p = new ketnoi();
			if($p -> moketnoi($conn)){
				$string = "SELECT count(*) FROM nongsan";
				$table = mysqli_query($conn,$string);
				$p -> dongketnoi($conn);
				//
				return $table;
			}else{
				return false;
			}
		}
		//---/THỐNG KÊ
		//
		//
		//
		//---------------------------
		//---------------------------
		//---------------------------
		//---------------------------
		//-----LẤY TẤT CẢ NÔNG SẢN 
		//---------------------------
		//---------------------------
		//---------------------------
		public function select_nongsan(){
			$conn;
			$p = new ketnoi();
			if($p -> moketnoi($conn)){
				$string = "SELECT * FROM nongsan";
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
		//-----LẤY TẤT CẢ NÔNG SẢN ADMIN
		//---------------------------
		//---------------------------
		//---------------------------
		public function select_nongsan_dang_ban(){
			$conn;
			$p = new ketnoi();
			if($p -> moketnoi($conn)){
				$string = "SELECT * FROM loainongsan JOIN nongsan ON loainongsan.MaLoaiNongSan = nongsan.MaLoaiNongSan";
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
		//-----LẤY THÔNG TIN CHI TIẾT NÔNG SẢN THEO MÃ NÔNG SẢN
		//---------------------------
		//---------------------------
		//---------------------------
		public function select_nongsan_by_id($manongsan){
			$conn;
			$p = new ketnoi();
			if($p -> moketnoi($conn)){
				$string = "SELECT * FROM tinhthanh JOIN huyenquan ON tinhthanh.MaTinh = huyenquan.MaTinh JOIN xaphuong ON huyenquan.MaHuyen = xaphuong.MaHuyen JOIN nhacungcapnongsan on xaphuong.MaXa = nhacungcapnongsan.MaXa  JOIN nongsan ON nhacungcapnongsan.MaNCC = nongsan.MaNCC JOIN loainongsan ON nongsan.MaLoaiNongSan = loainongsan.MaLoaiNongSan JOIN nhomnongsan ON loainongsan.MaNhomNongSan = nhomnongsan.MaNhomNongSan WHERE MaNongSan =".$manongsan;
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
		//-----LẤY NÔNG SẢN THEO NHÀ CUNG CẤP - CÓ TRẠNG THÁI KIỂM ĐỊNH CHƯA ĐẠT CHUẨN HOẶC CHƯA KIỂM
		//---------------------------
		//---------------------------
		//---------------------------
		public function select_nongsan_by_ncc($mancc){
			$conn;
			$p = new ketnoi();
			if($p -> moketnoi($conn)){
				$string = "SELECT * FROM nongsan WHERE MaNCC =".$mancc." && TrangThaiKiemDinh IN (1,2,3)" ;
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
		//-----LẤY NÔNG SẢN THEO NHÀ CUNG CẤP - CÓ TRẠNG THÁI KIỂM ĐỊNH ĐẠT CHUẨN
		//---------------------------
		//---------------------------
		//---------------------------
		public function select_nongsan_by_ncc_dc($mancc){
			$conn;
			$p = new ketnoi();
			if($p -> moketnoi($conn)){
				$string = "SELECT * FROM nongsan JOIN qrcode ON nongsan.MaNongSan = qrcode.MaNongSan WHERE MaNCC =".$mancc." && TrangThaiKiemDinh IN (0)" ;
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
		//-----INSERT NÔNG SẢN MỚI
		//---------------------------
		//---------------------------
		//---------------------------
		public function insert_nongsan($tenns,$soluong,$gia,$dvt,$mota,$hinhanh,$maloains,$mancc){
			$conn;
			$p = new ketnoi();
			if($p -> moketnoi($conn)){
				$string = "INSERT INTO nongsan(TenNongSan,SoLuong,Gia,DVT,MoTaNS,HinhAnh,MaLoaiNongSan,MaNCC) VALUES ('".$tenns."',".$soluong.",".$gia.",'".$dvt."','".$mota."','".$hinhanh."',".$maloains.",".$mancc.")";
				//echo $string;
				$kq = mysqli_query($conn,$string);
				$p -> dongketnoi($conn);
				return $kq;
			}else{
				return false;
			}
		}
		//---------------------------
		//---------------------------
		//---------------------------
		//---------------------------
		//-----CẬP NHẬT NÔNG SẢN 
		//---------------------------
		//---------------------------
		//---------------------------
		public function update_nongsan($manongsan,$tenns,$soluong,$gia,$dvt,$mota,$hinhanh){
			$conn;
			$p = new ketnoi();
			if($p -> moketnoi($conn)){
				if ($hinhanh != "") {
					$string = "UPDATE nongsan SET TenNongSan ='".$tenns."', SoLuong =".$soluong.", Gia = ".$gia.",DVT = '".$dvt."',MoTaNS = '".$mota."', HinhAnh = '".$hinhanh."' WHERE MaNongSan = ".$manongsan;	
				}else{
					$string = "UPDATE nongsan SET TenNongSan ='".$tenns."', SoLuong =".$soluong.", Gia = ".$gia.",DVT = '".$dvt."',MoTaNS = '".$mota."' WHERE MaNongSan = ".$manongsan;
				}
				
				//echo $string;
				$kq = mysqli_query($conn,$string);
				$p -> dongketnoi($conn);
				return $kq;
			}else{
				return false;
			}
		}
		//---------------------------
		//---------------------------
		//---------------------------
		//---------------------------
		//-----GỬI YÊU CẦU ĐĂNG BÁN CHO ADMIN XỬ LÝ 
		//Trạng thái nông sản GỒM
		//-	0: Chờ duyệt tin
		//-	1: Đã duyệt
		//-	2: Đang khóa
		//-	3. Chưa đăng tin (mặc định)
		//--> ĐĂNG BÁN NÔNG SẢN CẬP NHẬT CỘT TTNS sang trạng thái 0
		//---------------------------
		//---------------------------
		//---------------------------
		public function dangban_nongsan($manongsan,$tt){
			$conn;
			$p = new ketnoi();
			if($p -> moketnoi($conn)){
				if($tt == 0){
					$string = "UPDATE nongsan SET TrangThaiNongSan = 0 WHERE MaNongSan = ".$manongsan;
				}elseif ($tt == 3) {
					$string = "UPDATE nongsan SET TrangThaiNongSan = 3 WHERE MaNongSan = ".$manongsan;
				}
				//echo $string;
				$kq = mysqli_query($conn,$string);
				$p -> dongketnoi($conn);
				return $kq;
			}else{
				return false;
			}
		}
		//---------------------------
		//---------------------------
		//---------------------------
		//---------------------------
		//-----DUYỆT BÀI ĐĂNG BÁN NÔNG SẢN 
		//Trạng thái nông sản GỒM
		//-	0: Chờ duyệt tin
		//-	1: Đã duyệt
		//-	2: Đang khóa
		//-	3. Chưa đăng tin (mặc định)
		//--> DUYỆT BÀI ĐĂNG SẼ CẬP NHẬT TRẠNG THÁI THÀNH 1
		//--> KHÓA BÀI ĐĂNG SẼ CẬP NHẬT TRẠNG THÁI THÀNH 2
		//---------------------------
		//---------------------------
		//---------------------------
		public function capnhat_trangthai_nongsan($manongsan,$tt){
			$conn;
			$p = new ketnoi();
			if($p -> moketnoi($conn)){
				if($tt == 1){
					$string = "UPDATE nongsan SET TrangThaiNongSan = 1 WHERE MaNongSan = ".$manongsan;
				}elseif ($tt == 2) {
					$string = "UPDATE nongsan SET TrangThaiNongSan = 2 WHERE MaNongSan = ".$manongsan;
				}
				echo $string;
				$kq = mysqli_query($conn,$string);
				$p -> dongketnoi($conn);
				return $kq;
			}else{
				return false;
			}
		}
	}


 ?>