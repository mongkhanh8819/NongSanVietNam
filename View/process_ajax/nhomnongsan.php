<?php 
	include_once("../../config/config.php");
	$conn = mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);
	//set charset utf8
	mysqli_set_charset($conn,'utf8');
	$sql = "SELECT * FROM nhomnongsan";
	//query
	//echo $_POST['tinh'];
	$option_nns = mysqli_query($conn,$sql) or die( mysqli_error($conn));

	mysqli_close($conn);
	while($row = mysqli_fetch_array($option_nns,MYSQLI_ASSOC)) {
		echo "<option value=".$row['MaNhomNongSan'].">".$row['TenNhomNongSan']."</option>";
	}
 ?>