<?php
    include("controller/NhanVienPhanPhoi/cnvphanphoi.php");
     $MaNVPP = $_REQUEST['MaNVPP'];
    echo $MaNVPP;
    $p = new cNVPP();
    $table = $p-> select_nhanvien_byid($MaNVPP);
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
              <h3 style="text-align:center">Cập nhật thông tin nhân viên phân phối</h3>
              <form action="#">
                <div class="row">
                  <div class="col">
                    <?php
                      if($table){
                        if(mysqli_num_rows($table)>0){
                          while ($row=mysqli_fetch_assoc($table)) {
                            echo "<td>Mã nhân viên phân phối</td>";
                            echo "<td><input type='text'class='form-control' name='txtNVPP' value='" . $row['MaNVPP'] . "'></td>";
                            echo "<td>Tên nhân viên phân phối</td>";
                            echo "<td><input type='text'class='form-control' name='txttenNVPP' value='" . $row['TenNVPP'] . "'></td>";
                            echo "<td>Số điện thoại</td>";
                            echo "<td><input type='text'class='form-control name='sdt' value='" . $row['SDT'] . "'></td>";
                            echo "<td>Địa chỉ</td>";
                            echo "<td><input type='text'class='form-control name='diachi' value='" . $row['DiaChiNha'] . "'></td>";
                            echo "<td>Ngày sinh</td>";
                            echo "<td><input type='date'class='form-control name='ngaysinh' value='" . $row['NgaySinh'] . "'></td>";
                            echo "<td>Hình Ảnh</td>";
                            echo "<td><input type='file'class='form-control name='HinhAnh' value='" . $row['HinhAnh'] . "'></td>";
                            echo "<td>Email</td>";
                            echo "<td><input type='text'class='form-control name='email' value='" . $row['Email'] . "'></td>";
                            echo "<td>Giới tính</td>";
                            echo "<td><input type='text'class='form-control name='gioitinh' value='" . $row['GioiTinh'] . "'></td>";
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
                            echo "<td>Mã trung tâm phân phối";
                            echo "<td><input type='text'class='form-control name='textmattpp' value='" . $row['MaTrungTamPP'] . "'></td>";
                            echo "<td>Username";
                            echo "<td><input type='text'class='form-control name='textusername' value='" . $row['Username'] . "'></td>";
                            
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