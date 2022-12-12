<?php 

	include_once("Model/connect.php");

	class mHoaDon{
		//---hàm select hóa đơn
		//---lấy danh sách hóa đơn theo mã nhà cung cấp
		//--------
		//--------
		//--------
		public function select_hoadon_dn($mancc){
			$conn;
			$p = new ketnoi();
			if($p -> moketnoi($conn)){
				$sql = "SELECT * FROM khachhangdoanhnghiep JOIN khachhang ON khachhangdoanhnghiep.MaDN = khachhang.MaKH JOIN hoadon ON khachhang.MaKH = hoadon.MaKH JOIN chitiethoadon ON hoadon.MaHoaDon = chitiethoadon.MaHoaDon JOIN nongsan ON chitiethoadon.MaNongSan = nongsan.MaNongSan WHERE hoadon.MaNCC = ".$mancc;
				$result = mysqli_query($conn,$sql);
				$p -> dongketnoi($conn);
				return $result;
			}else{
				return false;
			}
		}
		//---hàm select hóa đơn
		//---lấy danh sách hóa đơn theo mã khách hàng
		//--------
		//--------
		//--------
		public function select_hoadon_dn_by_makh($makh){
			$conn;
			$p = new ketnoi();
			if($p -> moketnoi($conn)){
				$sql = "SELECT * FROM khachhangdoanhnghiep JOIN khachhang ON khachhangdoanhnghiep.MaDN = khachhang.MaKH JOIN hoadon ON khachhang.MaKH = hoadon.MaKH JOIN chitiethoadon ON hoadon.MaHoaDon = chitiethoadon.MaHoaDon JOIN nongsan ON chitiethoadon.MaNongSan = nongsan.MaNongSan WHERE hoadon.MaKH = '".$makh."'";
				$result = mysqli_query($conn,$sql);
				$p -> dongketnoi($conn);
				return $result;
			}else{
				return false;
			}
		}
		//---hàm select hóa đơn
		//---lấy danh sách hóa đơn theo mã nhà cung cấp
		//--------
		//--------
		//--------
		public function select_hoadon_tv($mancc){
			$conn;
			$p = new ketnoi();
			if($p -> moketnoi($conn)){
				$sql = "SELECT * FROM khachhangthanhvien JOIN khachhang ON khachhangthanhvien.MaKHTV = khachhang.MaKH JOIN hoadon ON khachhang.MaKH = hoadon.MaKH JOIN chitiethoadon ON hoadon.MaHoaDon = chitiethoadon.MaHoaDon JOIN nongsan ON chitiethoadon.MaNongSan = nongsan.MaNongSan WHERE hoadon.MaNCC = ".$mancc;
				$result = mysqli_query($conn,$sql);
				$p -> dongketnoi($conn);
				return $result;
			}else{
				return false;
			}
		}
		//---hàm select hóa đơn
		//---lấy danh sách hóa đơn theo mã khách hàng
		//--------
		//--------
		//--------
		public function select_hoadon_tv_by_makh($makh){
			$conn;
			$p = new ketnoi();
			if($p -> moketnoi($conn)){
				$sql = "SELECT * FROM khachhangthanhvien JOIN khachhang ON khachhangthanhvien.MaKHTV = khachhang.MaKH JOIN hoadon ON khachhang.MaKH = hoadon.MaKH JOIN chitiethoadon ON hoadon.MaHoaDon = chitiethoadon.MaHoaDon JOIN nongsan ON chitiethoadon.MaNongSan = nongsan.MaNongSan WHERE hoadon.MaKH = '".$makh."'";
				$result = mysqli_query($conn,$sql);
				$p -> dongketnoi($conn);
				return $result;
			}else{
				return false;
			}
		}
		//hàm thêm hóa đơn
		public function insert_hoadon($diachi,$tonghoadon,$mancc,$makh){
			$conn;
			$p = new ketnoi();
			if($p -> moketnoi($conn)){
				$sql = "INSERT INTO hoadon(DiaChi, TongHoaDon, MaNCC, MaKH) VALUES ('".$diachi."','".$tonghoadon."',".$mancc.",'".$makh."')";
				$result = mysqli_query($conn,$sql);
				$p -> dongketnoi($conn);
				return $result;
			}else{
				return false;
			}
		}
		////----------
		//---------------
		//---------------------------
		//---------------------------
		//---------------------------
		//---------------------------
		//-----HÀM QUẢN LÝ CẬP NHẬT HÓA ĐƠN  (DUYỆT HÓA ĐƠN)
		//Trạng thái hóa đơn gồm
		//-	0: Chờ xác nhận (mặc định)
		//-	1: Đã xác nhận
		//-	2: Đã hoàn thành
		//-	3: Nhà cung cấp hủy đơn
		//-	4: Người mua hủy đơn
		//--> DUYỆT TRẠNG THÁI HÓA ĐƠN DO NGƯỜI BÁN THỰC HIỆN
		//---------------------------
		//---------------------------
		//---------------------------
		//---(BỔ SUNG THÊM BIẾN NGÀY CẬP NHẬT)
		public function update_tt_hoadon($mahoadon,$tt){
			$conn;
			$p = new ketnoi();
			if($p -> moketnoi($conn)){
				if ($tt == 1){
					$string = "UPDATE hoadon SET TrangThai = 1,NgayCapNhat = NOW() WHERE MaHoaDon = ".$mahoadon;
				} elseif ($tt == 2) {
					$string = "UPDATE hoadon SET TrangThai = 2,NgayCapNhat = NOW() WHERE MaHoaDon = ".$mahoadon;
				} elseif ($tt == 3) {
					$string = "UPDATE hoadon SET TrangThai = 3,NgayCapNhat = NOW() WHERE MaHoaDon = ".$mahoadon;
				} elseif ($tt == 4) {
					$string = "UPDATE hoadon SET TrangThai = 4,NgayCapNhat = NOW() WHERE MaHoaDon = ".$mahoadon;
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
	}
 ?>