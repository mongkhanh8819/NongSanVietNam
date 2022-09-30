 <?php 


    include_once("Controller/NongSan/cNongSan.php");
    include_once("Controller/NhanVienPhanPhoi/cNhanVienPhanPhoi.php");
    include_once("Controller/PhieuKiemDinhNongSan/cPhieuKiemDinhNongSan.php");
    if (isset($_REQUEST['mans'])) {
      $p = new cNongSan();
      $list_ns = $p -> get_nongsan_by_id($_REQUEST['mans']);
    }
    $b = new cNhanVienPhanPhoi();
    $kd = new cPhieuKiemDinhNongSan();
  ?>
 <!-- Content Wrapper. Contains page content -->
 <div class="col-md-9" >
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>PHIẾU KIỂM ĐỊNH NÔNG SẢN</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
              <li class="breadcrumb-item active">Thông tin kiểm định</li>
              <li class="breadcrumb-item active">Gửi yêu cầu kiểm định</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
            
              <!-- /.card-header -->
              <!-- <h3 style="text-align:center">Thêm Nông Sản</h3> -->
              <form action="#" method="post" enctype="multipart/form-data">
                <?php 

                  if($list_ns){
                    while ($row = mysqli_fetch_array($list_ns)) {

                 ?>
                <div class="row">
                  <div class="col">
                    <td>Mã nông sản</td>
                    <input type="text" class="form-control" id="tenns" name="mans" value="<?php echo $row['MaNongSan']; ?>" readonly></br>
                    <td>Tên nông sản</td>
                    <input type="text" class="form-control" id="tenns" name="tenns" value="<?php echo $row['TenNongSan']; ?>" readonly></br>
                    <td>Tên nhà cung cấp</td>
                    <input type="text" class="form-control" id="tenncc" name="tenncc" value="<?php echo $row['TenNhaCungCap']; ?>" readonly></br>
                    <td>Số lượng</td>
                    <input type="text" class="form-control" id="sl" name="sl" value="<?php echo $row['SoLuong']." ".$row['DVT']; ?>" readonly></br>
                    <td>Địa chỉ kiểm định</td>
                    <input type="text" class="form-control" id="diachi" placeholder="Địa chỉ cho nhân viên đến kiểm định" name="diachi" value="<?php echo $row['DiaChi_NCC'].", ".$row['TenXa'].", ".$row['TenHuyen'].", ".$row['TenTinh']; ?>"></br>
                    <td>Đánh giá từ nhà cung cấp</td><br>
                    <textarea name="danhgiancc" id="danhgiancc" cols="80" rows="4" placeholder="Đánh giá từ phía nhà cung cấp về lô nông sản" style="border-radius:10px"></textarea></br></br>
                    <?php 

                      $list_nvpp = $b -> get_nvpp_by_diachi($row['MaXa']);
                      while ($row1 = mysqli_fetch_array($list_nvpp)) {
                        
                     ?>
                    <td>Mã nhân viên kiểm định</td>
                    <input type="text" class="form-control" id="nvkd" name="manvpp" value="<?php echo $row1['MaNVPP']; ?>" readonly></br>
                    <td>Tên nhân viên kiểm định</td>
                    <input type="text" class="form-control" id="tennvkd" name="tebnvpp" value="<?php echo $row1['TenNVPP']; ?>" readonly></br>
                    <td>Trung tâm kiểm định</td>
                    <input type="text" class="form-control" id="matt" name="matrungtam" value="<?php echo $row1['TenTrungTam']; ?>" readonly></br>
                    <?php } ?>
                  </div>
                </div>
                <button type="submit" name="submit" class="btn btn-primary" style="margin-left:45%">Gửi yêu cầu</button>
                <button type="reset" class="btn btn-primary" >Reset</button>
                <!-- <input type="submit" value="Thêm Doanh Nghiệp" style="text-align:center"> -->
                <?php }
                  } ?>
              </form>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php
    // include("Controller/cSanpham.php");
     if(isset($_REQUEST['submit'])){
      $diachi = $_REQUEST['diachi'];
      $danhgiancc = $_REQUEST['danhgiancc'];
      $manvpp = $_REQUEST['manvpp'];
      $mancc = $_SESSION['MaNCC'];
      $manongsan = $_REQUEST['mans'];
      // echo $diachi."<br>";
      // echo $danhgiancc."<br>";
      // echo $manvpp."<br>";
      // echo $mancc."<br>";
      // echo $manongsan."<br>";
        
      $kq = $kd -> add_phieukiemdinh($diachi, $danhgiancc, $manvpp, $mancc, $manongsan);
      //hiện thông báo
      if($kq == 1){
        echo "<script>alert('Gửi yêu cầu kiểm định thành công')</script>";
        echo "<script>window.location.href = 'index.php?gdkd';</script>";
      }elseif($kq == 0){
        echo "<script>alert('Gửi yêu cầu kiểm định thất bại')</script>";
      }
    }
  
  ?>