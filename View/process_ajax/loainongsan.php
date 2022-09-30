<?php 
	
	include_once("../../config/config.php");
	$conn = mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);
	//set charset utf8
	mysqli_set_charset($conn,'utf8');
	$sql = "SELECT * FROM loainongsan WHERE MaNhomNongSan  = ".$_POST['nhomns'];
	//query
	//echo $_POST['tinh'];
	$option_lns = mysqli_query($conn,$sql) or die( mysqli_error($conn));

	mysqli_close($conn);
	//echo "<option value="">--Chưa chọn Huyện/Quận--</option>";
	while($row1 = mysqli_fetch_assoc($option_lns)) {
		echo "<option value=".$row1['MaLoaiNongSan'].">".$row1['TenLoaiNongSan']."</option>";
	}
 ?>