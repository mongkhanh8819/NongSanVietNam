<?php 
	
	include_once("../../config/config.php");

	$conn = mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);
	//set charset utf8
	mysqli_set_charset($conn,'utf8');
	$sql = "SELECT * FROM xaphuong WHERE MaHuyen  = ".$_POST['huyen'];
	//query
	//cho $_POST['tinh'];
	$option_xa = mysqli_query($conn,$sql) or die( mysqli_error($conn));

	mysqli_close($conn);
	//echo "<option value="">--Chưa chọn Xã/Phường--</option>";
	while($row2 = mysqli_fetch_assoc($option_xa)) {
		echo "<option value=".$row2['MaXa'].">".$row2['TenXa']."</option>";
	}
 ?>