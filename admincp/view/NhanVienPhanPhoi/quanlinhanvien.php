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
              <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
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
                      <th style="text-align:center">Mã nhân viên phân phối</th>
                      <th style="text-align:center">Tên nhân viên phân phối</th>
                      <th style="text-align:center">Số điện thoại</th>
                      <th style="text-align:center">Địa chỉ</th>
                      <!-- <th>Ngày sinh</th> -->
                      <td style="font-weight:bold;text-align:center">Hình ảnh</td>
                      <!-- <th>Email</th> -->
                      <th style="text-align:center">Giới tính</th>
                      <th style="text-align:center">Tác vụ</th>                 
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
                                    // echo "<td>".$row['NgaySinh']."</td>";
                                    if ($row['HinhAnh']== NULL) {
                                      echo "<td><img src='assets/uploads/images/user.png' alt='' height='100px' width='150px'></td>";
                                    }else {
                                      echo "<td><img src='assets/uploads/images/".$row['HinhAnh']."' alt='' height='100px' width='150px'></td>";
                                    }
                                    
                                    // echo "<td>".$row['Email']."</td>";
                                    if($row['GioiTinh']==0){
                                        echo "<td>Nam</td>";
                                    }else {
                                        echo "<td>Nữ</td>";
                                    }
                                    
                                    
                                    echo "<td><a href='?updatenvpp&&MaNVPP=".$row['MaNVPP']."'><i class='fa fa-pen' aria-hidden='true'></i></a> | <a href='?delnvpp&&MaNVPP=".$row['MaNVPP']."' onclick='return confirm_delete();'><i class='fa fa-trash' aria-hidden='true'></i></a></td>";
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
