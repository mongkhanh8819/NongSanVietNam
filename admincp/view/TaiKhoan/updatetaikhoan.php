<?php
    include("controller/TaiKhoan/ctaikhoan.php");
     $username = $_REQUEST['username'];
    echo $username;
    $p = new ctaikhoan();
    $table = $p-> select_taikhoan_byusername($username);
?> 
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản lý Thông Tin Tài Khoản</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
              <li class="breadcrumb-item active">Quản lý Thông Tin Tài Khoản</li>
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
              <h3 style="text-align:center">Cập nhật thông tin tài khoản</h3>
              <form action="#" method="post">
                <div class="row">
                  <div class="col">
                    <?php
                      if($table){
                        if(mysqli_num_rows($table)>0){
                          while ($row=mysqli_fetch_assoc($table)) {
                            echo "<td>Vai trò</td>";
                            // echo "<td><input type='text'class='form-control' name='txtNVPP' value='" . $row['MaVaiTro'] . "'></td>";
                            echo "<td>";
                            echo "<select name='mavaitro' id='mavaitro' class='form-control'>";
                            echo "<option value='2'>Nhân viên phân phối</option>";
                            echo "<option value='3'>Nhà cung cấp nông sản</option>";
                            echo "<option value='4'>Khách hàng doanh nghiệp</option>";
                            echo "<option value='5'>Khách hàng thành viên</option>";
                            echo "</select>";
                            echo "</td>";
                            echo "<td>Username</td>";
                            echo "<td><input type='text'class='form-control' name='username' value='" . $row['username'] . "'></td>";
                            echo "<td>Password</td>";
                            echo "<td><input type='text'class='form-control name='password' value='" . $row['password'] . "'></td>";
                            
                          }
                        }
                      }
                      
                      
                    ?>
                  <br>
                  </div>
                  
                </div>
                <button type="submit" class="btn btn-primary" name="submit" style="margin-left:45%">Submit</button>
                <button type="reset" class="btn btn-primary" name="reset">Reset</button>
                <!-- <input type="submit" value="Thêm Doanh Nghiệp" style="text-align:center"> -->
              </form>
             
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
  