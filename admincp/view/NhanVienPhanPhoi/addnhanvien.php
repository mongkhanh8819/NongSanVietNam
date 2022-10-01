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
              <li class="breadcrumb-item active">Quản lý nhân viên phân phối</li>
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
                <!-- <h3 class="card-title">Danh sách thông tin khách hàng</h3>  | <a href="#">Thêm khách hàng mới</a> -->

                <!-- <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>-->
              <!-- /.card-header -->
              <h3 style="text-align:center">Thêm Nhân Viên Phân Phối</h3>
              <form action="#">
                <div class="row">
                  <div class="col">
                    <td>Mã nhân viên phân phối</td>
                    <input type="text" class="form-control" id="manvpp" placeholder="Enter Mã nhân viên phân phối" name="manvpp"></br>
                    <td>Tên nhân viên phân phối</td>
                    <input type="text" class="form-control" id="tennvpp" placeholder="Enter Tên nhân viên phân phối" name="tennvpp"></br>
                    <td>Số điện thoại</td>
                    <input type="text" class="form-control" id="sdt" placeholder="Enter Số điện thoại" name="sdt"></br>
                    <td>Địa chỉ</td>
                    <input type="text" class="form-control" id="diachi" placeholder="Enter Địa chỉ" name="diachi"></br>
                    <td>Ngày sinh</td>
                    <input type="date" class="form-control" id="ngaysinh" placeholder="Enter Ngày sinh" name="ngaysinh"></br>
                    <td>Hình ảnh</td>
                    <input type="file" class="form-control" id="hinhanh" placeholder="Chọn hình ảnh" name="hinhanh"></br>
                    <td>Email</td>
                    <input type="text" class="form-control" id="email" placeholder="Enter email" name="email"></br>
                    <td>Giới tính</td>
                    <input type="text" class="form-control" id="gioitinh" placeholder="Enter Giới tính" name="gioitinh      "></br>
                    
                    <td>Mã xã</td>
                    <!-- <input type="text" class="form-control" id="madn" placeholder="Enter Mã xã" name="madn"> -->
                    <div class="input-group mb-3">
                      <select class="form-control" name="tinh" id="tinh" required>
                        <option value="">Chưa chọn Tỉnh/Thành</option>
                        <?php include_once("View/process_ajax/tinh.php"); ?>  
                      </select> 
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <span class="fas fa-industry"></span>
                        </div>
                      </div>
                    </div>
                    <div class="input-group mb-3">
                      <select class="form-control" name="huyen" id="huyen" required>
                        <option value="">Chưa chọn Huyện/Quận</option>  
                      </select> 
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <span class="fas fa-industry"></span>
                        </div>
                      </div>
                    </div>
                    <div class="input-group mb-3">
                      <select class="form-control" name="xa" id="xa" required>
                        <option value="">Chưa chọn Xã/Phường</option>  
                      </select> 
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <span class="fas fa-industry"></span>
                        </div>
                      </div>
                    </div>
                    <td>Mã trung tâm phân phối<p></p></td>
                    <input type="text" class="form-control" id="mattpp" placeholder="Enter Mã trung tâm phân phối" name="mattpp"></br>

                    <td>Username</td>
                    <input type="text" class="form-control" id="username" placeholder="Enter Username" name="username"></br>

                  </div>

                   
                    <!--  -->
                 
                </div>
                <button type="submit" class="btn btn-primary" style="margin-left:45%">Submit</button>
                <button type="reset" class="btn btn-primary" >Reset</button>
                <!-- <input type="submit" value="Thêm Doanh Nghiệp" style="text-align:center"> -->
              </form>
              <!-- <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Mã doanh nghiệp</th>
                      <th>Tên doanh nghiệp</th>
                      <th>Số điện thoại</th>
                      <th>Địa chỉ</th>
                      <th>Email</th>
                      <th>Mã số thuế</th>
                      <th>Ngày lập </th>
                      <th>Giới thiệu</th>
                      <th>Tên người đại diện</th>
                      <th>Tác vụ</th>                 
                    </tr>
                  </thead>
                  <tbody>
                  
                  </tbody>
                </table>
              </div>-->
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