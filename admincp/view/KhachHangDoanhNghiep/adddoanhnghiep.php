 <?php
  include_once("controller/TaiKhoan/ctaikhoan.php");
  include_once("controller/KhachHangDoanhNghiep/cdoanhnghiep.php");
  $a=new ctaikhoan();
  //$dn = new cKHDN();
  
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
              <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
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
              <h3 style="text-align:center">Thêm Doanh Nghiệp</h3>
              <form action="#" method='post'>
                <div class="row">
                  <div class="col-md-4">
                    <td>Mã doanh nghiệp</td>
                    <input type="text" class="form-control" id="madn" placeholder="Enter Mã doanh nghiệp" name="madn"></br>
                    <td>Tên doanh nghiệp</td>
                    <input type="text" class="form-control" id="tendn" placeholder="Enter Tên doanh nghiệp" name="tendn"></br>
                    
                    <td>Địa chỉ</td>
                    <input type="text" class="form-control" id="diachi" placeholder="Enter Địa chỉ" name="diachi"></br>
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
                    <br>
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
                    <br>
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
                  <div class="col-md-4">
                    <td>Số điện thoại</td>
                    <input type="text" class="form-control" id="sdt" placeholder="Enter Số điện thoại" name="sdt"></br>
                    <td>Email</td>
                    <input type="text" class="form-control" id="email" placeholder="Enter Email" name="email"></br>
                    <td>Mã số thuế</td>
                    <input type="text" class="form-control" id="mst" placeholder="Enter Mã số thuế" name="mst"></br>
                    
                    <td>Ngày thành lập</td>
                    <input type="date" class="form-control" id="ngaythanhlap" placeholder="Enter Ngày thành lập" name="ngaythanhlap"></br>
                    <td>Giới thiệu</td>
                    <textarea name="gioithieu" id="gioithieu" cols="50" rows="5" placeholder="Enter Giới thiệu thông tin doanh nghiệp" style="border-radius:10px"></textarea></br></br>

                  </div>
                  <div class="col-md-4">
                    <td>Tên người đại diện</td>
                    <input type="text" class="form-control" id="tenndd" placeholder="Enter Tên người đại diện" name="tenndd"></br>
                    <td>Địa chỉ người đại diện</td>
                    <input type="text" class="form-control" id="diachindd" placeholder="Enter Địa chỉ người đại diện" name="diachindd"></br>
                    <td>Số điện thoại người đại diện</td>
                    <input type="text" class="form-control" id="sdtndd" placeholder="Enter Số điện thoại người đại diện" name="sdtndd"></br>  
                    <td>Email người đại diện</td>
                    <input type="text" class="form-control" id="emailndd" placeholder="Enter Email người đại diện" name="emailndd"></br>
                    <td>Username</td>
                    <input type="text" class="form-control" id="username" placeholder="Enter Username" name="username"></br> 
                    <!-- <select name="username" id="username" class="form-control"> -->
                      <!-- <option value="">Chọn username -->
                        <!-- <?php 
                          // if($danhsachtaikhoan){
                            // if(mysqli_num_rows($danhsachtaikhoan)){
                            // while($row1 = mysqli_fetch_assoc($danhsachtaikhoan)){
                                // ?>
                                <option value="<?php echo $row1['username']; ?>" <?php if(isset($_POST['username'])&&$_POST['username']==$row1['username']) echo "selected " ?>><?php echo $row1['username'] ?></option>
                                <?php 
                            // }
                            // }
                        // }
                        ?>
                      </option>
                    </select>-->
                    <!-- <td>Password</td> -->
                    <!-- <input type="text" class="form-control" id="password" placeholder="Enter Password" name="password"></br> -->
                    
                  </div>
                </div>
                <button type="submit" class="btn btn-primary" name="submit" style="margin-left:45%">Thêm doanh nghiệp</button>
                <!-- <button type="submit" class="btn btn-primary" name="reset" >Reset</button> -->
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
  <?php
    if(isset($_REQUEST["submit"])){
      $MaDN=$_REQUEST["madn"];
      $TenDoanhNghiep=$_REQUEST["tendn"];
      $SDT=$_REQUEST["sdt"];
      $DiaChi=$_REQUEST["diachi"];
      $Email=$_REQUEST["email"];
      $MST=$_REQUEST["mst"];
      $NgayThanhLap=$_REQUEST["ngaythanhlap"];
      $GioiThieu=$_REQUEST["gioithieu"];
      $TenNguoiDaiDien=$_REQUEST["tenndd"];
      $DiaChi_NDD=$_REQUEST["diachindd"];
      $SDT_NDD=$_REQUEST["sdtndd"];
      $Email_NDD=$_REQUEST["emailndd"];
      $username=$_REQUEST["username"];
      // $password=$_REQUEST["password"];
      $MaXa=$_REQUEST["xa"];
      $MaVaiTro=4;

      $tk= new cTaikhoan();
      $khdn= new cKHDN();
      if($username !=""){
        $insert=$tk->add_taikhoan($MaVaiTro, $username);
        if($insert==1){
          $insert=$khdn->add_DN($MaDN, $TenDoanhNghiep, $SDT, $DiaChi, $Email, $MST, $NgayThanhLap, $GioiThieu, $TenNguoiDaiDien, $DiaChi_NDD, $SDT_NDD, $Email_NDD,$username, $MaXa);
          if($insert==1){
            echo "<script>alert('Thêm thành công');</script>";
            // echo "<script>window.location.href='?qlkhdn'</script>";
          }else {
            echo "<script>alert('Thêm không thành công');</script>";
            // echo "<script>window.location.href='?qlkhdn'</script>";
          }
          
        }

      }else{
          $insert=$khdn->add_DN($MaDN, $TenDoanhNghiep, $SDT, $DiaChi, $Email, $MST, $NgayThanhLap, $GioiThieu, $TenNguoiDaiDien, $DiaChi_NDD, $SDT_NDD, $Email_NDD,$username, $MaXa);
          if($insert==1){
            echo "<script>alert('Thêm thành công');</script>";
            // echo "<script>window.location.href='?qlkhdn'</script>";
          }else {
            echo "<script>alert('Thêm không thành công');</script>";
            // echo "<script>window.location.href='?qlkhdn'</script>";
          }
          
      }
    }

  ?>