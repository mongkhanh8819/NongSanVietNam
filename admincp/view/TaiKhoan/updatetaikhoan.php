<?php
    include("controller/TaiKhoan/ctaikhoan.php");
     $username = $_REQUEST['username'];
     $MaVaiTro=$_REQUEST['MaVaiTro'];
    echo $username;
     echo $MaVaiTro;
    $p = new ctaikhoan();
    $table = $p-> select_taikhoan_byusername($username,$MaVaiTro);
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
                    // var_dump ($table);
                      if($table){
                        if(mysqli_num_rows($table)>0){
                          while ($row=mysqli_fetch_assoc($table)) {

                             $array = array(
                               "1" => "Admin",
                               "2" => "Nhân viên phân phối",
                               "3" => "Nhà cung cấp nông sản",
                               "4" => "Khách hàng doanh nghiệp",
                               "5" => "Khách hàng thành viên"
                           );
                             echo "<tr>";
                            echo "<td>Loại tài khoản:</td>";
                            echo "<td>";
                          //  foreach($array as $key=>$a){
                            // if(in_array($a,$array)){
                              //  if($key != $row['MaVaiTro']){
                                //  echo "<input type='text' name='mavaitro'readonly value='".$key."'>".$a."";
                                // }else{
                                  // echo "<input type='text' name='mavaitro' value='".$row['MaVaiTro']."' checked='checked'>".$a."";
                                // }
                            // }
                          // }	
                          echo "<td><input type='text' class='form-control' name='loaivaitro' readonly value='" . $row['LoaiVaiTro'] . "'></td>";
                          echo "</td>";
                          echo "</tr>";
            
                            echo "</br>";
                            echo "<td>Username</td>";
                            echo "<td><input type='text' class='form-control' name='username' readonly value='" . $row['username'] . "'></td>";
                            echo "<td>Password</td>";
                            echo "<td><input type='password' class='form-control' name='password'></td>";
                            
                          }
                        }
                      }
                      
                      
                    ?>
                  <br>
                  </div>
                  
                </div>
                <button type="submit" class="btn btn-primary" name="submit" style="margin-left:45%">Submit</button>
                <button type="reset" class="btn btn-primary" name="reset">Reset</button>
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
<?php
  if(isset($_REQUEST["submit"])){
    // $MaVaiTro=$_REQUEST["mavaitro"];
    $username=$_REQUEST["username"];
    $password=$_REQUEST["password"];
    // echo $MaVaiTro;
    echo $username;
    echo $password;
    // var_dump ($password);
    // var_dump ($username);
    $p=new ctaikhoan();
    $table=$p->update_taikhoan($username,$password);
    if($table==1){
      echo "<script>alert('Cập nhật thành công')</script>";
    }else {
      echo "<script>alert('Cập nhật khong thành công')</script>";
    }
  }
?>
  