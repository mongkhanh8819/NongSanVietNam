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
		//-----LẤY NÔNG SẢN THEO NHÀ CUNG CẤP (CHƯA LÀM)
		//---------------------------
		//---------------------------
		//---------------------------
		public function select_nongsan_by_ncc($mancc){
			$conn;
			$p = new ketnoi();
			if($p -> moketnoi($conn)){
				$string = "SELECT * FROM nongsan WHERE MaNCC =".$mancc;
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