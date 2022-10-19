<?php
    include("controller/KhachHangThanhVien/cthanhvien.php");
    include_once("controller/TaiKhoan/ctaikhoan.php");
     $MaKHTV = $_REQUEST['MaKHTV'];
    //echo $Mabv;
    $p = new cKHTV();
    $a = new ctaikhoan();
    $table = $p-> select_thanhvien_byid($MaKHTV);
?> 
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản lý Thông Tin Khách Hàng Thành Viên</h1>
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
              <h3 style="text-align:center">Cập nhật thông tin khách hàng thành viên</h3>
              <form action="#" method="post" enctype="multipart/form-data">
                <div class="row-md-12">
                  <div class="row">
                    <?php
                      // if($table){
                      //   if(mysqli_num_rows($table)>0){
                      //     while ($row=mysqli_fetch_assoc($table)) {
                      //       echo "<td>Mã thành viên</td>";
                      //       echo "<td><input type='text'class='form-control' name='MaKHTV' value='" . $row['MaKHTV'] . "'></td>";
                      //       echo "<td>Tên khách hàng thành viên</td>";
                      //       echo "<td><input type='text'class='form-control' name='TenKHTV' value='" . $row['Ten_KHTV'] . "'></td>";
                      //       echo "<td> Số điện thoại </td>";
                      //       echo "<td><input type='text' class='form-control' name='SDT' value='" . $row['SDT'] . "'></td>";
                      //       echo "<td>Địa chỉ</td>";
                      //       echo "<td><input type='text'class='form-control' name='DiaChi' value='" . $row['DiaChi'] . "'></td>";
                      //       echo "<td>Ngày sinh</td>";
                      //       echo "<td><input type='date'class='form-control' name='NgaySinh' value='" . $row['NgaySinh'] . "'></td>";
                      //       echo "<br>";
                            
                      //       echo "<td><img src='assets/uploads/images/".$row['HinhAnh']."' alt='' height='200px' width='300px'></td>";
                      //       // echo "<td><input type='file'class='form-control name='txthinhanh' value='" . $row['HinhAnh'] . "'></td>";
      
                      //       echo "<br>";
                      //       echo "<td>Email</td>";
                      //       echo "<td><input type='text' class='form-control' name='Email' value='" . $row['Email'] . "'></td>";
                      //       echo "<td>Giới Tính</td>";
                            
                      //       echo "<td><input type='text' class='form-control' name='GioiTinh' value='" . $row['GioiTinh'] . "'></td>";
                           
                            
                      //       echo "<td>Username</td>";
                      //       echo "<td><input type='text'class='form-control' name='Username' value='" . $row['username'] . "'></td>";
                      //       echo "<td>Mã xã</td>";
                      //       ?>
                      <!-- //        <div class="input-group mb-3"> -->
                      <!-- //         <select class="form-control" name="tinh" id="tinh" required> -->
                                 <?php 

                      //             $tinh = new cDiaChi();
                      //             $option_tinh = $tinh -> select_tinhthanh();
                      //             //
                      //             while($row1 = mysqli_fetch_array($option_tinh,MYSQLI_ASSOC)) {
                      //               if ($row['MaTinh'] == $row1['MaTinh']) {
                      //                 echo "<option value=".$row1['MaTinh']." selected>".$row1['TenTinh']."</option>";
                      //               } else {
                      //                 echo "<option value=".$row1['MaTinh'].">".$row1['TenTinh']."</option>";
                      //               }
                                    
                      //             }

                      //           ?>    
                      <!-- //         </select>  -->
              
                      <!-- //       </div>
                      //       <div class="input-group mb-3">
                      //         <select class="form-control" name="huyen" id="huyen" required> -->
                               <?php 

                      //             $tinh = new cDiaChi();
                      //             $option_tinh = $tinh -> select_huyenquan($row['MaTinh']);
                      //             //
                      //             while($row1 = mysqli_fetch_array($option_tinh,MYSQLI_ASSOC)) {
                      //               if ($row['MaHuyen'] == $row1['MaHuyen']) {
                      //                 echo "<option value=".$row1['MaHuyen']." selected>".$row1['TenHuyen']."</option>";
                      //               } else {
                      //                 echo "<option value=".$row1['MaHuyen'].">".$row1['TenHuyen']."</option>";
                      //               }
                                    
                      //             }

                      //           ?>  
                      <!-- //         </select>  -->
                      <!-- //       </div>
                      //       <div class="input-group mb-3">
                      //         <select class="form-control" name="xa" id="xa" required> -->
                                 <?php 

                      //               $tinh = new cDiaChi();
                      //               $option_tinh = $tinh -> select_xaphuong($row['MaHuyen']);
                      //               //
                      //               while($row1 = mysqli_fetch_array($option_tinh,MYSQLI_ASSOC)) {
                      //                 if ($row['MaXa'] == $row1['MaXa']) {
                      //                   echo "<option value=".$row1['MaXa']." selected>".$row1['TenXa']."</option>";
                      //                 } else {
                      //                   echo "<option value=".$row1['MaXa'].">".$row1['TenXa']."</option>";
                      //                 }
                                      
                      //               }

                      //             ?>  
                                
                      <!-- //         </select>  -->
                        
                      <!-- //       </div> -->
                             <?php
                            
                      //     }
                      //   }
                      // }
                      
                      if($table){
                          if(mysqli_num_rows($table)>0){
                            while ($row=mysqli_fetch_assoc($table)) {
                    ?>
                    <div class="col-md-4">
                      <td><img src='assets/uploads/images/<?php echo $row['HinhAnh'] ?>' alt='' height='200px' width='300px'style="border-radius:50px" ></td>
                    
                  </div>
                  <div class="col-md-4">
                    <td>Mã thành viên</td>
                    <td><input type='text'class='form-control' name='MaKHTV' value="<?php echo $row['MaKHTV'] ?>"></td>
                    <td>Tên khách hàng thành viên</td>
                    <td><input type='text'class='form-control' name='TenKHTV' value="<?php echo $row['Ten_KHTV'] ?>"></td>
                    <td>Địa chỉ</td>
                    <td><input type='text'class='form-control' name='DiaChi' value=" <?php echo $row['DiaChi'] ?>"></td>
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
                  <div class="col-md-4">
                    <td> Số điện thoại </td>
                    <td><input type='text' class='form-control' name='SDT' value="<?php echo $row['SDT'] ?>"></td>
                    <td>Ngày sinh</td>
                    <td><input type='text'class='form-control' name='NgaySinh' value=" <?php echo $row['NgaySinh'] ?>" readonly></td>
                    <td>Email</td>
                    <td><input type='text' class='form-control' name='Email' value=" <?php echo $row['Email'] ?>"></td>
                    <td>Giới Tính</td>
                            
                    <td>
                      <select name="gioitinh" id="gioitinh" class="form-control" readonly>
                        <option value="<?php echo $row['GioiTinh'] ?>">Nam</option>
                        <option value="<?php echo $row['GioiTinh'] ?>">Nữ</option>
                      </select>
                      </td> 
                           
                            
                    <td>Username</td>
                    <td><input type='text'class='form-control' name='Username' value=" <?php echo $row['username'] ?>"></td>
                  </div>
                  
                  <div>
                    <?php
                          }
                        }
                      }
                    ?>
                  </div>
                  
                </div>
                <button type="submit" class="btn btn-primary" name ="submit"style="margin-left:45%">Submit</button>
                <button type="submit" class="btn btn-primary" name="Reset" >Reset</button>
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
      $MaKHTV=$_REQUEST["MaKHTV"];
      $Ten_KHTV=$_REQUEST["TenKHTV"];
      $SDT=$_REQUEST["SDT"];
      $DiaChi=$_REQUEST["DiaChi"];
      $NgaySinh=$_REQUEST["NgaySinh"];
      $Email=$_REQUEST["Email"];
      $GioiTinh=$_REQUEST["gioitinh"];
      $username=$_REQUEST["Username"];
      $MaXa=$_REQUEST["xa"];
      $MaVaiTro=5;
      $p = new cKHTV();
      $tk = new ctaikhoan();
      $check= $p->check_user($username);
      if(mysqli_num_rows($check)>0){
        $update=$p->update_thanhvien($MaKHTV, $Ten_KHTV, $SDT, $DiaChi, $NgaySinh, $Email, $GioiTinh, $username, $MaXa);
        if($update==1){
          echo "<script>alert('Cập nhật thành công');</script>";
          echo "<script>window.location.href='?qlkhtv'</script>";
        }else {
          echo "<script>alert('Cập nhật không thành công');</script>";
          echo "<script>window.location.href='?qlkhtv'</script>";
        }
      }else {
        if($username !=""){
          $update=$tk->add_taikhoan($MaVaiTro, $username);
          if($update==1){
            $update=$p->update_thanhvien($MaKHTV, $Ten_KHTV, $SDT, $DiaChi, $NgaySinh, $Email, $GioiTinh, $username, $MaXa);
            if($update==1){
              echo "<script>alert('Cập nhật thành công');</script>";
              // echo "<script>window.location.href='?qlkhtv'</script>";
            }else {
              echo "<script>alert('Cập nhật không thành công');</script>";
              // echo "<script>window.location.href='?qlkhtv'</script>";
            }
          }
        }else {
          $update=$p->update_thanhvien($MaKHTV, $Ten_KHTV, $SDT, $DiaChi, $NgaySinh, $Email, $GioiTinh, $username, $MaXa);
          if($update==1){
            echo "<script>alert('Cập nhật thành công');</script>";
            // echo "<script>window.location.href='?qlkhtv'</script>";
          }else {
            echo "<script>alert('Cập nhật không thành công');</script>";
            // echo "<script>window.location.href='?qlkhtv'</script>";
          }
          
        }
      }
  }elseif (isset($_REQUEST["reset"])){
    echo "<script>alert('Cập nhật không thành công')</script>";
      //echo header("refresh:0; url='index.php?qlbv'");
    echo "<script>window.location.href='?qlkhtv'</script>";
  }
  ?>