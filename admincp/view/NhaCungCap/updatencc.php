<?php
    include("controller/NhaCungCap/cNcc.php");
     $MaNCC = $_REQUEST['MaNCC'];
    echo $MaNCC;
    $p = new cNcc();
    $table = $p-> select_NCC_byid($MaNCC);
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
              <h3 style="text-align:center">Cập nhật thông tin nhà cung cấp</h3>
              <form action="#">
                <div class="row">
                  <div class="col">
                    <?php
                      if($table){
                        if(mysqli_num_rows($table)>0){
                          while ($row=mysqli_fetch_assoc($table)) {
                            echo "<td>Mã nhà cung cấp</td>";
                            echo "<td><input type='text'class='form-control' name='txtNCC' value='" . $row['MaNCC'] . "'></td>";
                            echo "<td>Tên nhà cung cấp</td>";
                            echo "<td><input type='text'class='form-control' name='txttenNCC' value='" . $row['TenNhaCungCap'] . "'></td>";
                            echo "<td>Tên người đại diện</td>";
                            echo "<td><input type='text' class='form-control' name='txttenNDD' value='" . $row['TenNguoiDaiDien'] . "'></td>";
                            echo "<td>Hình Ảnh</td>";
                            echo "<td><input type='text'class='form-control name='txthinhanh' value='" . $row['HinhAnh'] . "'></td>";
                            echo "<td>Địa chỉ nhà cung cấp</td>";
                            echo "<td><input type='text'class='form-control name='txtdiachincc' value='" . $row['DiaChi_NCC'] . "'></td>";
                            echo "<td>Địa chỉ người đại diện</td>";
                            echo "<td><input type='text'class='form-control name='txtdiachindd' value='" . $row['DiaChi_NDD'] . "'></td>";
                            echo "<td>Số điện thoại nhà cung cấp</td>";
                            echo "<td><input type='text'class='form-control name='sdtncc' value='" . $row['SDT_NCC'] . "'></td>";
                            echo "<td>Số điện thoại người đại diện</td>";
                            echo "<td><input type='text'class='form-control name='sdtndd' value='" . $row['SDT_NDD'] . "'></td>";
                            echo "<td>Email nhà cung cấp</td>";
                            echo "<td><input type='text' class='form-control name='txtEmailncc' value='" . $row['EmailNCC'] . "'></td>";
                            echo "<td>Email người đại diện</td>";
                            echo "<td><input type='text' class='form-control name='txtEmailndd' value='" . $row['EmailNDD'] . "'></td>";
                            echo "<td>Username</td>";
                            echo "<td><input type='text'class='form-control' name='txtUsername' value='" . $row['username'] . "'></td>";
                            echo "<td>Mã xã</td>";
                            ?>
                              <td>
                                <select class='form-control' name='tinh' id='Tinh' >
                                  <option value='".$row[]."'>Chưa chọn Tỉnh/Thành</option>
                                  
                                </select>
                              </td>
                            <?php
                            ?>
                            <select class='form-control' name='huyen' id='Huyen'><option value=''>Chưa chọn Huyện/Quận</option> </select>
                            <?php
                            ?>
                            <td>
                                <select class='form-control' name='xa' id='Xa'>
                                  <option value='<?php echo $row['MaXa'] ?>' selected><?php echo $row['MaXa']; ?></option>
                                  
                                </select>
                            </td>
                          </br>
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
                            <?php
                            
                          }
                        }
                      }
                      
                      
                    ?>
                  </div>
                  
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