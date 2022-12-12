<?php
include_once("Controller/LoaiNongSan/cloainongsan.php");
	if(isset($_REQUEST['MaLoaiNongSan'])){
		$MaLoaiNongSan = $_REQUEST['MaLoaiNongSan'];
		$p = new cLoaiNongSan();
		$table = $p -> delete_loainongsan($MaLoaiNongSan);
		//
		if($table){
        
            echo "<script>alert('Xóa thành công');</script>";
            echo "<script>window.location.href='?quanliloainongsan'</script>";
		}else{
            echo "<script>alert('Xóa không thành công');</script>";
            echo "<script>window.location.href='?quanliloainongsan'</script>";
		}	
	}
?>    