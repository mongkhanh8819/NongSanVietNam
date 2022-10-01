<?php 

	include_once("controller/NhaCungCap/cNCC.php");

	$p = new cNCC();

	$table = $p -> select_NCC();

?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản lý Thông Tin Nhà Cung Cấp</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
              <li class="breadcrumb-item active">Quản lý Nhà Cung Cấp</li>
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
                <h3 class="card-title">Danh sách thông tin nhà cung cấp</h3>  | <a href="index.php?addncc">Thêm nhà cung cấp mới</a>
                

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
                      <th>Mã NCC</th>
                      <th>Tên NCC</th>
                      <th>Tên người đại diện</th>
                      <th>Hình ảnh</th>
                      <th>Địa chỉ_NCC</th>
                      <td>Địa chỉ_NDD</td>
                      <th>SDT_NCC</th>
                      <th>SDT_NDD</th>
                      <th>Email_NCC</th>
                      <th>Email_NDD</th>
                      <th>Tác vụ</th>                 
                    </tr>
                  </thead>
                  <tbody>
                    
                    <?php
	                    if($table){
		                    if(mysqli_num_rows($table) > 0){
			                    while($row = mysqli_fetch_assoc($table)) {
                                    echo "<tr>";
                                    echo "<td>".$row['MaNCC']."</td>";
                                    echo "<td>".$row['TenNhaCungCap']."</td>";
                                    echo "<td>".$row['TenNguoiDaiDien']."</td>";
                                    echo "<td>".$row['HinhAnh']."</td>";
                                    echo "<td>".$row['DiaChi_NCC']."</td>";
                                    echo "<td>".$row['DiaChi_NDD']."</td>";
                                    echo "<td>".$row['SDT_NCC']."</td>";
                                    echo "<td>".$row['SDT_NDD']."</td>";
                                    echo "<td>".$row['EmailNCC']."</td>";
                                    echo "<td>".$row['EmailNDD']."</td>";
                                    echo "<td><a href='?updatencc&&MaNCC=".$row['MaNCC']."'><i class='fa fa-pen' aria-hidden='true'></i></a> | <a href='#'><i class='fa fa-trash' aria-hidden='true'></i></a></td>";
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


