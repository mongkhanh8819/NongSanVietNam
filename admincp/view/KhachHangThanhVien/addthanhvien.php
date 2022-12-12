 <?php
  include_once("controller/KhachHangThanhVien/cthanhvien.php");
  include_once("controller/TaiKhoan/ctaikhoan.php");
  $a=new ctaikhoan();
 ?>
 
 <script>
  $(document).ready(function(){
            function kiemsdt(){
                var sdt=$("#sdt").val();
                regsdt=/^\+?(0[389][0-9]{8})$/;

                if(regsdt.test(sdt))
                {
                    $("#Sodienthoai").html("");
                    return true;
                }
                else
                {
                    $("#Sodienthoai").html("Số điện thoại phải đủ 10 chữ số và bắt đầu 03,08,09 ");
                    return false;
                }
            }
            $("#sdt").blur(kiemsdt);

            
            
            
            
            

        })
 </script>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản lý Thông Tin Thành Viên</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
              <li class="breadcrumb-item active">Quản lý khách hàng thành viên</li>
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
              <h3 style="text-align:center">Thêm Thành Viên</h3>
              <form action="#" method="post" enctype="multipart/form-data">
                <div class="row">
                 
                    <div class="col-md-6">
                      <!-- <td>Mã Thành Viên</td> -->
                      <!-- <input type="text" class="form-control" id="matv" placeholder="Enter Mã thành viên" name="matv"></br> -->
                      <td>Tên Thành Viên</td>
                      <input type="text" class="form-control" id="tentv" placeholder="Enter Tên thành viên" name="tentv">
                     
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
                    <div class="col-md-6">
                      <td>Số điện thoại</td>
                      <input type="text" class="form-control" id="sdt" placeholder="Enter Số điện thoại" name="sdt">
                      <span id="Sodienthoai" style="color:red;"></span></br>
                      <td>Ngày sinh</td>
                      <input type="date" class="form-control" id="ngaysinh" placeholder="Enter Ngày sinh" name="ngaysinh"></br>
                      <!-- <td>Hình ảnh</td> -->
                      <!-- <input type="file" class="form-control" id="ffile" placeholder="Enter Hình ảnh" name="hinhanh"></br> -->
                      <td>Email</td>
                      <input type="text" class="form-control" id="email" placeholder="Enter Email" name="email"></br>
                      <td>Giới tính</td>
                      <td>
                      <select name="gioitinh" id="gioitinh" class="form-control">
                        <option value="0">Nam</option>
                        <option value="1">Nữ</option>
                      </select>
                      </td> 
                      <Br>
                      <td>Username</td>
                      <input type="text" class="form-control" id="username" placeholder="Enter Username" name="username"></br>
                    </div>
                    
                    <!-- <td>Password</td> -->
                    <!-- <input type="text" class="form-control" id="password" placeholder="Enter Password" name="password"></br> -->
                   
                    

                  
                 

      
                 
                </div>
                <button type="submit" class="btn btn-primary" name="submit" style="margin-left:45%">Thêm Thành Viên</button>
                <!-- <button type="reset" class="btn btn-primary" >Reset</button> -->
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
    // $MaKHTV=$_REQUEST["matv"];
    $Ten_KHTV=$_REQUEST["tentv"];
    $SDT=$_REQUEST["sdt"];
    $DiaChi=$_REQUEST["diachi"];
    $NgaySinh=$_REQUEST["ngaysinh"];
    $Email=$_REQUEST["email"];
    $GioiTinh=$_REQUEST["gioitinh"];
    $username=$_REQUEST["username"];
    $MaVaiTro=5;
    // $password=$_REQUEST["password"];
    $MaXa=$_REQUEST["xa"];
    $tk= new cTaikhoan();
    $KHTV= new cKHTV();
    if($username !=""){
      $insert=$tk->add_taikhoan($MaVaiTro, $username);
      if($insert=1){
        $insert=$KHTV->add_thanhvien($Ten_KHTV, $SDT, $DiaChi, $NgaySinh, $Email, $GioiTinh, $username, $MaXa);
        if($insert==1){
          echo "<script>alert('Thêm thành công');</script>";
          echo "<script>window.location.href='?qlkhtv'</script>";
        }else {
          echo "<script>alert('Thêm không thành công');</script>";
          echo "<script>window.location.href='?qlkhtv'</script>";
        }
      }
    }else {
      $insert=$KHTV->add_thanhvien($Ten_KHTV, $SDT, $DiaChi, $NgaySinh, $Email, $GioiTinh, $username, $MaXa);
      if($insert==1){
        echo "<script>alert('Thêm thành công');</script>";
        echo "<script>window.location.href='?qlkhtv'</script>";
      }else {
        echo "<script>alert('Thêm không thành công');</script>";
        echo "<script>window.location.href='?qlkhtv'</script>";
      }
    }
  }
?>  