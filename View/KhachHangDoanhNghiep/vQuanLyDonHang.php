<?php 

  // VIEW KHÁCH HÀNG DOANH NGHIỆP
  include_once("Controller/DonHang/cHoaDon.php");
  $p = new cHoaDon();


 ?>
<!-- Main Sidebar Container -->
  <!-- <aside class="main-sidebar"> -->
<br>
<br>
<div class="row">
    <!-- Sidebar -->
    <div class="col-md-1"></div>
    <!-- /.sidebar -->
  <!-- </aside> -->

  <!-- Content Wrapper. Contains page content -->
  	<div class="col-md-10">
      <div class="thongbao">
            
            <?php 
                  if (isset($_SESSION['success_hoadon']) && $_SESSION['success_hoadon'] == 1) {
                    echo "<div class='alert alert-success'>
                                   Xử lý duyệt đơn hàng thành công !!<button type='button' name='alert' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                             </div>";
                    unset($_SESSION['success_hoadon']);
                  }elseif (isset($_SESSION['success_hoadon']) && $_SESSION['success_hoadon'] == 2) {
                    echo "<div class='alert alert-success'>
                                   Xử lý hoàn thành đơn hàng thành công !!<button type='button' name='alert' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                             </div>";
                    unset($_SESSION['success_hoadon']);
                  }elseif (isset($_SESSION['success_hoadon']) && $_SESSION['success_hoadon'] == 4) {
                    echo "<div class='alert alert-success'>
                                   Xử lý hủy đơn hàng thành công !!<button type='button' name='alert' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                             </div>";
                    unset($_SESSION['success_hoadon']);
                  }




               ?>

          </div>
	<div class="row">

        <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><b>Danh sách đơn hàng chưa duyệt</b></h3> 
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
              	<table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Mã đơn hàng</th>
                      <th>Trạng thái</th>
                      <th>Tên nhà cung cấp</th>
                      <th>Tên nông sản</th>
                      <th>Tổng giá trị hóa đơn</th>
                      <!-- thông tin chi tiết hóa đơn -->
                      <th>Xử lý đơn</th>
                      <th>Tác vụ</th>
                    </tr>
                  </thead>
                  <!-- <tbody>
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                  </tbody> -->
                  <tbody>
                    <?php 
                        $list1 = $p -> get_hoadon_dn_by_makh($_SESSION['MaDN']);
                        if ($list1) {
                          while ($row = mysqli_fetch_array($list1)) {
                            if($row['TrangThai'] == 0){


                          ?>
                    <tr>
                      <!-- <td><?php //echo $row[''] ?></td> -->
                      <td><?php echo $row['MaHoaDon'] ?></td>
                      <td><?php if ($row['TrangThai'] == 0) {
                        echo "Chờ duyệt đơn hàng";
                      } elseif ($row['TrangThai'] == 1) {
                        
                      } elseif($row['TrangThai'] == 2) {
                        
                      } elseif ($row['TrangThai'] == 3) {
                        
                      } elseif ($row['TrangThai'] == 4) {
                        
                      }
                       ?></td>
                      <td><span class="tag tag-success"><?php echo $row['MaNCC'] ?></span></td>
                      <td><span class="tag tag-success"><?php echo $row['TenNongSan'] ?></span></td>
                      <td><?php echo number_format($row['TongHoaDon'], 0, ',', '.')." VNĐ"; ?></td>
                      <!-- thông tin chi tiết hóa đơn -->
                      <td style="display:none"><?php echo number_format($row['DonGia'], 0, ',', '.')." VNĐ"; ?></th>
                      <td style="display:none"><?php echo $row['SoLuong']." ".$row['DonViTinh'] ?></td>
                      <td style="display:none"><?php echo $row['DiaChi'] ?></td>
                      <td style="display:none"><?php echo $row['Email'] ?></td>
                      <td style="display:none"><?php echo $row['SDT'] ?></td>
                      <td>
                      <button class="btn btn-danger huy" data-toggle="modal" data-target="#huy">Hủy đơn</button>
                      </td>
                      <td><button class="btn btn-primary editbtntv" data-toggle="modal" data-target="#modaltv">Xem chi tiết</button></td>
                    </tr>
                       <?php   
                          }
                        }
                      }
                     ?>
                  </tbody>
                </table>
              </div>

          	</div>
        </div>

                <!-- Modal đơn hàng thành viên -->
                       <div class="modal fade" id="modaltv" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Thông tin đơn hàng</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <form action="" method="POST">
                            <div class="modal-body">
                              
                                <div class="form-row">
                                  <div class="form-group col-md-6">
                                    <label for="inputName">Mã hóa đơn</label>
                                    <input type="text" class="form-control" id="id" disabled value="" >
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label for="inputPhone">Trạng thái hóa đơn</label>
                                    <input type="text" class="form-control" id="ttrangthai" disabled value="" >
                                  </div>

                                  <div class="form-group col-md-6">
                                    <label for="inputAddress">Nhà cung cấp</label>
                                    <input type="text" class="form-control" id="nnhacungcap" disabled value="" >
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="inputStatus">Nông sản</label>
                                  <input type="text" class="form-control" id="nnongsan" disabled value="" >
                                </div>
                                <div class="form-group">
                                  <label for="inputStatus">Tổng hóa đơn</label>
                                  <input type="text" class="form-control" id="ttonghoadon" disabled value="" >
                                </div>
                                <div class="form-group">
                                  <label for="inputStatus">Đơn giá</label>
                                  <input type="text" class="form-control" id="ddongia" disabled value="" >
                                </div>
                                <div class="form-group">
                                  <label for="inputStatus">Số lượng</label>
                                  <input type="text" class="form-control" id="ssoluong" disabled value="" >
                                </div>
                                <div class="form-group">
                                  <label for="inputStatus">Địa chỉ</label>
                                  <input type="text" class="form-control" id="ddiachi" disabled value="" >
                                </div>
                                <div class="form-group">
                                  <label for="inputStatus">Email</label>
                                  <input type="text" class="form-control" id="eemail" disabled value="" >
                                </div>
                                <div class="form-group">
                                  <label for="inputStatus">Số điện thoại</label>
                                  <input type="text" class="form-control" id="ssdt" disabled value="" >
                                </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                            </form>
                          </div>
                        </div>
                      </div>
    
                  <!-- Modal -->
                  <!-- Modal hủy đơn hàng -->
                       <div class="modal fade" id="huy" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Xác nhận hủy đơn hàng này?</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <form action="" method="POST">
                            <div class="modal-body">
                                <div id="tb3"></div>
                                <div style="display:none"><input type="text" id="mahoadon3" name="mahoadon" readonly></div>
                                <div style="display:none;"><input type="text" name="trangthai" value="4" readonly></div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="submit" name="submit" class="btn btn-primary">Xác nhận</button>
                            </div>
                            </form>
                          </div>
                        </div>
                      </div>
    
                  <!-- Modal -->
   	</div>

   	<div class="row">

        <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><b>Danh sách đơn hàng</b></h3> 
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
              	<table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Mã đơn hàng</th>
                      <th>Trạng thái</th>
                      <th>Tên nhà cung cấp</th>
                      <th>Tên nông sản</th>
                      <th>Tổng giá trị hóa đơn</th>
                      <!-- thông tin chi tiết hóa đơn -->
                      <th>Tác vụ</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                        $list1 = $p -> get_hoadon_dn_by_makh($_SESSION['MaDN']);
                        if ($list1) {
                          while ($row = mysqli_fetch_array($list1)) {
                            if($row['TrangThai'] != 0){


                          ?>
                    <tr>
                      <!-- <td><?php //echo $row[''] ?></td> -->
                      <td><?php echo $row['MaHoaDon'] ?></td>
                      <td><?php if ($row['TrangThai'] == 0) {
                        echo "Chờ duyệt đơn hàng";
                      } elseif ($row['TrangThai'] == 1) {
                        echo "Chờ giao hàng";
                      } elseif($row['TrangThai'] == 2) {
                        echo "Đã hoàn thành đơn hàng";
                      } elseif ($row['TrangThai'] == 3) {
                        echo "Nhà cung cấp đã hủy đơn";
                      } elseif ($row['TrangThai'] == 4) {
                        echo "Người mua đã hủy đơn";
                      }
                       ?></td>
                      <td><span class="tag tag-success"><?php echo $row['MaNCC'] ?></span></td>
                      <td><span class="tag tag-success"><?php echo $row['TenNongSan'] ?></span></td>
                      <td><?php echo number_format($row['TongHoaDon'], 0, ',', '.')." VNĐ"; ?></td>
                      <!-- thông tin chi tiết hóa đơn -->
                      <td style="display:none"><?php echo number_format($row['DonGia'], 0, ',', '.')." VNĐ"; ?></th>
                      <td style="display:none"><?php echo $row['SoLuong']." ".$row['DonViTinh'] ?></td>
                      <td style="display:none"><?php echo $row['DiaChi'] ?></td>
                      <td style="display:none"><?php echo $row['Email'] ?></td>
                      <td style="display:none"><?php echo $row['SDT'] ?></td>
                      <td><button class="btn btn-primary editbtntv" data-toggle="modal" data-target="#modaltv">Xem chi tiết</button></td>
                    </tr>
                       <?php   
                          }
                        }
                      }
                     ?>
                  </tbody>
                </table>
              </div>

          	</div>
        </div>
   	</div>

 	</div>

  	<div class="col-md-1"></div>
  <!-- /.container-fluid -->
 </div>
