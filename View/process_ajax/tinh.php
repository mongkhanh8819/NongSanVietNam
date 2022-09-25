<?php 
	$tinh = new cDiaChi();
	$option_tinh = $tinh -> select_tinhthanh();
	//
	while($row = mysqli_fetch_array($option_tinh,MYSQLI_ASSOC)) {
		echo "<option value=".$row['MaTinh'].">".$row['TenTinh']."</option>";
	}
 ?>