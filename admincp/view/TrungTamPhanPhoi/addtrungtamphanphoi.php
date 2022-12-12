<?php
    include("controller/TrungTamPhanPhoi/ctrungtamphanphoi.php")

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản lý Thông Tin Trung Tâm Phân Phối</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
              <li class="breadcrumb-item active">Quản lý trung tâm phân phối</li>
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
              <h3 style="text-align:center">Thêm Trung Tâm Phân Phối</h3>
              <form action="#" method="post">
                <div class="row">
                  <div class="col-md-6">
                    <td>Mã trung tâm phân phối</td>
                    <input type="text" class="form-control" id="mattpp" placeholder="Enter Mã trung tâm phân phối" name="mattpp"></br>
                    <td>Tên trung tâm phân phối</td>
                    <input type="text" class="form-control" id="tenttpp" placeholder="Enter Tên trung tâm phân phối" name="tenttpp"></br>
                    
                    <td>Địa chỉ</td>
                    <input type="text" class="form-control" id="diachi" placeholder="Enter Địa chỉ" name="diachi"></br>
                    <td>Chức Năng</td>
                    <input type="text" class="form-control" id="chucnang" placeholder="Enter chức năng" name="chucnang"></br>
                </DIV>
                <div class="col-md-6">
                    <td>Người Đại Diện</td>
                    <input type="text" class="form-control" id="nguoidaidien" placeholder="Enter Người Đại Diện" name="nguoidaidien"></br>
                   
                    
                    
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
                <button type="submit" class="btn btn-primary" name="submit" style="margin-left:45%">Submit</button>
                <button type="reset" class="btn btn-primary" >Reset</button>
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
        $MaTrungTamPP=$_REQUEST["mattpp"];
        $TenTrungTam=$_REQUEST["tenttpp"];
        $DiaChi=$_REQUEST["diachi"];
        $ChucNang=$_REQUEST["chucnang"];
        $NguoiDaiDien=$_REQUEST["nguoidaidien"];
        $MaXa=$_REQUEST["xa"]; 
        $p=new cTTPP();
        $table=$p-> Add_trungtamphanphoi($MaTrungTamPP,$TenTrungTam,$DiaChi,$ChucNang,$NguoiDaiDien,$MaXa);
        if($table==1){
            echo "<script>alert('Thêm trung tâm thành công')</script>";
            echo "<script>window.location.href='?qlttpp'</script>";
        }else{
            echo "<script>alert('Thêm Thất bại')</script>";
            echo "<script>window.location.href='?qlttpp'</script>";
        }
    }
?>