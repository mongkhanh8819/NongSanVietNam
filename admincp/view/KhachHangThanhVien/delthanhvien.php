<?php
include_once("controller/KhachHangThanhVien/cthanhvien.php");


	if(isset($_REQUEST['MaKHTV'])){
		$MaKHTV = $_REQUEST['MaKHTV'];
		$p = new cKHTV();
		$table = $p -> delete_khachhangthanhvien($MaKHTV);
		//
		if($table){
        
            echo "<script>alert('Xóa thành công');</script>";
            echo "<script>window.location.href='?qlkhtv'</script>";
		}else{
            echo "<script>alert('Xóa không thành công');</script>";
            echo "<script>window.location.href='?qlkhtv'</script>";
		}	
	}
?>    