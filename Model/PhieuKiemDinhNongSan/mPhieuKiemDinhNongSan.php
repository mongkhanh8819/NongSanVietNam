<?php 

	include_once("Model/connect.php");

	class mPhieuKiemDinhNongSan{
		//---------------------------
		//---------------------------
		//---------------------------
		//---------------------------
		//-----LẤY DANH SÁCH PHIẾU KIỂM ĐỊNH CỦA NHÀ CUNG CẤP GỬI 
		//---------------------------
		//---------------------------
		//---------------------------
		public function select_phieukiemdinh($mancc){
			$conn;
			$p = new ketnoi();
			if($p -> moketnoi($conn)){
				$string = "SELECT * FROM nhanvienphanphoi JOIN phieukiemdinhnongsan ON nhanvienphanphoi.MaNVPP = phieukiemdinhnongsan.MaNVPP JOIN nongsan ON phieukiemdinhnongsan.MaNongSan = nongsan.MaNongSan WHERE phieukiemdinhnongsan.MaNCC = ".$mancc;
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
		//-----LẤY DANH SÁCH PHIẾU KIỂM ĐỊNH ĐÃ NHẬN CỦA NVPP 
		//---------------------------
		//---------------------------
		//---------------------------
		public function select_phieukiemdinh_by_nvpp($manvpp){
			$conn;
			$p = new ketnoi();
			if($p -> moketnoi($conn)){
				$string = "SELECT * FROM nhanvienphanphoi JOIN phieukiemdinhnongsan ON nhanvienphanphoi.MaNVPP = phieukiemdinhnongsan.MaNVPP JOIN nongsan ON phieukiemdinhnongsan.MaNongSan = nongsan.MaNongSan JOIN nhacungcapnongsan ON nongsan.MaNCC = nhacungcapnongsan.MaNCC WHERE nhanvienphanphoi.MaNVPP = '".$manvpp."'";
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
		//-----INSERT PHIẾU KIỂM ĐỊNH NÔNG SẢN 
		//---------------------------
		//---------------------------
		//---------------------------
		public function insert_phieukiemdinh($diachi, $danhgiancc, $manvpp, $mancc, $manongsan){
			$conn;
			$p = new ketnoi();
			if($p -> moketnoi($conn)){
				$string = "INSERT INTO phieukiemdinhnongsan(DiaChi, DanhGiaTuNCC, MaNVPP, MaNCC, MaNongSan) VALUES ('".$diachi."','".$danhgiancc."','".$manvpp."',".$mancc.",".$manongsan.")";
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
		//-----DUYỆT PHIẾU KIỂM ĐỊNH NÔNG SẢN 
		//---------------------------
		//---------------------------
		//---------------------------
		public function update_phieukiemdinh($maphieu, $thongso, $danhgianvpp, $ketluan, $manongsan){
			$conn;
			$p = new ketnoi();
			if($p -> moketnoi($conn)){
				$string = "UPDATE phieukiemdinhnongsan SET MaNongSan = ".$manongsan.",ThoiGianCapNhat = NOW(), ThongSoKiemDinh = '".$thongso."', DanhGiaTuNVKD = '".$danhgianvpp."', TrangThaiKiemDinh = ".$ketluan." WHERE MaPhieuKiemDinh = ".$maphieu;
				//echo $string;
				$kq = mysqli_query($conn,$string);
				$p -> dongketnoi($conn);
				return $kq;
			}else{
				return false;
			}
		}
		
	}


 ?>