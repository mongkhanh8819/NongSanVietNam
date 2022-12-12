<?php 
	include_once("Controller/NongSan/cNongSan.php");
	$p = new cNongSan();
 ?>
<div class="row">
	<div class="col-md-2"></div>
	<!-- <div class="col-md-10"> -->
<div class="col-md-10">
    <!-- Content Header (Page header) -->
    <div class="row">
      <!-- <div class="col-md-12"> -->
        <!-- <div class="col-mb-10"> -->
          <div class="col-md-5">
            <h1><b>THÔNG TIN NÔNG SẢN</b></h1>
          </div>
          <div class="col-md-4">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="?truyxuat">Truy xuất nguồn gốc</a></li>
              <li class="breadcrumb-item active"><a href="">Thông tin nông sản</a></li>
            </ol>
          </div>
        <!-- </div> -->
      <!-- </div>/.container-fluid -->
    </div>
    <?php 
                  	
                  	$mans = $_REQUEST['mans'];
					$tt = $p -> get_nongsan_by_id_dc($mans);
                    if ($tt) {
    
                   ?>
                   <?php while($row = mysqli_fetch_array($tt)){  ?>
    <!-- Main content -->
    <!-- <div class="row"> -->
      <!-- <div class="container-fluid"> -->
        <div class="row">
          <div class="col-md-5">
          	<img class="img-fluid" src="assets/uploads/images/<?php echo $row['HinhAnh'] ?>" alt="">
          </div>
          <div class="col-md-4">
          	<div class="container-fluid" style="text-align:justify;">
        			<div><h1><a href=""><?php echo $row['TenNongSan'] ?></a></h1></div>
        			<div>Loại nông sản: <b><a href=""><?php echo $row['TenLoaiNongSan']?></a></b></div>
        			<div>Nhóm nông sản: <b><a href=""><?php echo $row['TenNhomNongSan']?></a></b></div>
        			<div>Mô tả: <b><?php echo $row['MoTaNS']?></b></div>
        			<div>Nguồn gốc: <b><?php echo $row['TenXa'] ?>, <?php echo $row['TenHuyen'] ?>, <?php echo $row['TenTinh'] ?></b></div>
        			<div>Số lượng: <b><?php echo $row['SoLuong']?> <?php echo $row['DVT'] ?></b></div>
        	</div>
        	<div class="container-fluid" style="text-align:justify;">
        			<div><h1><a href=""><?php echo $row['TenNhaCungCap'] ?></a></h1></div>
        			<div>Người đại diện: <b><?php echo $row['TenNguoiDaiDien']?></b></div>
        			<div>Địa chỉ: <b><?php echo $row['DiaChi_NCC']?>, <?php echo $row['TenXa'] ?>, <?php echo $row['TenHuyen'] ?>, <?php echo $row['TenTinh'] ?></b></div>
        			<div>Số điện thoại: <b><?php echo $row['SDT_NCC']?></b></div>
        	</div>
          </div>
        </div>
        <div class="row">
        	<div class="col-md-6">
        		<div class="container-fluid" style="text-align:justify;">
        			<div><h1><a href="">Kiểm định</a></h1></div>
        			<div>Trạng thái kiểm định: <b><?php if ($row['TrangThaiKiemDinh'] == 0) {
        				echo "Đạt chuẩn";
        			}else{echo "Không đạt chuẩn";}?></b></div>
        			<div>Thông tin kiểm định: <b><?php echo $row['ThongSoKiemDinh']?></b></div>
        	</div>
          	</div>
          	<div class="col-md-6">
          		<img class="img-fluid" src="assets/public/qr_images/<?php echo $row['QR_Image'] ?>" alt="">
          	</div>
        </div>
        <div class="row">
          <div class="col-md-12"><a href="?donhang&&manongsan=<?php echo $row['MaNongSan'] ?>"><button type="button" class="btn-next-checkout">Đặt mua nông sản</button></a></div>
        </div>
        <!-- </div> -->
        <!-- /.row -->
    <!-- </div> -->
    </div><!-- /.container-fluid -->
    <?php }
                      } ?>
	<!-- </div> -->
	<div class="col-md-2"></div>
</div>
<script>
        $(document).ready(function () {

            $('.editbtn').on('click', function () {

                $('#editmodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#manongsan').val(data[0]);
                $('#qrcode').val(data[1]);
                $('#hinh').html("<img src='assets/uploads/images/"+data[9]+"' height='175px' width='240px'>");
                $('#tennongsan').val(data[2]);
                $('#soluong').val(data[3]);
                $('#sl').val(data[4]);
                $('#dvt').val(data[5]);
                $('#tonggiatri').val(data[6]);
                var str = $.trim(data[7]);
                $('#mota').val(str);
                $('#hinhanh').val(data[9]);
                $('#hinh').html("<img src='assets/uploads/images/"+data[9]+"' height='175px' width='240px'>");
                $('#loains').val(data[10]);
                $('#nhacungcap').val(data[11]);
                $('#kiemdinh').val(data[12]);
                $('#trangthai').val(data[13]);
                $('#gia').val(data[16]);
                // $('#qr').val(data[17]);
                $('#hinhqr').html("<img src='assets/public/qr_images/"+data[17]+"' height='175px' width='175px'>");
                //document.write($('#hinh').val(data[9]));
                //var id = $('#hinhanh').val(data[8]);
                //$.post("", {hinhanh: id}, function(data){
                  //$("#xemchitiet").html(data);
                    //alert("dd");
                //})
            });
        });
    </script>