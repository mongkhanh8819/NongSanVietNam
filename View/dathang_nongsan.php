<!-- Main Sidebar Container -->
  <!-- <aside class="main-sidebar"> -->
<?php 

	if (isset($_SESSION['MaKHTV'])) {
		include_once("Controller/KhachHangThanhVien/cKhachHangThanhVien.php");
		$tv = new cKhachHangThanhVien();
	} elseif (isset($_SESSION['MaDN'])) {
		include_once("Controller/KhachHangDoanhNghiep/cKhachHangDoanhNghiep.php");
		$dn = new cKhachHangDoanhNghiep();
	}
	
	include_once("Controller/NongSan/cNongSan.php");
	include_once("Controller/DonHang/cHoaDon.php");
	include_once("Controller/DonHang/cChiTietHoaDon.php");
	include("Controller/CLASS/clsMailer.php");
 
	//echo $_REQUEST['manongsan'];
	$p = new cNongSan();
	$hd = new cHoaDon();
	$ct = new cChiTietHoaDon();
	$mail = new cPHPMailer();

	$ttns = $p -> select_dathang_nongsan($_REQUEST['manongsan']);
	if(mysqli_num_rows($ttns)>0){
	}else{
		echo "<script>window.location.href='index.php';</script>";
	}
	
 ?>
