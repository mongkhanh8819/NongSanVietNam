<?php
    include("controller/TrungTamPhanPhoi/ctrungtamphanphoi.php");
    // include_once("controller/TaiKhoan/ctaikhoan.php");
     $MaTrungTamPP = $_REQUEST['MaTrungTamPP'];
    //echo $Mabv;
    // $a= new ctaikhoan();
    $p = new cTTPP();
    $table = $p-> select_trungtamphanphoi_byid($MaTrungTamPP);
    
    
    
    
?> 
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 >Quản lý trung tâm phân phối</h1>
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
               
              <h3 style="text-align:center">Cập nhật thông tin trung tâm phân phối</h3>
              <form action="#" method="post">
                <div class="row">
                  <div class="col">
                    <?php
                      if($table){
                        if(mysqli_num_rows($table)>0){
                          while ($row=mysqli_fetch_assoc($table)) {
                            echo "<td>Mã trung tâm</td>";
                            echo "<td><input type='text'class='form-control' name='mattpp' value='" . $row['MaTrungTamPP'] . "'></td>";
                            echo "<td>Tên trung tâm</td>";
                            echo "<td><input type='text'class='form-control' name='tenttpp' value='" . $row['TenTrungTam'] . "'></td>";
                            echo "<td>Địa chỉ</td>";
                            echo "<td><input type='text'class='form-control' name='diachi' value='" . $row['DiaChi'] . "'></td>";
                            echo "<td>Chức năng</td>";
                            echo "<td><input type='text'class='form-control' name='chucnang' value='" . $row['ChucNang'] . "'></td>";
                            echo "<td>Người Đại Diện</td>";
                            echo "<td><input type='text'class='form-control' name='nguoidaidien' value='" . $row['NguoiDaiDien'] . "'></td>";
                            echo "<td>Mã Xã</td>";
                            ?>
                  
                                <div class="input-group mb-3">
                                    <select class="form-control" name="tinh" id="tinh" required>
                                        <?php 

                                        $tinh = new cDiaChi();
                                        $option_tinh = $tinh -> select_tinhthanh();
                                        //
                                        while($row1 = mysqli_fetch_array($option_tinh,MYSQLI_ASSOC)) {
                                            if ($row['MaTinh'] == $row1['MaTinh']) {
                                            echo "<option value=".$row1['MaTinh']." selected>".$row1['TenTinh']."</option>";
                                            } else {
                                            echo "<option value=".$row1['MaTinh'].">".$row1['TenTinh']."</option>";
                                            }
                                            
                                        }

                                        ?>    
                                    </select> 
              
                                </div>
                                <div class="input-group mb-3">
                                    <select class="form-control" name="huyen" id="huyen" required>
                                    <?php 

                                        $tinh = new cDiaChi();
                                        $option_tinh = $tinh -> select_huyenquan($row['MaTinh']);
                                        //
                                        while($row1 = mysqli_fetch_array($option_tinh,MYSQLI_ASSOC)) {
                                            if ($row['MaHuyen'] == $row1['MaHuyen']) {
                                            echo "<option value=".$row1['MaHuyen']." selected>".$row1['TenHuyen']."</option>";
                                            } else {
                                            echo "<option value=".$row1['MaHuyen'].">".$row1['TenHuyen']."</option>";
                                            }
                                            
                                        }

                                    ?>  
                                    </select> 
                                </div>
                                <div class="input-group mb-3">
                                    <select class="form-control" name="xa" id="xa" required>
                                    <?php 

                                        $tinh = new cDiaChi();
                                        $option_tinh = $tinh -> select_xaphuong($row['MaHuyen']);
                                        //
                                        while($row1 = mysqli_fetch_array($option_tinh,MYSQLI_ASSOC)) {
                                        if ($row['MaXa'] == $row1['MaXa']) {
                                            echo "<option value=".$row1['MaXa']." selected>".$row1['TenXa']."</option>";
                                        } else {
                                            echo "<option value=".$row1['MaXa'].">".$row1['TenXa']."</option>";
                                        }
                                        
                                        }

                                    ?>  
                                
                                    </select> 
                                </div>   
                            <?php
                          }
                        }
                      }
                      
                      
                    ?>
                  </div>
                  
                </div>
                <button type="submit" class="btn btn-primary" name="submit" style="margin-left:45%">Submit</button>
                <button type="submit" class="btn btn-primary" name="reset" >Reset</button>
                <!-- <input type="submit" value="Thêm Doanh Nghiệp" style="text-align:center"> -->
              </form>
              
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
<?php
    if(isset($_REQUEST["submit"])){
        $MaTrungTamPP=$_REQUEST["mattpp"];
        $TenTrungTam=$_REQUEST["tenttpp"];
        $DiaChi=$_REQUEST["diachi"];
        $ChucNang=$_REQUEST["chucnang"];
        $NguoiDaiDien=$_REQUEST["nguoidaidien"];
        $MaXa=$_REQUEST["xa"];
        $p= new cTTPP();
        $update=$p->update_trungtamphanphoi($MaTrungTamPP, $TenTrungTam,$DiaChi,$ChucNang,$NguoiDaiDien,$MaXa);
        if($update){
            echo "<script>alert('Cập nhật thành công')</script>";
            echo "<script>window.location.href='?qlttpp'</script>";
        }else {
            echo "<script>alert('Cập nhật không thành công')</script>";
            echo "<script>window.location.href='?qlttpp'</script>";
        }
    }
?>