<?php 
  include_once("Controller/NongSan/cNongSan.php");
  $ns = new cNongSan();
 ?>
<div class="col-md-10">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><b>ĐĂNG BÁN NÔNG SẢN</b></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
              <li class="breadcrumb-item active">Đăng bán nông sản</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">


            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-6">

          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                
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
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Mã nông sản</th>
                      <th>QR code</th>
                      <th>Tên nông sản</th>
                      <th>Số lượng</th>
                      <th style="display:none;"></th>
                      <th style="display:none;"></th>
                      <th>Tổng giá trị</th>
                      <th style="display:none;">Mô tả nông sản</th>
                      <th>Hình ảnh</th>
                      <th style="display:none;"></th>
                      <th style="display:none">Loại nông sản</th>
                      <th style="display:none">Nhà cung cấp</th>
                      <th>Kiểm định</th>
                      <th style="display:none">Trạng thái nông sản</th>
                      <th>Đăng bán</th>
                      <th style="display:none">Hủy đăng bán</th>
                    </tr>
                  </thead>
                  <?php 
                      $list_ns = $ns -> get_nongsan_by_ncc_dc($_SESSION['MaNCC']);
                      if ($list_ns) {

                        
                   ?>
                  <tbody>
                    <?php while($row = mysqli_fetch_array($list_ns)){  ?>
                    <tr>
                      <td><?php echo $row['MaNongSan'] ?></td>
                      <td><?php 
                        if ($row['TrangThaiKiemDinh'] == 0) {
                          ?>
                          <img src="assets/public/qr_images/<?php echo $row['QR_Image'] ?>" alt="" height="100px" width="100px">
                          <?php 
                        } else {
                          ?>
                          <img src="assets/public/qr_images/<?php echo $row['QR_Image'] ?>" alt="CHƯA KIỂM ĐỊNH"><?php
                        }
                        
                       ?></td>
                      <td><?php echo $row['TenNongSan'] ?></td>
                      <td><?php echo $row['SoLuong']." ".$row['DVT'] ?></td>
                      <td style="display: none;"><?php echo $row['SoLuong'] ?></td>
                      <td style="display: none;"><?php echo $row['DVT'] ?></td>
                      <td><span class="tag tag-success"><?php echo number_format($row['Gia'], 0, ',', '.') ?> VNĐ</span></td>
                      <td style="display:none">
                        <textarea cols="20" rows="6" readonly><?php echo $row['MoTaNS'] ?></textarea>
                      </td>
                      <td><img src="assets/uploads/images/<?php echo $row['HinhAnh'] ?>" height="140px" width="150px"></td>
                      <td style="display:none;"><?php echo $row['HinhAnh'] ?></td>
                      <?php 
                        $tt_ns = $ns -> get_nongsan_by_id($row['MaNongSan']);
                        while($row1 = mysqli_fetch_array($tt_ns)){


                      ?>
                      <td style="display:none"><?php echo $row1['TenLoaiNongSan']; ?></td>
                      <td style="display:none"><?php echo $row1['TenNhaCungCap']; } ?></td>
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
                      <td style="display:none"><?php 
                          if ($row['TrangThaiNongSan'] == 0) {
                            echo "Chờ duyệt tin";
                          } elseif ($row['TrangThaiNongSan'] == 1) {
                            echo "Đã duyệt";
                          } elseif ($row['TrangThaiNongSan'] == 2){
                            echo "Đang khóa";
                          } elseif ($row['TrangThaiNongSan'] == 3){
                            echo "Chưa đăng tin";
                          } else{
                            
                          }
                          
                       ?></td>
                      <td>
                        <?php if($row['TrangThaiNongSan'] == 0 || $row['TrangThaiNongSan'] == 1 || $row['TrangThaiNongSan'] == 2){ ?>
                        <button type="button" class="btn btn-danger deletebtn">HỦY ĐĂNG BÁN</button>
                        
                      <?php }else{ ?>
                        <!-- <button class="btn btn-primary editbtn">ĐĂNG BÁN</button> -->
                        <button type="button" class="btn btn-primary editbtn">ĐĂNG BÁN</button>
                      <?php } ?>
                      </td>
                      <td style="display:none;">
                        <!-- <?php //if($row['TrangThaiNongSan'] == 3){ ?>
                        <button type="button" class="btn btn-danger deletebtn" disabled>HỦY ĐĂNG BÁN</button>
                      <?php //}else{ ?>
                        <button type="button" class="btn btn-danger deletebtn">HỦY ĐĂNG BÁN</button>
                      <?php //} ?> -->
                      </td>
                      <td style="display:none"><?php echo $row['Gia']; ?></td>
                      <td style="display:none"><?php echo $row['QR_Image']; ?></td>
                    </tr>
                    <?php }
                      } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->

                    <!-- Modal ĐĂNG BÁN NÔNG SẢN -->
                       <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel"><b>ĐĂNG BÁN NÔNG SẢN</b></h5>
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
                                    <div id="hinhqr"></div><br>
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
                                  <label for="inputStatus">Mô tả nông sản</label><br>
                                  <!-- <input type="text" class="form-control" id="mota" name="mota" value="" > -->
                                  <textarea name="mota" id="mota" cols="55" rows="5"></textarea>
                                </div>
                                <div class="form-group">
                                  <label for="inputDateCreate">Hình ảnh</label>
                                  <!-- <input type="file" class="form-control" id="hinh" name="hinh"> -->
                                  <div id="hinh"></div><br>
                                  <!-- <input type="file" name="ffile" id="ffile"> -->
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
                                  <button type="submit" name="update" class="btn btn-primary">ĐĂNG BÁN NÔNG SẢN</button>
                                  <!-- <input type="submit" name="update"> -->
                                </div>
                              </form>
                            </div>
                            
                          </div>
                        </div>
                      </div>
    
                  <!-- Modal -->
                  <!-- DELETE POP UP FORM (Bootstrap MODAL) -->
                  <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                      aria-hidden="true">
                      <div class="modal-dialog" role="document">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel"> Hủy đăng bán </h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                              </div>

                              <form action="" method="POST">

                                  <div class="modal-body">

                                        <input type="hidden" class="form-control" name="manongsan" id="ma"  value="" readonly>                                     

                                      <h4> Bạn có thật sự muốn hủy bán nông sản này không ??</h4>
                                  </div>
                                  <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal"> CLOSE </button>
                                      <button type="submit" name="huy" class="btn btn-primary"> HỦY ĐĂNG BÁN </button>
                                  </div>
                              </form>

                          </div>s
                      </div>
                  </div>
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
        if (isset($_REQUEST['update'])) {
            $mans = $_REQUEST['manongsan'];

            $kq = $ns-> dangtin_nongsan($mans,0);
            //thông báo
            if($kq){
              //echo "<script>alert('Đăng bán thành công!');</script>";
              echo "<script>window.location.href = 'index.php?dangban';</script>";
            }else{
              echo "<script>window.location.href = 'index.php?dangban';</script>";
              //echo "<script>alert('Đăng bán thất bại!')</script>";
            }
        }elseif (isset($_REQUEST['huy'])) {
            $mans = $_REQUEST['manongsan'];
            //echo $mans;
            //echo "<script>alert(".$mans.");</script>";
            $kq = $ns-> dangtin_nongsan($mans,3);
            //thông báo
            if($kq){
              //echo "<script>alert('Hủy đăng bán thành công!');</script>";
              echo "<script>window.location.href = 'index.php?dangban';</script>";
            }else{
              //echo "<script>alert('Hủy đăng bán thất bại!');</script>";
              echo "<script>window.location.href = 'index.php?dangban';</script>";
            }         
        }

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
    <script>
        $(document).ready(function () {

            $('.deletebtn').on('click', function () {

                $('#deletemodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#ma').val(data[0]);
                //alert(data[0]);
            });
        });
    </script>