<br>
<br>
<div class="row">
    <!-- Sidebar -->
    <div class="col-md-1"></div>
    <!-- /.sidebar -->
  	<div class="col-md-10">
  		<div class="container">
					<form action="" method="post" id="cartformpage">
				<div class="cart-index">
				<h2>Chi tiết đơn mua nông sản</h2>
					<div class="row tbody text-center">
						<div class="col-xs-12 col-12 col-sm-12 col-md-8 col-lg-8">

							<table class="table table-list-product">

								<thead>
									<tr style="background: #f3f3f3;">
										<th>Hình ảnh</th>
										<th>Tên sản phẩm</th>
										<th class="text-center">Đơn giá</th>
										<th class="text-center">Số lượng</th>
										<th class="text-center">Đơn vị tính</th>
										<th class="text-center">Thành tiền</th>
									</tr>
								</thead>
								<tbody>
									<?php 

										$ttns = $p -> select_dathang_nongsan($_REQUEST['manongsan']);
										if ($ttns) {
											while ($row = mysqli_fetch_array($ttns)) {
									
									 ?>
										<tr>
											<td class="img-product-cart">
												<a href="index.php?mans=<?php echo $row['MaNongSan'] ?>">
													<img src="assets/uploads/images/<?php echo $row['HinhAnh'] ?>" width='200px' height='200px'>
												</a>
											</td>
											<td>
												<a href="index.php?mans=<?php echo $row['MaNongSan'] ?>" class="pull-left"><?php echo $row['TenNongSan'] ?></a>
											</td>
											<td>
												<span class="amount">
													<?php 
													$dongia = $row['Gia'] / $row['SoLuong'];
													echo number_format($dongia, 0, ',', '.')." VNĐ"
													//echo $dongia; ?>
												</span>
												<span style="display:none" id="dongia"><?php echo $dongia ?></span>
											</td>
											<td>
												<div class="quantity clearfix">
													<input name="quantity" id="quantity" class="form-control" type="number" value="<?php echo $row['SoLuong'] ?>" min="1" max="<?php echo $row['SoLuong'] ?>" onchange="myFunction()">
												</div>
											</td>
											<td>
												<?php echo $row['DVT'] ?>
											</td>
											<td>
												<span class="amount thanhtien" id="thanhtien">
														<?php echo number_format($row['Gia'], 0, ',', '.')." VNĐ"; ?>
												</span>
											</td>
											<!-- <td>
												<a class="remove" title="Xóa" onclick="onRemoveProduct(27)"><i class="fas fa-trash-alt"></i></a>
											</td> -->
										</tr>
								</tbody>
							</table>
							<button class="btn"> <a href="index.php">Tiếp tục mua hàng</a></button>
						</div>
																				
						<div class="col-xs-12 col-sm-12 col-md-4">
							<div class="clearfix btn-submit">
								<!-- <table class="table total-price" style="border: 1px solid #ececec;"> -->
									<table class="table total-price" style="border: 1px solid #ececec;">
									<tbody>
										<tr style="background: #f4f4f4;">
											<td>Tổng tiền</td>
											<td><strong class="thanhtien"><?php echo number_format($row['Gia'], 0, ',', '.')." VNĐ"; ?></strong></td>
										</tr>
										<tr>
											<td colspan="2"><h5>Mã QR truy xuất nguồn gốc</h5></td>
										</tr>
										<tr>
											<td colspan="2">
												<img src="assets/public/qr_images/<?php echo $row['QR_Image'] ?>" alt="QR CODE" width="200px" height="200px">
											</td>
										</tr>
										<!-- GIÁ TRỊ TRUYỀN ĐI -->
										<tr style="display:none"><td>
											<input type="text" name="diachi" value="<?php if(isset($_SESSION['MaDN'])){
												echo 1;
											}elseif(isset($_SESSION['MaKHTV'])){
												echo "cc";
											} ?>">
											<input type="text" name="mancc" value="<?php echo $row['MaNCC'] ?>">
											<input type="text" name="makh" value="<?php if(isset($_SESSION['MaDN'])){
												echo $_SESSION['MaDN'];
											}elseif(isset($_SESSION['MaKHTV'])){
												echo $_SESSION['MaKHTV'];
											}else{
												echo "KVL";
											} ?>">
											<input type="text" name="id" value="<?php echo $row['MaNongSan'] ?>">
											<input type="text" name="soluong" class="soluong" value="<?php echo $row['SoLuong'] ?>">
											<input type="text" name="DVT" value="<?php echo $row['DVT'] ?>">
											<input type="text" name="dongia" value="<?php echo $row['Gia']/$row['SoLuong'] ?>">
											<input type="text" name="tongtien" class="tongtien" value="<?php echo $row['Gia'] ?>">
										</td>
										</tr>
										<?php 

											// xử lý lấy địa chỉ
												
											//


										 ?>
										<tr>
											<td style="display:none;"><?php if(isset($_SESSION['MaDN'])){
												$diachidn = $dn -> get_khdn_by_id($_SESSION['MaDN']);
												while ($row1 = mysqli_fetch_array($diachidn)) {
													$diachi = $row1['TenXa'].", ".$row1['TenHuyen'].", ".$row1['TenTinh'];
												}
												echo $diachi;
											} elseif(isset($_SESSION['MaKHTV'])){
												if(isset($_SESSION['xa'])){
													echo "CHƯA CÓ ĐỊA CHỈ";
												}elseif (!isset($_SESSION['xa'])) {
													$diachitv = $tv -> get_khtv_by_id($_SESSION['MaKHTV']);
													while ($row1 = mysqli_fetch_array($diachitv)) {
														$diachi = $row1['TenXa'].", ".$row1['TenHuyen'].", ".$row1['TenTinh'];
													}
													echo $diachi;
												}
												
											} ?></td>
											<td style="display:none;"><?php echo $row['MaNCC'] ?></td>
											<td style="display:none;"><?php if(isset($_SESSION['MaDN'])){
												echo $_SESSION['MaDN'];
											}elseif(isset($_SESSION['MaKHTV'])){
												echo $_SESSION['MaKHTV'];
											}else{
												echo "KVL";
											} ?></td>
											<td style="display:none;"><?php echo $row['MaNongSan'] ?></td>
											<td id="soluong" style="display:none;"><?php echo $row['SoLuong'] ?></td>
											<td style="display:none;"><?php echo $row['DVT'] ?></td>
											<td style="display:none;" id="dongia"><?php echo $row['Gia']/$row['SoLuong']; ?></td>
											<td id="tongtien" style="display:none;"><?php echo $row['Gia'] ?></td>
											<td style="display:none"><?php echo $row['EmailNCC'] ?></td>
											<td style="display:none"><?php echo $row['TenNhaCungCap'] ?></td>
											<td colspan="2">
												<button type="button" class="btn-next-checkout deletebtn">Đặt hàng</button>
											</td>
										</tr>
									</tbody>
								<!-- </div> -->
								</table>

							</div>
						</div>
					</div>
				<?php }} ?>
				</div>

			</form>
					</div>
  	</div>
  	<div class="col-md-1"></div>
  <!-- /.container-fluid -->
 </div>
