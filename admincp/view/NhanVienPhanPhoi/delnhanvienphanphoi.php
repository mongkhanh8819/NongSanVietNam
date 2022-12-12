<?php
    
    include_once("controller/NhanVienPhanPhoi/cnvphanphoi.php");
        if(isset($_REQUEST['MaNVPP'])){
            $MaNVPP = $_REQUEST['MaNVPP'];
            $p = new cNVPP();
            $table = $p -> delete_nhanvienphanphoi($MaNVPP);
            //
            if($table){
            
                echo "<script>alert('Xóa thành công');</script>";
                // echo "<script>window.location.href='?qlncc'</script>";
            }else{
                echo "<script>alert('Xóa không thành công');</script>";
                // echo "<script>window.location.href='?qlncc'</script>";
            }	
        }
        
?>