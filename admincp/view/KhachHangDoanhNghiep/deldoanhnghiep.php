<?php
include_once("Controller/KhachHangDoanhNghiep/cDoanhNghiep.php");
	if(isset($_REQUEST['MaDN'])){
		$MaDN = $_REQUEST['MaDN'];
		$p = new cKHDN();
		$table = $p -> delete_khachhangdoanhnghiep($MaDN);
		//
		if($table){
        
            echo "<script>alert('Xóa thành công');</script>";
            echo "<script>window.location.href='?qlkhdn'</script>";
		}else{
            echo "<script>alert('Xóa không thành công');</script>";
            echo "<script>window.location.href='?qlkhdn'</script>";
		}	
	}
?>    