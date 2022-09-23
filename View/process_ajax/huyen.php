<?php 
	
	//include_once("../../Controller/CONTROLLER_AJAX/cDiaChi.php");
	//$huyen = new cDiaChi();
	//echo $_POST['id_tinh'];
	//$option_huyen = $huyen -> select_huyenquan($_POST['tinh']);
	//
	include_once("../../config/config.php");

	$conn = mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);
	//set charset utf8
	mysqli_set_charset($conn,'utf8');
	$sql = "SELECT * FROM huyenquan WHERE MaTinh  = ".$_POST['tinh'];
	//query
	//echo $_POST['tinh'];
	$option_huyen = mysqli_query($conn,$sql) or die( mysqli_error($conn));

	mysqli_close($conn);
	//echo "<option value="">--Chưa chọn Huyện/Quận--</option>";
	while($row1 = mysqli_fetch_assoc($option_huyen)) {
		echo "<option value=".$row1['MaHuyen'].">".$row1['TenHuyen']."</option>";
	}
 ?>