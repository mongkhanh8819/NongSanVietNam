<?php 

	require_once("../database.php");
    $data = array();
    $query = "SELECT MONTH(ThoiGianLap) AS Thang,COUNT(*) AS SoPhieuKD FROM phieukiemdinhnongsan GROUP BY MONTH(ThoiGianLap)";
    //echo $query;
    $ketqua = mysqli_query($conn,$query);
    while($row = mysqli_fetch_array($ketqua)){
        $id1 = "Tháng ".$row['Thang'];
        $id2 = $row['SoPhieuKD'];
        $data[] = array('Thang'=>$id1,'SoPhieuKD'=>$id2);
    }
    
    //echo 1;
    header('Content-Type: application/json; charset=UTF-8');
    echo json_encode($data);

 ?>