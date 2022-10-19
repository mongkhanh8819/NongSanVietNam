<?php 

	include_once("controller/TrungTamPhanPhoi/ctrungtamphanphoi.php");

	$p = new cTTPP();

	$table = $p -> select_trungtamphanphoi();

?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản lý Thông Tin Trung Tâm Phân Phối</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
              <li class="breadcrumb-item active">Quản lý Trung Tâm Phân Phối</li>
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
                <h3 class="card-title">Danh sách thông tin trung tâm phân phối</h3>  | <a href="index.php?addttpp">Thêm trung tâm mới</a>
                

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
                      <th>Mã trung tâm</th>
                      <th>Tên trung tâm</th>
                      <!-- <th>Địa Chỉ</th> -->
                      <th>Chức Năng</th>
                      <!-- <th>Ngày sinh</th> -->
                      <!-- <td style="font-weight:bold">Hình ảnh</td> -->
                      <th>Người đại diện</th>
                      <!-- <th>Giới tính</th> -->
                      <th>Tác vụ</th>                 
                    </tr>
                  </thead>
                  <tbody>
                    
                    <?php
	                    if($table){
		                    if(mysqli_num_rows($table) > 0){
			                    while($row = mysqli_fetch_assoc($table)) {
                                    echo "<tr>";
                                    echo "<td>".$row['MaTrungTamPP']."</td>";
                                    echo "<td>".$row['TenTrungTam']."</td>";
                                    // echo "<td>".$row['DiaChi']."</td>";
                                    echo "<td>".$row['ChucNang']."</td>";
                                    echo "<td>".$row['NguoiDaiDien']."</td>";
                                    // echo "<td><img src='assets/uploads/images/".$row['HinhAnh']."' alt='' height='100px' width='150px'></td>";
                                    // echo "<td>".$row['Email']."</td>";
                                    // if($row['GioiTinh']==0){
                                        // echo "<td>Nam</td>";
                                    // }else {
                                        // echo "<td>Nữ</td>";
                                    // }
                                    
                                    
                                    echo "<td><a href='?updatettpp&&MaTrungTamPP=".$row['MaTrungTamPP']."'><i class='fa fa-pen' aria-hidden='true'></i></a> | <a href='#'><i class='fa fa-trash' aria-hidden='true'></i></a></td>";
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
