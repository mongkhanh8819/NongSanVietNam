<?php 
  include_once("Controller/NongSan/cNongSan.php");
  include_once("Controller/PhieuKiemDinhNongSan/cPhieuKiemDinhNongSan.php");
  $kd = new cPhieuKiemDinhNongSan();
  $ns = new cNongSan();
 ?>
<div class="col-md-10">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><b>DANH SÁCH PHIẾU KIỂM ĐỊNH NÔNG SẢN</b></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
              <li class="breadcrumb-item active">Phiếu kiểm định nông sản</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <!-- <h4 class="card-title">Danh sách phiếu yêu cầu kiểm định</h4> -->
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
                <!-- /.card-header -->
              <div class="row">
                <div class="col-md-12">
                    <div class="card-body table-responsive p-0">
                      <table class="table table-hover text-nowrap">
                        <thead>
                        <!-- <tr><th><h4>Danh sách phiếu kiểm định nông sản</h4></th></tr> -->
                        <tr>
                          <th>Mã phiếu kiểm định</th>
                          <th>Thời gian lập</th>
                          <th>Trạng thái</th>
                          <th>Tên nông sản</th>
                          <th>Tên nhà cung cấp</th>
                          <th>Tên nhân viên kiểm định</th>
                          <th>Xuất file PDF</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php 

                            $list_phieukd = $kd -> get_phieukiemdinh($_SESSION['MaNCC']);
                            // echo "<pre>";
                            // var_dump(mysqli_fetch_array($list_phieukd));
                            // echo "</pre>";
                            if($list_phieukd){
                              while ($rowkd = mysqli_fetch_array($list_phieukd)) {
                              
                         ?>
                         <tr>
                           <td><?php echo $rowkd['MaPhieuKiemDinh']?></td>
                           <td><?php echo $rowkd['ThoiGianLap']?></td>
                           <td><?php 
                           if ($rowkd['TrangThaiKiemDinh'] == 3) {
                             echo "Chờ kiểm định";
                           } elseif ($rowkd['TrangThaiKiemDinh'] == 0) {
                             echo "Đạt chuẩn";
                           } elseif ($rowkd['TrangThaiKiemDinh'] == 1){
                             echo "Không đạt chuẩn";
                           }
                           
                           ?></td>
                           <td><?php echo $rowkd['TenNongSan']?></td>
                           <td><?php echo $_SESSION['TenNhaCungCap']?></td>
                           <td><?php echo $rowkd['TenNVPP']?></td>
                           <td>
                            <!-- <button class="btn btn-primary editbtn">Xem chi tiết</button> -->
                            <a href="modules/inpdf.php?phieukd=<?php echo $rowkd['MaPhieuKiemDinh'] ?>"><input type="submit" value="Xuất PDF"></a>
                          </td>
                         </tr>
                         <?php }
                            } ?>
                        
                        </tbody>
                      </table>
                    </div>
              <!-- /.card-body -->
                <!-- /.card -->
                </div>
              <!-- /.col -->
              </div>
              <!-- /.row -->
              


            </div>
            <!-- /.card -->
          </div>
        </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
      <?php 

       ?>
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
                $('#tennongsan').val(data[2]);
                $('#soluong').val(data[3]);
                $('#sl').val(data[4]);
                $('#dvt').val(data[5]);
                $('#tonggiatri').val(data[6]);
                var str = $.trim(data[7])
                $('#mota').val(str);
                $('#hinhanh').val(data[9]);
                $('#hinh').html("<img src='assets/uploads/images/"+data[9]+"' height='175px' width='240px'>");
                $('#loains').val(data[10]);
                $('#nhacungcap').val(data[11]);
                $('#kiemdinh').val(data[12]);
                $('#trangthai').val(data[13]);
                $('#gia').val(data[16]);

                //document.write($('#hinh').val(data[9]));
                //var id = $('#hinhanh').val(data[8]);
                //$.post("", {hinhanh: id}, function(data){
                  //$("#xemchitiet").html(data);
                    //alert("dd");
                //})
            });
        });
    </script>