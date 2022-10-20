<?php 

	include_once("controller/NongSan/cnongsan.php");

	$p = new cNongSan();

	$table = $p -> get_nongsan_dang_ban();

?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản lý nông sản</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
              <li class="breadcrumb-item active">Quản lý Nông Sản</li>
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
                <h3 class="card-title">Danh sách nông sản của tất cả nhà cung cấp</h3>
                

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
                      <th>Tên nông sản</th>
                      <th>Hình ảnh</th>
                      <th>Trạng thái kiểm định</th>
                      <th>Trạng thái đăng tin</th> 
                      <th>Nhà cung cấp nông sản</th>
                      <th>Action</th>            
                    </tr>
                  </thead>
                  <tbody>
                    
                    <?php
                    // echo "<pre>";
                    // var_dump(mysqli_fetch_assoc($table));
                    // echo "</pre>";
	                    if($table){
		                    if(mysqli_num_rows($table) > 0){
			                    while($row = mysqli_fetch_assoc($table)) {
                                    echo "<tr>";
                                    echo "<td>".$row['TenNongSan']."</td>";
                                    echo "<td><img src='../assets/uploads/images/".$row['HinhAnh']."' width='100px' height='100px'></img></td>";
                                    echo "<td>".$row['TrangThaiKiemDinh']."</td>";
                                    echo "<td>".$row['TrangThaiNongSan']."</td>";
                                    echo "<td>".$row['MaNCC']."</td>";
                                    echo "<td><button type='submit' name='duyet' class='btn btn-primary duyetbtn'>Duyệt bài đăng</button> <button type='submit' name='update' class='btn btn-primary editbtn'>Chi tiết</button> <button type='submit' name='delete' class='btn btn-danger deletebtn deletebtn'>Xóa</button> </td>";
                                    echo "</tr>";
			                    }
		                    }
	                    }

                    ?>
                  
                  
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        </div>
        <!-- /.row -->

        <!--  -->
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




      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
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
