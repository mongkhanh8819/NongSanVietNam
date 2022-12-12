<?php
    include("controller/NhanVienPhanPhoi/cnvphanphoi.php");
    include_once("controller/TaiKhoan/ctaikhoan.php");
    include_once("controller/TrungTamPhanPhoi/ctrungtamphanphoi.php");
     $MaNVPP = $_REQUEST['MaNVPP'];
    echo $MaNVPP;
    $p = new cNVPP();
    $a= new ctaikhoan();
    $b=new cTTPP();
    $dstt=$b-> select_trungtamphanphoi();
    $table = $p-> select_nhanvien_byid($MaNVPP);
    // var_dump($table);
?> 
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
              <h3 style="text-align:center">Cập nhật thông tin nhân viên phân phối</h3>
              <form action="#" method="post" enctype="multipart/form-data">
                <div class="row-md-12">
                  <div class="row">
                    <?php
                      // if($table){
                      //   if(mysqli_num_rows($table)>0){
                      //     while ($row=mysqli_fetch_assoc($table)) {
                      //       echo "<td>Mã nhân viên phân phối</td>";
                      //       echo "<td><input type='text'class='form-control' name='txtNVPP' value='" . $row['MaNVPP'] . "'></td>";
                      //       echo "<td>Tên nhân viên phân phối</td>";
                      //       echo "<td><input type='text'class='form-control' name='txttenNVPP' value='" . $row['TenNVPP'] . "'></td>";
                      //       echo "<td>Số điện thoại</td>";
                      //       echo "<td><input type='text'class='form-control name='sdt' value='" . $row['SDT'] . "'></td>";
                      //       echo "<td>Địa chỉ</td>";
                      //       echo "<td><input type='text'class='form-control name='diachi' value='" . $row['DiaChiNha'] . "'></td>";
                      //       echo "<td>Ngày sinh</td>";
                      //       echo "<td><input type='date'class='form-control name='ngaysinh' value='" . $row['NgaySinh'] . "'></td>";
                      //       echo "<br>";
                      //       echo "<td><img src='assets/uploads/images/".$row['HinhAnh']."' alt='' height='200px' width='300px'></td>";
                      //       echo "<br>";
                      //       echo "<td>Email</td>";
                      //       echo "<td><input type='text'class='form-control name='email' value='" . $row['Email'] . "'></td>";
                      //       echo "<td>Giới tính</td>";
                      //       echo "<td><input type='text'class='form-control name='gioitinh' value='" . $row['GioiTinh'] . "'></td>";
                      //       echo "<td>Mã xã</td>";
                      //       ?>
                            
                      <!-- //         <div class="input-group mb-3"> -->
                      <!-- //           <select class="form-control" name="tinh" id="tinh" required> -->
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

                      //             ?>    
                      <!-- //           </select>  -->
              
                      <!-- //         </div> -->
                      <!-- //         <div class="input-group mb-3"> -->
                      <!-- //           <select class="form-control" name="huyen" id="huyen" required> -->
                                  <?php 

                      //               $tinh = new cDiaChi();
                      //               $option_tinh = $tinh -> select_huyenquan($row['MaTinh']);
                      //               //
                      //               while($row1 = mysqli_fetch_array($option_tinh,MYSQLI_ASSOC)) {
                      //                 if ($row['MaHuyen'] == $row1['MaHuyen']) {
                      //                   echo "<option value=".$row1['MaHuyen']." selected>".$row1['TenHuyen']."</option>";
                      //                 } else {
                      //                   echo "<option value=".$row1['MaHuyen'].">".$row1['TenHuyen']."</option>";
                      //                 }
                                      
                      //               }

                      //             ?>  
                      <!-- //           </select>  -->
                      <!-- //         </div> -->
                      <!-- //         <div class="input-group mb-3"> -->
                      <!-- //           <select class="form-control" name="xa" id="xa" required> -->
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
                                
                      <!-- //           </select >  -->
                        
                      <!-- //         </div> -->
                             <?php
                      //       echo "<td>Mã trung tâm phân phối";
                      //       echo "<td><input type='text'class='form-control name='textmattpp' value='" . $row['MaTrungTamPP'] . "'></td>";
                      //       echo "<td>Username";
                      //       echo "<td><input type='text'class='form-control name='textusername' value='" . $row['username'] . "'></td>";
                            
                      //     }
                      //   }
                      // }
                      if($table){
                        if(mysqli_num_rows($table)>0){
                          while ($row=mysqli_fetch_assoc($table)) {
                       
                    ?>
                    <div class="col-md-4">
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
                  <div class="col-md-4">
                    <td>Mã nhân viên phân phối</td>
                    <td><input type='text'class='form-control' name='manvpp' value="<?php echo $row['MaNVPP'] ?>" readonly></td>
                    <td>Tên nhân viên</td>
                    <td><input type="text" class='form-control'name='tennvpp' value="<?php echo $row['TenNVPP'] ?>" readonly></td>
                    <td>Địa chỉ</td>
                    <td><input type='text'class='form-control' name='diachi' value="<?php echo $row['DiaChiNha'] ?>"></td>
                    <td><?php
                        //echo $row['MaXa'];
                        echo $row['MaTinh'];
                      ?></td>
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
                      <br>
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
                      <br>
                      
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
                    <td>Giới tính</td>
                    <td>  
                      <select name="gioitinh" id="gioitinh" class="form-control" readonly>
                        <option value="<?php echo $row['GioiTinh'] ?>">Nam</option>
                        <option value="<?php echo $row['GioiTinh'] ?>">Nữ</option>
                      </select>
                    </td>
                    <td>Ngày sinh</td>
                    <td><input type='date'class='form-control' name='ngaysinh' value="<?php echo $row['NgaySinh']?>" readonly></td>
                    <td>Số điện thoại</td>
                    <td><input type='text'class='form-control' name='sdt' value="<?php echo $row['SDT'] ?>"></td>
                    <td>Email</td>
                    <td><input type='text'class='form-control' name='email' value="<?php echo $row['Email'] ?>"></td>
                    <br>
                    <td>Mã trung tâm phân phối</td>
                    <td>
                      <!-- <input type='text'class='form-control' name='mattpp' value="<?php echo $row['MaTrungTamPP'] ?>"> -->
                      <select class="form-control" name="mattpp" id="mattpp" required> 
                          <?php 

                            $dsttpp = new cTTPP();
                            $option_ttpp = $dsttpp ->select_trungtamphanphoi ($row['MaTrungTamPP']);
                            //
                            while($row1 = mysqli_fetch_array($option_ttpp,MYSQLI_ASSOC)) {
                              if ($row['MaTrungTamPP'] == $row1['MaTrungTamPP']) {
                                echo "<option value=".$row1['MaTrungTamPP']." selected>".$row1['TenTrungTam']."</option>";
                              } else {
                                echo "<option value=".$row1['MaTrungTamPP'].">".$row1['TenTrungTam']."</option>";
                              }
                              
                            }

                          ?>  
                        </select> 
                      
                    </td>
                    <br>
                    <td>Username</td>
                    <td><input type='text'class='form-control' name='username' value="<?php echo $row['username'] ?>"></td>
                  </div>
                  <div>
                    <?php
                        }
                      }
                    }
                    ?>
                  </div>
                  
                </div>
                <button type="submit" class="btn btn-primary" name="submit" style="margin-left:45%">Submit</button>
                <button type="reset" class="btn btn-primary">Reset</button>
                <!-- <input type="submit" value="Thêm Doanh Nghiệp" style="text-align:center"> -->
              </form>
              <!-- <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Mã doanh nghiệp</th>
                      <th>Tên doanh nghiệp</th>
                      <th>Số điện thoại</th>
                      <th>Địa chỉ</th>
                      <th>Email</th>
                      <th>Mã số thuế</th>
                      <th>Ngày lập </th>
                      <th>Giới thiệu</th>
                      <th>Tên người đại diện</th>
                      <th>Tác vụ</th>                 
                    </tr>
                  </thead>
                  <tbody>
                  
                  </tbody>
                </table>
              </div>-->
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
      $MaVaiTro=2;
      //echo $username;
      $p = new cNVPP();
      $tk = new ctaikhoan();
      $check= $p->check_user($username);
      //var_dump ($check);
      if(mysqli_num_rows($check)>0){
        $update=$p->update_nhanvienphanphoi($MaNVPP, $TenNVPP, $SDT, $DiaChiNha, $NgaySinh,$Email,$GioiTinh,$MaXa,$MaTrungTamPP, $username);
        if($update==1){
        echo "<script>alert('Cập nhật thành công');</script>";
          // echo "<script>window.location.href='?qlkhtv'</script>";
        }else {
          echo "<script>alert('Cập nhật không thành công');</script>";
          // echo "<script>window.location.href='?qlkhtv'</script>";
        }
      }else{
        if($username !=""){
          $update=$tk->add_taikhoan($MaVaiTro, $username);
          if($update==1){
            $update=$p->update_nhanvienphanphoi($MaNVPP, $TenNVPP, $SDT, $DiaChiNha, $NgaySinh,$Email,$GioiTinh,$MaXa,$MaTrungTamPP, $username);
            if($update==1){
               echo "<script>alert('Cập nhật thành công');</script>";
              // echo "<script>window.location.href='?qlkhtv'</script>";
            }else {
              echo "<script>alert('Cập nhật không thành công');</script>";
              // echo "<script>window.location.href='?qlkhtv'</script>";
            }
          }
        }else {
          //echo "<script>alert(".$username.")</script>";
          $update=$p->update_nhanvienphanphoi($MaNVPP, $TenNVPP, $SDT, $DiaChiNha, $NgaySinh,$Email,$GioiTinh,$MaXa,$MaTrungTamPP, $username);
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