<!-- /.content -->
<!-- modal -->
<div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                      aria-hidden="true">
                      <div class="modal-dialog" role="document">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Xác nhận tạo đơn đặt hàng</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                              </div>

                              <form action="" method="POST">

                                  <div class="modal-body">

                                    <input type="text" class="form-control" name="diachi" id="diachi"  value="" readonly>
                                    <input type="text" class="form-control" name="mancc" id="mancc"  value="" readonly>
                                    <input type="text" class="form-control" name="makh" id="makh"  value="" readonly>
                                    <input type="text" class="form-control" name="mans" id="mans"  value="" readonly>
                                    <input type="text" class="form-control" name="sl" id="sl"  value="" readonly>
                                    <input type="text" class="form-control" name="dvt" id="dvt"  value="" readonly>
                                    <input type="text" class="form-control" name="dongia" id="don_gia"  value="" readonly>
                                    <input type="text" class="form-control" name="tonghoadon" id="tonghoadon"  value="" readonly>
                                    <input type="text" class="form-control" name="emailncc" id="emailncc"  value="" readonly>                                     
                                    <input type="text" class="form-control" name="tenncc" id="tenncc"  value="" readonly> 
                                      <h4></h4>
                                  </div>
                                  <div>
                                  	
                                  </div>
                                  <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal"> CLOSE </button>
                                      <button type="submit" name="submit" class="btn btn-primary">XÁC NHẬN</button>
                                  </div>
                              </form>

                          </div>
                      </div>
                  </div>
<!--  -->
<?php 

	if (isset($_REQUEST['submit'])) {

		$diachi = $_REQUEST['diachi'];
		$makh = $_REQUEST['makh'];
		$mancc = $_REQUEST['mancc'];
		$mans = $_REQUEST['mans'];
		$sl = $_REQUEST['sl'];
		$dvt = $_REQUEST['dvt'];
		$dongia = $_REQUEST['dongia'];
		$tonghoadon = $_REQUEST['tonghoadon'];
		$to = $_REQUEST['emailncc'];
		$name = $_REQUEST['tenncc'];
		$subject = "Thông báo đơn đặt hàng mới";
		$body = "Có đơn đặt hàng của sản phẩm ".$mans;
		// echo $diachi."<br>";
		// echo $makh."<br>";
		// echo $mancc."<br>";
		// echo $mans."<br>";
		// echo $sl."<br>";
		// echo $dvt."<br>";
		// echo $dongia."<br>";
		// echo $tonghoadon."<br>";


		$order = $hd -> add_hoadon($diachi,$tonghoadon,$mancc,$makh);//gọi hàm thêm hóa đơn
		if($order == 1){
			$order_detail = $ct -> add_cthoadon($mans,$dongia,$sl,$dvt);//gọi hàm thêm chi tiết hóa đơn
			//echo "<script>alert('Đặt hàng thành công')</script>";
			if ($order_detail == 1) {
				$send = $mail -> send_mail($to,$name,$subject,$body); //gọi hàm gửi email
				echo "<script>alert('Đặt hàng thành công')</script>";
			} else {
				echo "<script>alert('Đặt hàng thất bại')</script>";
			}
			
		}else{
			echo "<script>alert('Đặt hàng thất bại')</script>";
		}
	}

 ?>
<script>
        $(document).ready(function () {

            $('.deletebtn').on('click', function () {

                $('#deletemodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#diachi').val(data[0]);
                $('#mancc').val(data[1]);
                $('#makh').val(data[2]);
                $('#mans').val(data[3]);
                $('#sl').val(data[4]);
                $('#dvt').val(data[5]);
                $('#don_gia').val(data[6]);
                $('#tonghoadon').val(data[7]);
                $('#emailncc').val(data[8]);
                $('#tenncc').val(data[9]);
                //alert(data[0]);
            });
        });
</script>
<script>
	function myFunction(){

		let dongia = $('#dongia').text();
		//alert(dongia);
		let soluong = $('#quantity').val();
		var thanhtien = dongia * soluong;
		// alert(soluong);
		// alert(dongia);
		//tt = thanhtien.replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.");
    $(".thanhtien").text(formatNumber(thanhtien, ',', '.') + ' VNĐ');
    $(".tongtien").val(thanhtien);
    $("#tongtien").text(thanhtien);
    $("#dongia").text(dongia);
    //alert($("#don_gia").text(dongia));
    $(".soluong").val(soluong);
    $("#soluong").text(soluong);
    

  }
   function formatNumber(nStr, decSeperate, groupSeperate) {
            nStr += '';
            x = nStr.split(decSeperate);
            x1 = x[0];
            x2 = x.length > 1 ? '.' + x[1] : '';
            var rgx = /(\d+)(\d{3})/;
            while (rgx.test(x1)) {
                x1 = x1.replace(rgx, '$1' + groupSeperate + '$2');
            }
            return x1 + x2;
        }
</script>