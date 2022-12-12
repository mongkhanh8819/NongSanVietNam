<?php
include_once("Controller/NhomNongSan/cnhomnongsan.php");
	if(isset($_REQUEST['MaNhomNongSan'])){
		$MaNhomNongSan = $_REQUEST['MaNhomNongSan'];
		$p = new cNhomNS();
		$table = $p -> delete_nhomnongsan($MaNhomNongSan);
		//
		if($table){
        
            echo "<script>alert('Xóa thành công');</script>";
            echo "<script>window.location.href='?quanlinhomnongsan'</script>";
		}else{
            echo "<script>alert('Xóa không thành công');</script>";
            echo "<script>window.location.href='?quanlinhomnongsan'</script>";
		}	
	}
?>    