<!-- /.content -->

<?php 

    if(isset($_REQUEST['submit'])){
      $mahoadon = $_REQUEST['mahoadon'];
      $trangthai = $_REQUEST['trangthai'];
      
      $xuly = $p -> xuly_hoadon($mahoadon,$trangthai);

      if ($xuly) {
        if ($trangthai == 4) {
          $_SESSION['success_hoadon'] = 4;
          //echo "<script>window.location.reload(true)</script>";
          echo "<script>window.location.href='index?qldh'</script>";
          // echo "<div class='alert alert-danger'>
          //           Xử lý đơn hàng thất bại !!<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
          //     </div>";
        }        
      }else{
        echo "<script>window.location.href='index?qldh'</script>";
        echo "<div class='alert alert-danger'>
                    Xử lý đơn hàng thất bại !!<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
              </div>";
      }

    }

  ?>

<script>
        $(document).ready(function () {

            $('.editbtntv').on('click', function () {

                $('#modaltv').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);


                $('#id').val(data[0]);
                $('#ttrangthai').val(data[1]);
                //$('#hinh').html("<img src='assets/uploads/images/"+data[9]+"' height='175px' width='240px'>");
                $('#nnhacungcap').val(data[2]);
                $('#nnongsan').val(data[3]);
                $('#ttonghoadon').val(data[4]);
                $('#ddongia').val(data[5]);
                $('#ssoluong').val(data[6]);
                $('#ddiachi').val(data[7]);
                $('#eemail').val(data[8]);
                $('#ssdt').val(data[9]);
                
            });
        });
    </script>
    <script>
        $(document).ready(function () {

            $('.huy').on('click', function () {

                $('#huy').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#mahoadon3').val(data[0]);
                $('#tb3').html('<div>Đơn hàng có mã hóa đơn #'+data[0]+'</div>');
                
            });
        });
 </script>