<?php 

	include_once("controller/NhanVienPhanPhoi/cnvphanphoi.php");

	$p = new cNVPP();

	$table = $p -> select_NVPP();

?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản lý Thông Tin Nhân Viên Phân Phối</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
              <li class="breadcrumb-item active">Quản lý Nhân Viên Phân Phối</li>
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
                <h3 class="card-title">Danh sách thông tin nhân viên phân phối</h3>  | <a href="index.php?addnv">Thêm nhân viên mới</a>
                

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
                      <th>Mã nhân viên phân phối</th>
                      <th>Tên nhân viên phân phối</th>
                      <th>Số điện thoại</th>
                      <th>Địa chỉ</th>
                      <th>Ngày sinh</th>
                      <td>Hình ảnh</td>
                      <th>Email</th>
                      <th>Giới tính</th>
                      <th>Tác vụ</th>                 
                    </tr>
                  </thead>
                  <tbody>
                    
                    <?php
	                    if($table){
		                    if(mysqli_num_rows($table) > 0){
			                    while($row = mysqli_fetch_assoc($table)) {
                                    echo "<tr>";
                                    echo "<td>".$row['MaNVPP']."</td>";
                                    echo "<td>".$row['TenNVPP']."</td>";
                                    echo "<td>".$row['SDT']."</td>";
                                    echo "<td>".$row['DiaChiNha']."</td>";
                                    echo "<td>".$row['NgaySinh']."</td>";
                                    echo "<td>".$row['HinhAnh']."</td>";
                                    echo "<td>".$row['Email']."</td>";
                                    if($row['GioiTinh']==0){
                                        echo "<td>Nam</td>";
                                    }else {
                                        echo "<td>Nữ</td>";
                                    }
                                    
                                    
                                    echo "<td><a href='?updatenvpp&&MaNVPP=".$row['MaNVPP']."'><i class='fa fa-pen' aria-hidden='true'></i></a> | <a href='#'><i class='fa fa-trash' aria-hidden='true'></i></a></td>";
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
