<?php
    include("controller/KhachHangDoanhNghiep/cdoanhnghiep.php");
     $MaDN = $_REQUEST['MaDN'];
    //echo $Mabv;
    $p = new cKHDN();
    $table = $p-> select_DN_byid($MaDN);
?> 
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản lý Thông Tin Doanh Nghiệp</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
              <li class="breadcrumb-item active">Quản lý khách hàng</li>
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
              <h3 style="text-align:center">Cập nhật thông tin doanh nghiệp</h3>
              <form action="#">
                <div class="row">
                  <div class="col">
                    <?php
                      if($table){
                        if(mysqli_num_rows($table)>0){
                          while ($row=mysqli_fetch_assoc($table)) {
                            echo "<td>Mã doanh nghiệp</td>";
                            echo "<td><input type='text'class='form-control' name='txtMaDN' value='" . $row['MaDN'] . "'></td>";
                            echo "<td>Tên doanh nghiệp</td>";
                            echo "<td><input type='text'class='form-control' name='txtTenDN' value='" . $row['TenDoanhNghiep'] . "'></td>";
                            echo "<td> Số điện thoại </td>";
                            echo "<td><input type='text' class='form-control' name='txtsdt' value='" . $row['SDT'] . "'></td>";
                            echo "<td>Địa chỉ</td>";
                            echo "<td><input type='text'class='form-control name='txtDiaChi' value='" . $row['DiaChi'] . "'></td>";
                            echo "<td>Email</td>";
                            echo "<td><input type='text' class='form-control name='txtEmail' value='" . $row['Email'] . "'></td>";
                            echo "<td>Mã số thuế</td>";
                            echo "<td><input type='text' class='form-control' name='txtMST' value='" . $row['MST'] . "'></td>";
                            echo "<td>Ngày Thành Lập</td>";
                            echo "<td><input type='text'class='form-control' name='txtNgayThanhLap' value='" . $row['NgayThanhLap'] . "'></td>";
                            
                            echo "<td>Giới thiệu</td>";
                            // echo "<td><input type='text'class='form-control' name='txtsl' value='" . $row['GioiThieu'] . "' ></td>";
                            echo "<textarea type='text' name='txtGioiThieu' class='form-control'cols='80' rows='4' style='border-radius:10px'>'" . $row['GioiThieu'] . "'</textarea>";
                            
                            echo "<td>Tên người đại diện</td>";
                            echo "<td><input type='text'class='form-control' name='txtTen_NDD' value='" . $row['TenNguoiDaiDien'] . "'></td>";
                            
                            echo "<td>Địa chỉ người đại diện</td>";
                            echo "<td><input type='text' class='form-control' name='txtDiaChi_NDD' value='" . $row['DiaChi_NDD'] . "'></td>";  
                            
                            echo "<td>Số điện thoại người dại diện</td>";
                            echo "<td><input type='text'class='form-control' name='txtSDT_NDD' value='" . $row['SDT_NDD'] . "' ></td>";
                            
                            echo "<td>Email người dại diện</td>";
                            echo "<td><input type='text'class='form-control' name='txtEmail_NDD' value='" . $row['Email_NDD'] . "'></td>";
                            
                            echo "<td>Username</td>";
                            echo "<td><input type='text'class='form-control' name='txtUsername' value='" . $row['username'] . "'></td>";
                            
                            echo "<td>Mã xã</td>";
                            ?>
                             <td><select class='form-control' name='tinh' id='Tinh' ><option value='".$row[]."'>Chưa chọn Tỉnh/Thành</option></select></td>
                            <?php
                            ?>
                            <select class='form-control' name='huyen' id='Huyen'><option value=''>Chưa chọn Huyện/Quận</option> </select>
                            <?php
                            ?>
                            <td><select class='form-control' name='xa' id='Xa'>
                              <option value='<?php echo $row['MaXa'] ?>' selected><?php echo $row['MaXa']; ?></option>
                            </select></td>
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