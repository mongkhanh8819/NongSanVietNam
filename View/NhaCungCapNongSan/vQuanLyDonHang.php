<?php 

    include_once("Controller/DonHang/cHoaDon.php");
    $p = new cHoaDon();


 ?>
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
                  }elseif (isset($_SESSION['success_hoadon']) && $_SESSION['success_hoadon'] == 3) {
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
                <h3 class="card-title">Danh sách đơn hàng từ doanh nghiệp</h3> 

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
                      <th>Mã đơn hàng</th>
                      <th>Trạng thái</th>
                      <th style="display:none;">Tên nhà cung cấp</th>
                      <th>Tên doanh nghiệp</th>
                      <th>Tên nông sản</th>
                      <th>Tổng giá trị hóa đơn</th>
                      <!-- thông tin chi tiết hóa đơn -->
                      <th style="display:none">Đơn giá</th>
                      <th style="display:none">Số lượng</th>
                      <th style="display:none">Địa chỉ</th>
                      <th style="display:none">Email</th>
                      <th style="display:none">Số diện thoại</th>
                      <th>Xử lý đơn</th>
                      <th>Tác vụ</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                        $list = $p -> get_hoadon_dn($_SESSION['MaNCC']);
                        if ($list) {
                          while ($row = mysqli_fetch_array($list)) {
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
                      <td style="display:none;"><span class="tag tag-success"><?php echo $_SESSION['TenNhaCungCap'] ?></span></td>
                      <td><span class="tag tag-success"><?php echo $row['TenDoanhNghiep'] ?></span></td>
                      <td><span class="tag tag-success"><?php echo $row['TenNongSan'] ?></span></td>
                      <td><?php echo number_format($row['TongHoaDon'], 0, ',', '.')." VNĐ"; ?></td>
                      <!-- thông tin chi tiết hóa đơn -->
                      <td style="display:none"><?php echo number_format($row['DonGia'], 0, ',', '.')." VNĐ"; ?></th>
                      <td style="display:none"><?php echo $row['SoLuong']." ".$row['DonViTinh'] ?></td>
                      <td style="display:none"><?php echo $row['DiaChi'] ?></td>
                      <td style="display:none"><?php echo $row['Email'] ?></td>
                      <td style="display:none"><?php echo $row['SDT'] ?></td>
                      <td>
                      <?php if ($row['TrangThai'] == 0){ ?>
                        <button class="btn btn-default duyet" data-toggle="modal" data-target="#duyet">Duyệt đơn hàng</button>
                      <?php }elseif($row['TrangThai'] == 1){ ?> 
                        <button class="btn btn-primary xacnhan" data-toggle="modal" data-target="#thanhcong">Xác nhận hoàn thành</button>
                      <?php }elseif($row['TrangThai'] == 2){ ?>
                        
                      <?php } ?>

                      <?php if($row['TrangThai'] != 2 && $row['TrangThai'] != 3 && $row['TrangThai'] != 4 ){ ?>
                      <button class="btn btn-danger huy" data-toggle="modal" data-target="#huy">Hủy đơn</button>
                      <?php } ?>
                      </td>
                      <td><button class="btn btn-primary editbtndn" data-toggle="modal" data-target="#modaldn">Xem chi tiết</button></td>
                    </tr>
                       <?php   
                          }
                        }
                     ?>
                  </tbody>
                </table>
              </div>


              <!-- /.card-header -->
              <div class="card-header">
                <h3 class="card-title">Danh sách thông tin đơn hàng từ khách hàng thành viên</h3> 

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                  </div>
                </div>
              </div>
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <!-- thông tin hóa đơn -->
                      <th>Mã đơn hàng</th>
                      <th>Trạng thái</th>
                      <th>Tên nhà cung cấp</th>
                      <th>Tên khách hàng</th>
                      <th>Tên nông sản</th>
                      <th>Tổng giá trị hóa đơn</th>
                      <!-- thông tin chi tiết hóa đơn -->
                      <th style="display:none">Đơn giá</th>
                      <th style="display:none">Số lượng</th>
                      <th style="display:none">Địa chỉ</th>
                      <th style="display:none">Email</th>
                      <th style="display:none">Số diện thoại</th>
                      <th>Xử lý đơn</th>
                      <th>Tác vụ</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                        $list1 = $p -> get_hoadon_tv($_SESSION['MaNCC']);
                        if ($list1) {
                          while ($row = mysqli_fetch_array($list1)) {
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
                      <td><span class="tag tag-success"><?php echo $_SESSION['TenNhaCungCap'] ?></span></td>
                      <td><span class="tag tag-success"><?php echo $row['Ten_KHTV'] ?></span></td>
                      <td><span class="tag tag-success"><?php echo $row['TenNongSan'] ?></span></td>
                      <td><?php echo number_format($row['TongHoaDon'], 0, ',', '.')." VNĐ"; ?></td>
                      <!-- thông tin chi tiết hóa đơn -->
                      <td style="display:none"><?php echo number_format($row['DonGia'], 0, ',', '.')." VNĐ"; ?></th>
                      <td style="display:none"><?php echo $row['SoLuong']." ".$row['DonViTinh'] ?></td>
                      <td style="display:none"><?php echo $row['DiaChi'] ?></td>
                      <td style="display:none"><?php echo $row['Email'] ?></td>
                      <td style="display:none"><?php echo $row['SDT'] ?></td>
                      <td>
                      <?php if ($row['TrangThai'] == 0){ ?>
                        <button class="btn btn-default duyet" data-toggle="modal" data-target="#duyet">Duyệt đơn hàng</button>
                      <?php }elseif($row['TrangThai'] == 1){ ?> 
                        <button class="btn btn-primary xacnhan" data-toggle="modal" data-target="#thanhcong">Xác nhận hoàn thành</button>
                      <?php }elseif($row['TrangThai'] == 2){ ?>
                        
                      <?php } ?>

                      <?php if($row['TrangThai'] != 2 && $row['TrangThai'] != 3 && $row['TrangThai'] != 4 ){ ?>
                      <button class="btn btn-danger huy" data-toggle="modal" data-target="#huy">Hủy đơn</button>
                      <?php } ?>
                      </td>
                      <td><button class="btn btn-primary editbtntv" data-toggle="modal" data-target="#modaltv">Xem chi tiết</button></td>
                    </tr>
                       <?php   
                          }
                        }
                     ?>
                  </tbody>
                </table>
              </div>


                       <!-- Modal đơn hàng doanh nghiệp -->
                       <div class="modal fade" id="modaldn" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Thông tin đơn hàng từ doanh nghiệp</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <form action="" method="POST">
                            <div class="modal-body">
                              
                                <div class="form-row">
                                  <div class="form-group col-md-6">
                                    <label for="inputName">Mã hóa đơn</label>
                                    <input type="text" class="form-control" id="mahoadon" disabled value="Nguyễn Văn Tám" >
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label for="inputPhone">Trạng thái hóa đơn</label>
                                    <input type="text" class="form-control" id="trangthai" disabled value="0213465464" >
                                  </div>

                                  <div class="form-group col-md-6">
                                    <label for="inputAddress">Nhà cung cấp</label>
                                    <input type="text" class="form-control" id="nhacungcap" disabled value="12 Nguyễn Văn Bảo" >
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="inputDateCreate">Doanh nghiệp</label>
                                  <input type="text" class="form-control" id="khachhang" disabled value="#18/09/2022" >
                                </div>
                                <div class="form-group">
                                  <label for="inputStatus">Nông sản</label>
                                  <input type="text" class="form-control" id="nongsan" disabled value="Đang xử lý" >
                                </div>
                                <div class="form-group">
                                  <label for="inputStatus">Tổng hóa đơn</label>
                                  <input type="text" class="form-control" id="tonghoadon" disabled value="Đang xử lý" >
                                </div>
                                <div class="form-group">
                                  <label for="inputStatus">Đơn giá</label>
                                  <input type="text" class="form-control" id="dongia" disabled value="" >
                                </div>
                                <div class="form-group">
                                  <label for="inputStatus">Số lượng</label>
                                  <input type="text" class="form-control" id="soluong" disabled value="" >
                                </div>
                                <div class="form-group">
                                  <label for="inputStatus">Địa chỉ</label>
                                  <input type="text" class="form-control" id="diachi" disabled value="" >
                                </div>
                                <div class="form-group">
                                  <label for="inputStatus">Email</label>
                                  <input type="text" class="form-control" id="email" disabled value="" >
                                </div>
                                <div class="form-group">
                                  <label for="inputStatus">Số điện thoại</label>
                                  <input type="text" class="form-control" id="sdt" disabled value="" >
                                </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <!-- <button type="button" class="btn btn-primary" onclick="return confirm_hoadon();">Xác nhận</button> -->
                            </div>
                            </form>
                          </div>
                        </div>
                      </div>
    
                  <!-- Modal -->
                  <!-- Modal đơn hàng thành viên -->
                       <div class="modal fade" id="modaltv" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Thông tin đơn hàng từ thành viên</h5>
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
                                  <label for="inputDateCreate">Khách hàng</label>
                                  <input type="text" class="form-control" id="kkhachhang" disabled value="" >
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
                              <!-- <button type="button" class="btn btn-primary" onclick="return confirm_hoadon();">Xác nhận</button> -->
                            </div>
                            </form>
                          </div>
                        </div>
                      </div>
    
                  <!-- Modal -->

                  <!-- Modal duyệt đơn hàng -->
                       <div class="modal fade" id="duyet" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Xác nhận duyệt đơn đặt hàng nông sản?</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <form action="" method="POST">
                            <div class="modal-body">
                              
                                <div id="tb1"></div>
                                <div style="display:none"><input type="text" id="mahoadon1" name="mahoadon" readonly></div>
                                <div style="display:none;"><input type="text" name="trangthai" value="1" readonly></div>
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

                  <!-- Modal xác nhận thành công -->
                       <div class="modal fade" id="thanhcong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Xác nhận đơn hàng đã giao và hoàn tất thanh toán?</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <form action="" method="POST">
                            <div class="modal-body">
                                <div id="tb2"></div>
                                <div style="display:none;"><input type="text" id="mahoadon2" name="mahoadon" readonly></div>
                                <div style="display:none;"><input type="text" name="trangthai" value="2" readonly></div>
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
                                <div style="display:none;"><input type="text" name="trangthai" value="3" readonly></div>
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
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
   </div>
 </div>

 <?php 

    if(isset($_REQUEST['submit'])){
      $mahoadon = $_REQUEST['mahoadon'];
      $trangthai = $_REQUEST['trangthai'];
      
      $xuly = $p -> xuly_hoadon($mahoadon,$trangthai);

      if ($xuly) {
        if ($trangthai == 2) {
          $_SESSION['success_hoadon'] = 2;
          //echo "<script>window.location.reload(true)</script>";
          echo "<script>window.location.href='index?qldh'</script>";
          // echo "<div class='alert alert-danger'>
          //           Xử lý đơn hàng thất bại !!<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
          //     </div>";
        }elseif($trangthai == 1){
          $_SESSION['success_hoadon'] = 1;
          echo "<script>window.location.href='index?qldh'</script>";
        }elseif ($trangthai == 3) {
          $_SESSION['success_hoadon'] = 3;
          echo "<script>window.location.href='index?qldh'</script>";
        }        
      }else{
        echo "<script>window.location.href='index?qldh'</script>";
        echo "<div class='alert alert-danger'>
                    Xử lý đơn hàng thất bại !!<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
              </div>";
      }

    }

  ?>

 <script type="text/javascript">
   function confirm_hoadon(){
            var x= confirm("Xác nhận đơn hàng?");
            if(x){
                return true;
            }
            else{
                return false;
            }
        }
 </script>
 <script>
        $(document).ready(function () {

            $('.duyet').on('blur', function () {

                $('#duyet').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#mahoadon1').val(data[0]);
                $('#tb1').html('<div>Đơn hàng có mã hóa đơn #'+data[0]+'</div>');
            });
        });
 </script>
 <script>
        $(document).ready(function () {

            $('.xacnhan').on('click', function () {

                $('#thanhcong').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#mahoadon2').val(data[0]);
                $('#tb2').html('<div>Đơn hàng có mã hóa đơn #'+data[0]+'</div>');
                
            });
            //
            $('.alert').on('click', function () {
                var clickBtnValue = $(this).val();
                data =  {'action': clickBtnValue};
                $.post("View/process_ajax/unset_data.php", data , function(data){
                    //alert(data);
                    //$("#loains").html(data);
                  });
                
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
 <script>
        $(document).ready(function () {

            $('.editbtndn').on('click', function () {

                $('#modaldn').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#mahoadon').val(data[0]);
                $('#trangthai').val(data[1]);
                //$('#hinh').html("<img src='assets/uploads/images/"+data[9]+"' height='175px' width='240px'>");
                $('#nhacungcap').val(data[2]);
                $('#khachhang').val(data[3]);
                $('#nongsan').val(data[4]);
                $('#tonghoadon').val(data[5]);
                $('#dongia').val(data[6]);
                $('#soluong').val(data[7]);
                $('#diachi').val(data[8]);
                $('#email').val(data[9]);
                $('#sdt').val(data[10]);
                // var str = $.trim(data[7]);
                // $('#mota').val(str);
                // $('#hinhanh').val(data[9]);
                // $('#hinh').html("<img src='assets/uploads/images/"+data[9]+"' height='175px' width='240px'>");
                // $('#loains').val(data[10]);
                // $('#nhacungcap').val(data[11]);
                // $('#kiemdinh').val(data[12]);
                // $('#trangthai').val(data[13]);
                // $('#gia').val(data[16]);
                // // $('#qr').val(data[17]);
                // $('#hinhqr').html("<img src='assets/public/qr_images/"+data[17]+"' height='175px' width='175px'>");
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
                $('#kkhachhang').val(data[3]);
                $('#nnongsan').val(data[4]);
                $('#ttonghoadon').val(data[5]);
                $('#ddongia').val(data[6]);
                $('#ssoluong').val(data[7]);
                $('#ddiachi').val(data[8]);
                $('#eemail').val(data[9]);
                $('#ssdt').val(data[10]);
                // $('#manongsan').val(data[0]);
                // $('#qrcode').val(data[1]);
                // $('#hinh').html("<img src='assets/uploads/images/"+data[9]+"' height='175px' width='240px'>");
                // $('#tennongsan').val(data[2]);
                // $('#soluong').val(data[3]);
                // $('#sl').val(data[4]);
                // $('#dvt').val(data[5]);
                // $('#tonggiatri').val(data[6]);
                // var str = $.trim(data[7]);
                // $('#mota').val(str);
                // $('#hinhanh').val(data[9]);
                // $('#hinh').html("<img src='assets/uploads/images/"+data[9]+"' height='175px' width='240px'>");
                // $('#loains').val(data[10]);
                // $('#nhacungcap').val(data[11]);
                // $('#kiemdinh').val(data[12]);
                // $('#trangthai').val(data[13]);
                // $('#gia').val(data[16]);
                // // $('#qr').val(data[17]);
                // $('#hinhqr').html("<img src='assets/public/qr_images/"+data[17]+"' height='175px' width='175px'>");
                //document.write($('#hinh').val(data[9]));
                //var id = $('#hinhanh').val(data[8]);
                //$.post("", {hinhanh: id}, function(data){
                  //$("#xemchitiet").html(data);
                    //alert("dd");
                //})
            });
        });
    </script>