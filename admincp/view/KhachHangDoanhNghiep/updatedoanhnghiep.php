<?php
    include("controller/KhachHangDoanhNghiep/cdoanhnghiep.php");
    include_once("controller/TaiKhoan/ctaikhoan.php");
     $MaDN = $_REQUEST['MaDN'];
    //echo $Mabv;
    $a= new ctaikhoan();
    $p = new cKHDN();
    $table = $p-> select_doanhnghiep_byid_xa($MaDN);
    
?> 
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 >Quản lý Thông Tin Doanh Nghiệp</h1>
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
              <h3 style="text-align:center">Cập nhật thông tin doanh nghiệp</h3>
              <form action="#" method="post" enctype="multipart/form-data">
                <div class="row-md-12 ">
                  <div class="row">

                    <?php
                      // if($table){
                      //   if(mysqli_num_rows($table)>0){
                      //     while ($row=mysqli_fetch_assoc($table)) {
                    
                      //       echo "<td>Mã doanh nghiệp</td>";
                      //       echo "<td><input type='text'class='form-control' name='txtMaDN' value='" . $row['MaDN'] . "'></td>";
                      //       echo "<td>Tên doanh nghiệp</td>";
                      //       echo "<td><input type='text'class='form-control' name='txtTenDN' value='" . $row['TenDoanhNghiep'] . "'></td>";
                      //       echo "<td> Số điện thoại </td>";
                      //       echo "<td><input type='text' class='form-control' name='txtsdt' value='" . $row['SDT'] . "'></td>";
                      //       echo "<td>Địa chỉ</td>";
                      //       echo "<td><input type='text'class='form-control' name='txtDiaChi' value='" . $row['DiaChi'] . "'></td>";
                      //       echo "<td>Email</td>";
                      //       echo "<td><input type='mail' class='form-control' name='txtEmail' value='" . $row['Email'] . "'></td>";
                      //       echo "<td>Mã số thuế</td>";
                      //       echo "<td><input type='text' class='form-control' name='txtMST' value='" . $row['MST'] . "'></td>";
                      //       echo "<td>Ngày Thành Lập</td>";
                      //       echo "<td><input type='text'class='form-control' name='txtNgayThanhLap' value='" . $row['NgayThanhLap'] . "'></td>";
                            
                      //       echo "<td>Giới thiệu</td>";
                      //       // echo "<td><input type='text'class='form-control' name='txtsl' value='" . $row['GioiThieu'] . "' ></td>";
                      //       echo "<textarea type='text' name='txtGioiThieu' class='form-control'cols='80' rows='4' style='border-radius:10px'>".$row['GioiThieu']." </textarea>";
                            
                      //       echo "<td>Tên người đại diện</td>";
                      //       echo "<td><input type='text'class='form-control' name='txtTen_NDD' value='" . $row['TenNguoiDaiDien'] . "'></td>";
                            
                      //       echo "<td>Địa chỉ người đại diện</td>";
                      //       echo "<td><input type='text' class='form-control' name='txtDiaChi_NDD' value='" . $row['DiaChi_NDD'] . "'></td>";  
                            
                      //       echo "<td>Số điện thoại người dại diện</td>";
                      //       echo "<td><input type='text'class='form-control' name='txtSDT_NDD' value='" . $row['SDT_NDD'] . "' ></td>";
                            
                      //       echo "<td>Email người dại diện</td>";
                      //       echo "<td><input type='text'class='form-control' name='txtEmail_NDD' value='" . $row['Email_NDD'] . "'></td>";
                            
                      //       echo "<td>Username</td>";
                      //       echo "<td><input type='text'class='form-control' name='txtUsername' value='" . $row['username'] . "'></td>";
                            
                      //       echo "<td>Mã xã</td>";
                           
                          
                          ?>
                  
                            <!-- <div class="input-group mb-3"> -->
                              <!-- <select class="form-control" name="tinh" id="tinh" required> -->
                                <?php 

                                  // $tinh = new cDiaChi();
                                  // $option_tinh = $tinh -> select_tinhthanh();
                                  // //
                                  // while($row1 = mysqli_fetch_array($option_tinh,MYSQLI_ASSOC)) {
                                  //   if ($row['MaTinh'] == $row1['MaTinh']) {
                                  //     echo "<option value=".$row1['MaTinh']." selected>".$row1['TenTinh']."</option>";
                                  //   } else {
                                  //     echo "<option value=".$row1['MaTinh'].">".$row1['TenTinh']."</option>";
                                  //   }
                                    
                                  // }

                                ?>    
                              <!-- </select>  -->
              
                            <!-- </div>
                            <div class="input-group mb-3">
                              <select class="form-control" name="huyen" id="huyen" required> -->
                                <?php 

                                  // $tinh = new cDiaChi();
                                  // $option_tinh = $tinh -> select_huyenquan($row['MaTinh']);
                                  // //
                                  // while($row1 = mysqli_fetch_array($option_tinh,MYSQLI_ASSOC)) {
                                  //   if ($row['MaHuyen'] == $row1['MaHuyen']) {
                                  //     echo "<option value=".$row1['MaHuyen']." selected>".$row1['TenHuyen']."</option>";
                                  //   } else {
                                  //     echo "<option value=".$row1['MaHuyen'].">".$row1['TenHuyen']."</option>";
                                  //   }
                                    
                                  // }

                                ?>  
                              <!-- </select> 
                            </div>
                            <div class="input-group mb-3">
                              <select class="form-control" name="xa" id="xa" required> -->
                                <?php 

                                    // $tinh = new cDiaChi();
                                    // $option_tinh = $tinh -> select_xaphuong($row['MaHuyen']);
                                    // //
                                    // while($row1 = mysqli_fetch_array($option_tinh,MYSQLI_ASSOC)) {
                                    //   if ($row['MaXa'] == $row1['MaXa']) {
                                    //     echo "<option value=".$row1['MaXa']." selected>".$row1['TenXa']."</option>";
                                    //   } else {
                                    //     echo "<option value=".$row1['MaXa'].">".$row1['TenXa']."</option>";
                                    //   }
                                      
                                    // }

                                  ?>  
                                
                              <!-- </select>  -->
                        
                            <!-- </div> -->
                          <?php
                            
                          // }
                        // }
                      // }
                      if($table){
                        if(mysqli_num_rows($table)>0){
                          while ($row=mysqli_fetch_assoc($table)) { 
                      
                    ?>
                  <div class="col-md-3">
                    <td>
                      <?php
                        if($row["HinhAnh"] == NULL){
                          echo "<td><img src='assets/uploads/images/user.png' alt='' height='200px' width='300px'style='border-radius:50px' ></td>";
                        }else {
                          echo "<td><img src='assets/uploads/images/".$row['HinhAnh']."' alt='' height='200px' width='300px'style='border-radius:50px' ></td>";
                          // echo "<td><img src='assets/uploads/images/".$row['HinhAnh']."' alt='' height='200px' width='300px'></td>";
                        }
                      ?>
                     
                     
                    </td>
                  </div>
                    <div class="col-md-3">
                      <td>Mã doanh nghiệp</td>
                      <td><input type='text'class='form-control' name='txtMaDN' value="<?php echo $row['MaDN'] ?>" readonly></td>
                      <td>Tên doanh nghiệp</td>
                      <td><input type='text'class='form-control' name='txtTenDN' value="<?php echo $row['TenDoanhNghiep'] ?>"></td>
                      <td>Địa chỉ</td>
                      <td><input type='text'class='form-control' name='txtDiaChi' value="<?php echo $row['DiaChi'] ?>"></td>
                    
                      <td>Mã Xã</td>
                    
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
                        <select class="form-control" name="xa" id="xa" required> -->
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
                  
                    
                  </div>
                  <div class="col-md-3">
        
                   
                    <td>Số Điện Thoại</td>
                    <td><input type='text'class='form-control' name='txtsdt' value="<?php echo $row['SDT'] ?>"></td>
                    <td>Email</td>
                    <td><input type='text'class='form-control' name='txtEmail' value="<?php echo $row['Email'] ?>"></td>
                    <td>Mã Số Thuế</td>
                    <td><input type='text'class='form-control' name='txtMST' value="<?php echo $row['MST'] ?>"></td>
                    <td>Ngày Thành Lập</td>
                    <td><input type='text'class='form-control' name='txtNgayThanhLap' value="<?php echo $row['NgayThanhLap'] ?>"></td>
                    <td>Giới thiệu</td>
                    <textarea type='text' name='txtGioiThieu' class='form-control'cols='80' rows='4' style='border-radius:10px'><?php echo $row['GioiThieu'] ?></textarea>

                  </div>
                  <div class="col-md-3">
                    <td>Tên người đại diện</td>
                    <td><input type='text'class='form-control' name='txtTen_NDD' value="<?php echo $row['TenNguoiDaiDien'] ?>"></td>
                            
                    <td>Địa chỉ người đại diện</td>
                    <td><input type='text' class='form-control' name='txtDiaChi_NDD' value="<?php echo $row['DiaChi_NDD'] ?>"></td>  
                              
                    <td>Số điện thoại người dại diện</td>
                    <td><input type='text'class='form-control' name='txtSDT_NDD' value="<?php echo $row['SDT_NDD'] ?>"></td>
                              
                    <td>Email người dại diện</td>
                    <td><input type='text'class='form-control' name='txtEmail_NDD' value="<?php echo $row['Email_NDD'] ?>"></td>
                              
                    <td>Username</td>
                    <td><input type='text'class='form-control' name='txtUsername' value="<?php echo $row['username'] ?>"></td>
                    
                    

                  </div>
                  <div>
                    <?php
                          }
                        }
                      }
                    ?>
                  </div>
                </div>
                <br>  
                <button type="submit" class="btn btn-primary" name="submit" style="margin-left:45%">Cập nhật</button>
                <button type="submit" class="btn btn-primary" name="reset" >Hủy</button>
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
    $MaDN=$_REQUEST['txtMaDN'];
    $TenDoanhNghiep=$_REQUEST['txtTenDN'];
    $SDT=$_REQUEST['txtsdt'];
    $DiaChi=$_REQUEST['txtDiaChi'];
    $Email=$_REQUEST['txtEmail'];
    $MST=$_REQUEST['txtMST'];
    $NgayThanhLap=$_REQUEST['txtNgayThanhLap'];
    $GioiThieu=$_REQUEST['txtGioiThieu'];
    $TenNguoiDaiDien=$_REQUEST['txtTen_NDD'];
    $DiaChi_NDD=$_REQUEST['txtDiaChi_NDD'];
    $SDT_NDD=$_REQUEST['txtSDT_NDD'];
    $Email_NDD=$_REQUEST['txtEmail_NDD'];
    $username=$_REQUEST['txtUsername'];
    $MaXa=$_REQUEST['xa'];
    $MaVaiTro=4;
    $p= new cKHDN();
    $tk= new cTaikhoan();
    $check= $p->check_user($username);
    if (mysqli_num_rows($check)>0) {
          $update=$p->update_DN($MaDN, $TenDoanhNghiep, $SDT, $DiaChi, $Email, $MST, $NgayThanhLap, $GioiThieu, $TenNguoiDaiDien, $DiaChi_NDD, $SDT_NDD, $Email_NDD, $username, $MaXa);
          if($update==1){
            echo "<script>alert('Cập nhật thành công');</script>";
            echo "<script>window.location.href='?qlkhdn'</script>";
          }else {
            echo "<script>alert('Cập nhật không thành công');</script>";
            echo "<script>window.location.href='?qlkhdn'</script>";
          }
      
    }else {
      if($username !=""){
        $update=$tk->add_taikhoan($MaVaiTro, $username);
        if($update==1){
          $update=$p->update_DN($MaDN, $TenDoanhNghiep, $SDT, $DiaChi, $Email, $MST, $NgayThanhLap, $GioiThieu, $TenNguoiDaiDien, $DiaChi_NDD, $SDT_NDD, $Email_NDD, $username, $MaXa);
          if($update==1){
            echo "<script>alert('Cập nhật thành công');</script>";
            echo "<script>window.location.href='?qlkhdn'</script>";
          }else {
            echo "<script>alert('Cập nhật không thành công');</script>";
            echo "<script>window.location.href='?qlkhdn'</script>";
          }
          
        }

      }else{
        $update=$p->update_DN($MaDN, $TenDoanhNghiep, $SDT, $DiaChi, $Email, $MST, $NgayThanhLap, $GioiThieu, $TenNguoiDaiDien, $DiaChi_NDD, $SDT_NDD, $Email_NDD, $username, $MaXa);
          if($update==1){
            echo "<script>alert('Cập nhật thành công');</script>";
            echo "<script>window.location.href='?qlkhdn'</script>";
          }else {
            echo "<script>alert('Cập nhật không thành công');</script>";
            echo "<script>window.location.href='?qlkhdn'</script>";
          }
          
      }
    }
  }elseif (isset($_REQUEST["reset"])){
    // echo "<script>alert('Cập nhật không thành công')</script>";
      //echo header("refresh:0; url='index.php?qlbv'");
      echo "<script>window.location.href='?qlkhdn'</script>";
  }
?>