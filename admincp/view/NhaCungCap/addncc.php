 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản lý Thông Tin nhà cung cấp</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
              <li class="breadcrumb-item active">Quản lý nhà cung cấp</li>
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
              <h3 style="text-align:center">Thêm Nhà Cung Cấp</h3>
              <form action="#">
                <div class="row">
                  <div class="col">
                    <td>Mã nhà cung cấp</td>
                    <input type="text" class="form-control" id="mancc" placeholder="Enter Mã nhà cung cấp" name="mancc"></br>
                    <td>Tên nhà cung cấp</td>
                    <input type="text" class="form-control" id="tenncc" placeholder="Enter Tên nhà cung cấp" name="tenncc"></br>
                    <td>Tên người đại diện</td>
                    <input type="text" class="form-control" id="tenndd" placeholder="Enter Tên người đại diện" name="tenndd"></br>
                    <td>Hình ảnh</td>
                    <input type="file" class="form-control" id="hinhanh" placeholder="Chọn hình ảnh" name="hinhanh"></br>
                    <td>Địa chỉ nhà cung cấp</td>
                    <input type="text" class="form-control" id="diachincc" placeholder="Enter Địa chỉ nhà cung cấp" name="diachincc"></br>
                    <td>Địa chỉ người đại diện</td>
                    <input type="text" class="form-control" id="diachindd" placeholder="Enter Địa chỉ người đại diện" name="diachindd"></br>
                    <td>Số điện thoại nhà cung cấp</td>
                    <input type="text" class="form-control" id="sdtncc" placeholder="Enter Số điện thoại nhà cung cấp" name="sdtncc"></br>
                    <td>Số điện thoại người đại diện</td>
                    <input type="text" class="form-control" id="sdtndd" placeholder="Enter Số điện thoại người đại diện" name="sdtndd"></br>
                    <td>Email nhà cung cấp</td>
                    <input type="mail" class="form-control", id="emailncc", placeholder="Enter email nhà cung cấp nông sản" name="emailncc"></br>
                    <td>Email người đại diện</td>
                    <input type="mail" class="form-control", id="emailndd", placeholder="Enter email người đại diện" name="emailndd"></br>
                    <td>Username</td>
                    <input type="text" class="form-control" id="username" placeholder="Enter Username" name="username"></br>
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