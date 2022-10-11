<?php 
	include_once("Controller/NhanVienPhanPhoi/cNhanVienPhanPhoi.php");

	$p = new cNhanVienPhanPhoi();

	$tt = $p -> get_nvpp_by_id($_SESSION['MaNVPP']);
	//var_dump($tt);
 ?>
<div class="col-md-10">
	<div class="row">
		<div class="col-md-4">
			<table>
			<tr><td><h4>THÔNG TIN NHÂN VIÊN PHÂN PHỐI</h4></td></tr>
			<?php if($tt){
				while ($row = mysqli_fetch_array($tt)) {
					?>
                  	<!-- <tr>
                    <td><img src="assets/uploads/avatar/<?php //echo $row['HinhAnh']; ?>" width='160px' alt=""></td></tr> -->
                    <tr>
                    <td>Tên nhân viên phân phối - <b><?php echo $row['TenNVPP'];?></b></td></tr>
                    <tr>
                    <td>Số điện thoại - <b><?php echo $row['SDT'];?></b></td></tr>
                    <tr>
                    <td>Địa chỉ nhà - <b><?php echo $row['DiaChi'];?></b></td></tr>
                    <tr>
                    <tr>
                    <td>Xã/Phường - <b><?php echo $row['TenXa'];?></b></td></tr>
                    <tr>
                    <tr>
                    <td>Huyện/Quận - <b><?php echo $row['TenHuyen'];?></b></td></tr>
                    <tr>
                    <tr>
                    <td>Tỉnh/Thành - <b><?php echo $row['TenTinh'];?></b></td></tr>
                    <tr>	
                    <td>Ngày sinh - <b><?php echo $row['NgaySinh'];?></b></td></tr>
                    <tr><td>Email - <b><?php echo $row['Email'];?></b></td></tr>
                    <tr>
                    <td><b><a href="">Chỉnh sửa thông tin</a></td><br></tr>
                    <!-- </div> -->
                
			</table>
		</div>
		<div class="col-md-8"><br>
			<h4>THÔNG TIN TRUNG TÂM PHÂN PHỐI</h4>
			<table>
				<tr>
					<td>Tên trung tâm phân phối - <b><?php echo $row['TenTrungTam']; ?></b></td>
				</tr>
				<tr>
					<td>Địa chỉ - <b><?php echo $row['DiaChi']; ?></b></td>
				</tr>
				<tr>
					<td>Chức năng - <b><?php echo $row['ChucNang']; ?></b></td>
				</tr>	
			</table>
			<?php
				}
			} ?>
		</div>
	</div>
</div>
<!--  -->

<!--  -->
<!-- END DIV ROW -->
</div>