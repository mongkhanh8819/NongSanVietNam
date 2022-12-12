<?php
  include_once("controller/NhanVienPhanPhoi/cnvphanphoi.php");
  include_once("controller/TaiKhoan/ctaikhoan.php");
  include_once("controller/TrungTamPhanPhoi/ctrungtamphanphoi.php");
  $a= new ctaikhoan();
  $b= new cTTPP();
  $dstt=$b->select_trungtamphanphoi();
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
              <form action="#" method="post" enctype="multipart/form-data">
                <div class="row">
                  <div class="col">
                    <td>Mã nhân viên phân phối</td>
                    <input type="text" class="form-control" id="manvpp" placeholder="Enter Mã nhân viên phân phối" name="manvpp"></br>
                    <td>Tên nhân viên phân phối</td>
                    <input type="text" class="form-control" id="tennvpp" placeholder="Enter Tên nhân viên phân phối" name="tennvpp"></br>
                    <td>Giới tính</td>
                    <td>
                    <select name="gioitinh" id="gioitinh" class="form-control">
                      <option value="0">Nam</option>
                      <option value="1">Nữ</option>
                    </select>
                    </td>
                    </br>
                    <td>Ngày sinh</td>
                    <input type="date" class="form-control" id="ngaysinh" placeholder="Enter Ngày sinh" name="ngaysinh"></br>
                    <td>Số điện thoại</td>
                    <input type="text" class="form-control" id="sdt" placeholder="Enter Số điện thoại" name="sdt">
                    <span id="Sodienthoai" style="color:red;"></span></br>
                    
                    
                  </div>
                  <div class="col">
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
                    </br>
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
                    </br>
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
                    </br>
                    
                    <td>Email</td>
                    <input type="text" class="form-control" id="email" placeholder="Enter email" name="email"></br>
                    
                    
                  </div>
                    
                  <div class="col">   
                    <!-- <td>Hình ảnh</td> -->
                    <!-- <input type="file" class="form-control" id="hinhanh" placeholder="Chọn hình ảnh" name="hinhanh"></br> -->
                    <td>Trung tâm phân phối</td>
                    <!-- <input type="text" class="form-control" id="mattpp" placeholder="Enter Mã trung tâm phân phối" name="mattpp"></br> -->
                     <select name="mattpp" id="mattpp" class="form-control"> 
                      <option value="">Chọn trung tâm phân phối
                        <?php 
                          if($dstt){
                            if(mysqli_num_rows($dstt)){
                            while($row1 = mysqli_fetch_assoc($dstt)){
                              ?>
                                <option value="<?php echo $row1['MaTrungTamPP']; ?>" <?php if(isset($_POST['MaTrungTamPP'])&&$_POST['MaTrungTamPP']==$row1['MaTrungTamPP']) echo "selected " ?>><?php echo $row1['TenTrungTam'] ?></option>
                                <?php 
                            }
                            }
                        }
                        ?>
                      </option>
                    </select>
                    <br>
                    
                    <td>Username</td>
                    <input type="text" class="form-control" id="username" placeholder="Enter Username" name="username"></br>
                    <!-- <td>Password</td> -->
                    <!-- <input type="text" class="form-control" id="password" placeholder="Enter Username" name="password"></br> -->
                        


                  </div>

                   
                    <!--  -->
                 
                </div>
                <button type="submit" class="btn btn-primary" name="submit" style="margin-left:43%">Thêm nhân viên</button>
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
    $MaNVPP=$_REQUEST["manvpp"];
    $TenNVPP=$_REQUEST["tennvpp"];
    $SDT=$_REQUEST["sdt"];
    $DiaChiNha=$_REQUEST["diachi"];
    $NgaySinh=$_REQUEST["ngaysinh"];
    $Email=$_REQUEST["email"];
    $GioiTinh=$_REQUEST["gioitinh"];
    $MaXa=$_REQUEST["xa"];
    $MaTrungTamPP=$_REQUEST["mattpp"];
    $username=$_REQUEST["username"];
    // $password=$_REQUEST["password"];
    $MaVaiTro=2;
    $tk= new cTaikhoan();
    $NVPP= new cNVPP();

    if($username !=""){
      $insert=$tk->add_taikhoan($MaVaiTro, $username);
      if($insert=1){
        $insert=$NVPP->add_nhanvienphanphoi($MaNVPP, $TenNVPP, $SDT, $DiaChiNha, $NgaySinh, $Email,$GioiTinh,$MaXa,$MaTrungTamPP, $username);
        if($insert==1){
          echo "<script>alert('Thêm thành công');</script>";
          // echo "<script>window.location.href='?qlkhtv'</script>";
        }else {
          echo "<script>alert('Thêm không thành công');</script>";
          // echo "<script>window.location.href='?qlkhtv'</script>";
        }
      }
    }else {
      $insert=$NVPP->add_nhanvienphanphoi($MaNVPP, $TenNVPP, $SDT, $DiaChiNha, $NgaySinh, $Email,$GioiTinh,$MaXa,$MaTrungTamPP, $username);
      if($insert==1){
        echo "<script>alert('Thêm thành công');</script>";
        // echo "<script>window.location.href='?qlkhtv'</script>";
      }else {
        echo "<script>alert('Thêm không thành công');</script>";
        // echo "<script>window.location.href='?qlkhtv'</script>";
      }
    }
  }
?>