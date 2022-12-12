<?php 

	include_once("../Model/connect.php");

	class mPhieuKiemDinhNongSan{
		//---------------------------
		//---------------------------
		//---------------------------
		//---------------------------
		//-----LẤY DANH SÁCH PHIẾU KIỂM ĐỊNH THEO MÃ PHIẾU
		//---------------------------
		//---------------------------
		//---------------------------
		public function select_phieukiemdinh_by_maphieu($maphieu){
			$conn;
			$p = new ketnoi();
			if($p -> moketnoi($conn)){
				$string = "SELECT * FROM nhanvienphanphoi JOIN phieukiemdinhnongsan ON nhanvienphanphoi.MaNVPP = phieukiemdinhnongsan.MaNVPP JOIN nongsan ON phieukiemdinhnongsan.MaNongSan = nongsan.MaNongSan JOIN nhacungcapnongsan ON nongsan.MaNCC = nhacungcapnongsan.MaNCC WHERE phieukiemdinhnongsan.MaPhieuKiemDinh = '".$maphieu."'";
				//echo $string;
				$table = mysqli_query($conn,$string);
				$p -> dongketnoi($conn);
				//
				return $table;
			}else{
				return false;
			}
		}
		
	}


 ?>