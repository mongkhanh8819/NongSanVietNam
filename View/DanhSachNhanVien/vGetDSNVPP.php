<?php 

	include_once("Controller/NhanVienPhanPhoi/cNhanVienPhanPhoi.php");

	$p = new cNhanVienPhanPhoi();

	$table = $p -> select_nvpp();

?>
	<table>
	<tr>
		<th>Mã nhân viên phân phối</th>
		<th>Tên nhân viên phân phối</th>
	</tr>
<?php
	if($table){
		if(mysqli_num_rows($table) > 0){
			while($row = mysqli_fetch_assoc($table)) {
				echo "<tr>";
				echo "<td>".$row['MaNVPP']."</td>";
				echo "<td>".$row['TenNVPP']."</td>";
				echo "</tr>";
			}
		}
	}

 ?>
 	</table>