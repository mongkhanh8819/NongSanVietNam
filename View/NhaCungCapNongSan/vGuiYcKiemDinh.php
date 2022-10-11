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
            <h1><b>GỬI YÊU CẦU KIỂM ĐỊNH NÔNG SẢN</b></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
              <li class="breadcrumb-item active">Gửi yêu cầu kiểm định</li>
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
                        <tr><th><h4>Danh sách phiếu kiểm định nông sản</h4></th></tr>
                        <tr>
                          <th>Mã phiếu kiểm định</th>
                          <th>Thời gian lập</th>
                          <th>Trạng thái</th>
                          <th>Tên nông sản</th>
                          <th>Tên nhà cung cấp</th>
                          <th>Tên nhân viên kiểm định</th>
                          <th>Xem chi tiết</th>
                          <th>Xóa</th>
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
                            <button class="btn btn-primary editbtn">Xem chi tiết</button>
                          </td>
                          <td><button type="button" class="btn btn-danger deletebtn">Xóa</button></td>
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
              
              <!-- Modal UPDATE NÔNG SẢN -->
                       <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel"><b>Thông tin nông sản</b></h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <div id="xemchitiet">
                                
                              </div>
                      
                              <form action="" method="post" enctype="multipart/form-data">
                                <div class="form-row">
                    
                                  <div class="form-group col-md-6">
                                    <label for="inputName">Mã nông sản</label>
                                    <input type="text" class="form-control" name="manongsan" id="manongsan"  value="" readonly>
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label for="inputPhone">QRCODE</label>
                                    <input type="text" class="form-control" id="qrcode" name="qrcode" disabled value="" >
                                  </div>
                                  <div class="form-group col-md-4">
                                    <label for="inputPhone">Tên nông sản</label>
                                    <input type="text" class="form-control" id="tennongsan" name="tennongsan" value="" >
                                  </div>
                                  <div class="form-group col-md-4">
                                    <label for="inputAddress">Số lượng</label>
                                    <input type="text" class="form-control" id="sl" name="sl" value="" >
                                  </div>
                                  <div class="form-group col-md-4">
                                    <label for="inputAddress">Đơn vị tính</label>
                                    <input type="text" class="form-control" id="dvt" name="dvt" value="" >
                                  </div>
                                  
                                </div>
                                <div class="form-group">
                                  <label for="inputDateCreate">Tổng giá trị (VNĐ)</label>
                                  <input type="text" class="form-control" id="gia" name="gia" value="" >
                                </div>
                                <div class="form-group">
                                  <label for="inputStatus">Mô tả nông sản</label>
                                  <input type="text" class="form-control" id="mota" name="mota" value="" >
                                </div>
                                <div class="form-group">
                                  <label for="inputDateCreate">Hình ảnh</label>
                                  <!-- <input type="file" class="form-control" id="hinh" name="hinh"> -->
                                  <input style="display:none;" type="text" class="form-control" id="hinhanh" name="hinhanh">
                                  <div id="hinh"></div><br>
                                  <input type="file" name="ffile" id="ffile">
                                </div>
                                <div class="form-group">
                                  <label for="inputStatus">Loại nông sản</label>
                                  <input type="text" class="form-control" id="loains" name="loains" disabled value="Đang xử lý" >
                                </div><div class="form-group">
                                  <label for="inputDateCreate">Nhà cung cấp</label>
                                  <input type="text" class="form-control" id="nhacungcap" name="nhacungcap" disabled value="" >
                                </div>
                                <div class="form-group">
                                  <label for="inputStatus">Kiểm định</label>
                                  <input type="text" class="form-control" id="kiemdinh" name="kiemdinh" disabled value="" >
                                </div>
                                <div class="form-group">
                                  <label for="inputStatus">Trạng thái nông sản</label>
                                  <input type="text" class="form-control" id="trangthai" name="trangthai" disabled value="" >
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  <button type="submit" name="update" class="btn btn-primary">Cập nhật</button>
                                  <!-- <input type="submit" name="update"> -->
                                </div>
                              </form>
                            </div>
                            
                          </div>
                        </div>
                      </div>
    
                  <!-- Modal -->







              <!--  -->
              <div class="row">
                <div class="col-md-12">
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr><th><h4>Danh sách nông sản</h4></th></tr>
                    <tr>
                      <th>Mã nông sản</th>
                      <th>Tên nông sản</th>
                      <th>Mô tả nông sản</th>
                      <th>Hình ảnh</th>
                      <th>Loại nông sản</th>
                      <th>Trạng thái kiểm định</th>
                      <th>Gửi kiểm định</th>
                    </tr>
                  </thead>
                  <?php 
                      $list_ns = $ns -> get_nongsan_by_ncc($_SESSION['MaNCC']);
                      if ($list_ns) {

                        
                   ?>
                  <tbody>
                    <?php while($row = mysqli_fetch_array($list_ns)){  ?>
                    <tr>
                      <td><?php echo $row['MaNongSan'] ?></td>
                      <td><?php echo $row['TenNongSan'] ?></td>
                      <td>
                        <textarea cols="20" rows="7" readonly><?php echo $row['MoTaNS'] ?></textarea>
                      </td>
                      <td><img src="assets/uploads/images/<?php echo $row['HinhAnh'] ?>" height="175px" width="240px"></td>
                      <td style="display:none;"><?php echo $row['HinhAnh'] ?></td>
                      <?php 
                        $tt_ns = $ns -> get_nongsan_by_id($row['MaNongSan']);
                        while($row1 = mysqli_fetch_array($tt_ns)){


                      ?>
                      <td><?php echo $row1['TenLoaiNongSan'];} ?></td>
                      <td><?php 
                          if ($row['TrangThaiKiemDinh'] == 0) {
                            echo "Đạt chuẩn";
                          } elseif ($row['TrangThaiKiemDinh'] == 1) {
                            echo "Không đạt chuẩn";
                          } elseif ($row['TrangThaiKiemDinh'] == 2){
                            echo "Chưa kiểm định";
                          } elseif ($row['TrangThaiKiemDinh'] == 3){
                            echo "Chờ kiểm định";
                          } else{

                          }
                          
                       ?></td>
                      <td>
                        <a class="fa fa-arrow-circle-right" href="index.php?guiyeucau&&mans=<?php echo $row['MaNongSan']; ?>"></a>
                      </td>
                    </tr>
                    <?php }
                      } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
              <!-- /.card-body -->

            </div>
            <!-- /.card -->
          </div>
        </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
      <?php 

        ///----------------------------
        ///----------------------------
        ///----------------------------
        ///----------------------------
        ///--------XỬ LÝ CẬP NHẬT NÔNG SẢN
        ///----------------------------
        ///----------------------------
        ///----------------------------
        ///----------------------------
        // if (isset($_REQUEST['update'])) {
        //     $mans = $_REQUEST['manongsan'];
        //     $tenns = $_REQUEST['tennongsan'];
        //     $sl = $_REQUEST['sl'];
        //     $dvt = $_REQUEST['dvt'];
        //     $tonggiatri = $_REQUEST['gia'];
        //     $mota = $_REQUEST['mota'];
        //     ////
        //     $file = $_FILES['ffile']['tmp_name'];
        //     $type = $_FILES['ffile']['type'];
        //     $name = $_FILES['ffile']['name'];
        //     $size = $_FILES['ffile']['size'];

        //     // echo $mans."<br>";
        //     // echo $tenns."<br>";
        //     // echo $sl."<br>";
        //     // echo $dvt."<br>";
        //     // echo $tonggiatri."<br>";
        //     // echo $mota."<br>".$mans."<br>";;
        //     // echo $file."<br>";
        //     // echo $type."<br>";
        //     // echo $name."<br>";
        //     // echo $size."<br>";
        //     $kq = $ns-> edit_nongsan($mans,$tenns,$sl,$tonggiatri,$dvt,$mota,$name,$file,$type,$size);
        //     //thông báo
        //     if($kq == 1){
        //       echo "<script>alert('Cập nhật nông sản thành công');</script>";
        //       echo "<script>window.location.href = 'index.php?qlns';</script>";
        //     }elseif($kq == 0){
        //       echo "<script>alert('Cập nhật thất bại')</script>";
        //     }elseif($kq == -1){
        //       echo "<script>alert('Không thể upload')</script>";
        //     }elseif($kq == -2){
        //       echo "<script>alert('Size > 2MB')</script>";
        //     }elseif($kq == -3){
        //       echo "<script>alert('Không đúng định dạng file')</script>";
        //     }else{
        //       echo "<script>alert('Cập nhật dữ liệu thất bại')</script>";
        //     }
        // }

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