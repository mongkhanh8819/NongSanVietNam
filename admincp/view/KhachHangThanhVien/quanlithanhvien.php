<?php 

	include_once("controller/KhachHangThanhVien/cthanhvien.php");

	$p = new cKHTV();

	$table = $p -> select_KHTV();

?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản lý Thông Tin Thành Viên</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
              <li class="breadcrumb-item active">Quản lý khách hàng thành viên<nav></nav></li>
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
                <h3 class="card-title">Danh sách thông tin thành viên</h3>  | <a href="index.php?addtv">Thêm thành viên mới</a>
                

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
                      <th style="text-align:center">Mã KHTV</th>
                      <th style="text-align:center">Tên KHTV</th>
                      <!-- <th>Số điện thoại</th> -->
                      <th style="text-align:center">Địa chỉ</th>
                      <!-- <th style="text-align:center">Ngày sinh</th> -->
                      <th style="text-align:center">Hình ảnh</th>
                      <!-- <th style="text-align:center">Email</th> -->
                      <!-- <th style="text-align:center">Giới tính</th> -->
                      <th style="text-align:center">Tác vụ</th>                 
                    </tr>
                  </thead>
                  <tbody>
                    
                    <?php
	                    if($table){
		                    if(mysqli_num_rows($table) > 0){
			                    while($row = mysqli_fetch_assoc($table)) {
                                    echo "<tr>";
                                    echo "<td style='text-align:center'>".$row['MaKHTV']."</td>";
                                    echo "<td style='text-align:center'>".$row['Ten_KHTV']."</td>";
                                    // echo "<td>".$row['SDT']."</td>";
                                    echo "<td style='text-align:center'>".$row['DiaChi']."</td>";
                                    // echo "<td>".$row['NgaySinh']."</td>";
                                    // echo "<td style='text-align:center'><img src='assets/uploads/images/".$row['HinhAnh']."' alt='' height='100px' width='150px'></td>";
                                    if ($row['HinhAnh']== NULL) {
                                      echo "<td style='text-align:center'><img src='assets/uploads/images/user.png' alt='' height='100px' width='150px'></td>";
                                    }else {
                                      echo "<td style='text-align:center'><img src='assets/uploads/images/".$row['HinhAnh']."' alt='' height='100px' width='150px'></td>";
                                    }
                                    // echo "<td>".$row['Email']."</td>";
                                    // if($row['GioiTinh']==0){
                                    //     echo "<td>Nam</td>";
                                    // }else {
                                    //     echo "<td>Nữ</td>";
                                    // }
                                    
                                    
                                    echo "<td style='text-align:center'><a href='?updatetv&&MaKHTV=".$row['MaKHTV']."'><i class='fa fa-pen' aria-hidden='true'></i></a> | <a href='?deltv&&MaKHTV=".$row['MaKHTV']."' onclick='return confirm_delete();'><i class='fa fa-trash' aria-hidden='true'></i></a></td>";
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
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
