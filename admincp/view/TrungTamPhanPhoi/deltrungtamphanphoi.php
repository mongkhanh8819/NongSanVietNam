<?php
include_once("Controller/TrungTamPhanPhoi/ctrungtamphanphoi.php");
	if(isset($_REQUEST['MaTrungTamPP'])){
		$MaTrungTamPP = $_REQUEST['MaTrungTamPP'];
		$p = new cTTPP();
		$table = $p -> delete_trungtamphanphoi($MaTrungTamPP);
		//
		if($table){
        
            echo "<script>alert('Xóa thành công');</script>";
            echo "<script>window.location.href='?qlttpp'</script>";
		}else{
            echo "<script>alert('Xóa không thành công');</script>";
            echo "<script>window.location.href='?qlttpp'</script>";
		}	
	}
?>    