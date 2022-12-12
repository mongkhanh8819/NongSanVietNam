 <?php
  include_once("controller/NhaCungCap/cNCC.php");
  include_once("controller/TaiKhoan/ctaikhoan.php");
  $a= new ctaikhoan();
 ?>
<script>
  $(document).ready(function(){
            function kiemsdtncc(){
                var sdt=$("#sdtncc").val();
                regsdt=/^\+?(0[389][0-9]{8})$/;

                if(regsdt.test(sdt))
                {
                    $("#Sodienthoaincc").html("");
                    return true;
                }
                else
                {
                    $("#Sodienthoaincc").html("Số không đúng định dạng ");
                    return false;
                }
            }
            $("#sdtncc").blur(kiemsdtncc);

            function kiemsdtndd(){
                var sdt=$("#sdtndd").val();
                regsdt=/^\+?(0[389][0-9]{8})$/;

                if(regsdt.test(sdt))
                {
                    $("#Sodienthoaindd").html("");
                    return true;
                }
                else
                {
                    $("#Sodienthoaindd").html("Số điện thoại phải đủ 10 chữ số và bắt đầu 03,08,09 ");
                    return false;
                }
            }
            $("#sdtndd").blur(kiemsdtndd);
            
            
            
            
            

        })
 </script>
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
              <form action="#" method="post" enctype="multipart/form-data">
                <div class="row">
                  <div class="col">
                    <!-- <td>Mã nhà cung cấp</td> -->
                    <!-- <input type="text" class="form-control" id="mancc" placeholder="Enter Mã nhà cung cấp" name="mancc"></br> -->
                    <td>Tên nhà cung cấp</td>
                    <input type="text" class="form-control" id="tenncc" placeholder="Enter Tên nhà cung cấp" name="tenncc"></br>
                    
                    <!-- <td>Hình ảnh</td>
                    <input type="file" class="form-control" id="hinhanh" placeholder="Chọn hình ảnh" name="hinhanh"></br> -->
                    <td>Địa chỉ nhà cung cấp</td>
                    <input type="text" class="form-control" id="diachincc" placeholder="Enter Địa chỉ nhà cung cấp" name="diachincc"></br>
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
                  <div class="col">
                    <td>Số điện thoại nhà cung cấp</td>
                    <input type="text" class="form-control" id="sdtncc" placeholder="Enter Số điện thoại nhà cung cấp" name="sdtncc">
                    <span id="Sodienthoaincc" style="color:red"></span></br>
                    <td>Tên người đại diện</td>
                    <input type="text" class="form-control" id="tenndd" placeholder="Enter Tên người đại diện" name="tenndd"></br>
                    <td>Địa chỉ người đại diện</td>
                    <input type="text" class="form-control" id="diachindd" placeholder="Enter Địa chỉ người đại diện" name="diachindd"></br>
                    <td>Số điện thoại người đại diện</td>
                    <input type="text" class="form-control" id="sdtndd" placeholder="Enter Số điện thoại người đại diện" name="sdtndd">
                    <span id="Sodienthoaindd" style="color:red"></span></br>
                    <td>Email nhà cung cấp</td>
                    <input type="mail" class="form-control", id="emailncc", placeholder="Enter email nhà cung cấp nông sản" name="emailncc"></br>
                    <td>Email người đại diện</td>
                    <input type="mail" class="form-control", id="emailndd", placeholder="Enter email người đại diện" name="emailndd"></br>
                    <td>Username</td>
                    <input type="text" class="form-control" id="username" placeholder="Enter Username" name="username"></br>
                  </div>

                  
                    

                  
                 

                    <!--  -->
                 
                </div>
                <button type="submit" class="btn btn-primary" name="submit" style="margin-left:45%">Thêm</button>
              
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
    // $MaNCC=$_REQUEST["mancc"];
    // echo $MaNCC;
    $TenNCC=$_REQUEST["tenncc"];
    $TenNDD=$_REQUEST["tenndd"]; 
    $DiaChi_NCC=$_REQUEST["diachincc"];
    $DiaChi_NDD=$_REQUEST["diachindd"];
    $SDT_NCC=$_REQUEST["sdtncc"];
    $SDT_NDD=$_REQUEST["sdtndd"];
    $Email_NCC=$_REQUEST["emailncc"];
    $Email_NDD=$_REQUEST["emailndd"];
    $username=$_REQUEST["username"];
    // $password=$_REQUEST["password"];
    $MaXa=$_REQUEST["xa"];
    $MaVaiTro=3;

    $tk= new cTaikhoan();
    $NCC= new cNCC();
    if($username !=""){
      $insert=$tk->add_taikhoan($MaVaiTro, $username);
      if($insert=1){
        $insert=$NCC->add_nhacungcap($TenNCC, $TenNDD,$DiaChi_NCC,$DiaChi_NDD,$SDT_NCC,$SDT_NDD,$Email_NCC,$Email_NDD, $username, $MaXa);
        if($insert==1){
          echo "<script>alert('Thêm thành công');</script>";
          // echo "<script>window.location.href='?qlncc'</script>";
        
        }else {
          echo "<script>alert('Thêm không thành công');</script>";
          // echo "<script>window.location.href='?qlncc'</script>";
        }
      }
    }else {
      $insert=$NCC->add_nhacungcap($TenNCC, $TenNDD,$DiaChi_NCC,$DiaChi_NDD,$SDT_NCC,$SDT_NDD,$Email_NCC,$Email_NDD, $username, $MaXa);
      if($insert==1){
        echo "<script>alert('Thêm thành công');</script>";
        // echo "<script>window.location.href='?qlncc'</script>";
      }else {
        echo "<script>alert('Thêm không thành công');</script>";
        // echo "<script>window.location.href='?qlncc'</script>";
      }
    }
  }
?>  