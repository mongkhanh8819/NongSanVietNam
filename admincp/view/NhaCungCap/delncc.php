<?php
include_once("controller/NhaCungCap/cNCC.php");
	if(isset($_REQUEST['MaNCC'])){
		$MaNCC = $_REQUEST['MaNCC'];
		$p = new cNCC();
		$table = $p -> delete_nhacungcap($MaNCC);
		//
		if($table){
        
            echo "<script>alert('Xóa thành công');</script>";
            echo "<script>window.location.href='?qlncc'</script>";
		}else{
            echo "<script>alert('Xóa không thành công');</script>";
            echo "<script>window.location.href='?qlncc'</script>";
		}	
	}
?>    