<?php 

	include_once("Model/connect.php");

	class mNongSan{
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
		//phân trang
		function select_nongsan_phantrang($start,$limit){
			$conn;
			$p = new ketnoi();
			if($p -> moketnoi($conn)){
				$string = "SELECT * FROM nongsan JOIN qrcode ON nongsan.MaNongSan = qrcode.MaNongSan ORDER BY nongsan.MaNongSan ASC LIMIT $start, $limit";
				$table = mysqli_query($conn,$string);
				//var_dump($table);
				$p -> dongketnoi($conn);
				return $table;
			}else{
				return false;
			}
		}
		//
		//
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
		//
		//
		//---------------------------
		//---------------------------
		//---------------------------
		//---------------------------
		//-----LẤY THÔNG TIN CHI TIẾT NÔNG SẢN THEO MÃ NÔNG SẢN ĐẠT CHUẨN
		//---------------------------
		//---------------------------
		//---------------------------
		public function select_nongsan_by_id_dc($manongsan){
			$conn;
			$p = new ketnoi();
			if($p -> moketnoi($conn)){
				$string = "SELECT * FROM tinhthanh JOIN huyenquan ON tinhthanh.MaTinh = huyenquan.MaTinh JOIN xaphuong ON huyenquan.MaHuyen = xaphuong.MaHuyen JOIN nhacungcapnongsan on xaphuong.MaXa = nhacungcapnongsan.MaXa JOIN nongsan ON nhacungcapnongsan.MaNCC = nongsan.MaNCC JOIN phieukiemdinhnongsan ON nongsan.MaNongSan = phieukiemdinhnongsan.MaNongSan JOIN qrcode ON nongsan.MaNongSan = qrcode.MaNongSan JOIN loainongsan ON nongsan.MaLoaiNongSan = loainongsan.MaLoaiNongSan JOIN nhomnongsan ON loainongsan.MaNhomNongSan = nhomnongsan.MaNhomNongSan WHERE nongsan.MaNongSan =".$manongsan;
				//echo $string;
				$table = mysqli_query($conn,$string);
				$p -> dongketnoi($conn);
				//
				return $table;
			}else{
				return false;
			}
		}
		//
		//
		//---------------------------
		//---------------------------
		//---------------------------
		//---------------------------
		//-----LẤY THÔNG TIN CHI TIẾT NÔNG SẢN KHÁCH HÀNG ĐẶT MUA
		//---------------------------
		//---------------------------
		//---------------------------
		public function select_dathang_nongsan($manongsan){
			$conn;
			$p = new ketnoi();
			if($p -> moketnoi($conn)){
				$string = "SELECT * FROM tinhthanh JOIN huyenquan ON tinhthanh.MaTinh = huyenquan.MaTinh JOIN xaphuong ON huyenquan.MaHuyen = xaphuong.MaHuyen JOIN nhacungcapnongsan on xaphuong.MaXa = nhacungcapnongsan.MaXa JOIN nongsan ON nhacungcapnongsan.MaNCC = nongsan.MaNCC JOIN phieukiemdinhnongsan ON nongsan.MaNongSan = phieukiemdinhnongsan.MaNongSan JOIN qrcode ON nongsan.MaNongSan = qrcode.MaNongSan JOIN loainongsan ON nongsan.MaLoaiNongSan = loainongsan.MaLoaiNongSan JOIN nhomnongsan ON loainongsan.MaNhomNongSan = nhomnongsan.MaNhomNongSan WHERE nongsan.TrangThaiNongSan = 1 AND nongsan.MaNongSan =".$manongsan;
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
		// 
		// 
		// TEST PHÂN TRANG
		// Hàm đếm tổng số thành viên
		public function count_all_ns()
		{
		    $conn;
		    $p = new ketnoi();
			if($p -> moketnoi($conn)){
				$string = "SELECT count(*) AS total FROM nongsan WHERE TrangThaiNongSan = 1";
				//echo $string;
				$kq = mysqli_query($conn,$string);
				if($kq){
					$row = mysqli_fetch_array($kq, MYSQLI_ASSOC);
					$p -> dongketnoi($conn);
					return $row['total'];
				}else{
					return 0;
				}
			}else{
				return false;
			}
		}
		 
		// Lấy danh sách thành viên
		public function get_all_ns($limit, $start)
		{
		    $conn;
		    $p = new ketnoi();
			if($p -> moketnoi($conn)){
				$string = 'SELECT nongsan.MaNongSan,nongsan.TenNongSan,nongsan.SoLuong,nongsan.Gia,nongsan.DVT,nongsan.MoTaNS,nongsan.HinhAnh,nhacungcapnongsan.MaNCC,nhacungcapnongsan.TenNhaCungCap,nongsan.TrangThaiNongSan,nongsan.TrangThaiKiemDinh FROM nongsan JOIN nhacungcapnongsan ON nongsan.MaNCC = nhacungcapnongsan.MaNCC WHERE nongsan.TrangThaiNongSan = 1 LIMIT '.(int)$start . ','.(int)$limit;
				//echo $string;
				$result = array();
				$kq = mysqli_query($conn,$string);
				if($kq){
					while ($row = mysqli_fetch_array($kq, MYSQLI_ASSOC)){
           	 			$result[] = $row;
        			}
				}
			}
			//var_dump($result);
			return $result;
		}
		// 
		// 
		// 
	}


 ?>