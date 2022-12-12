<?php
    include("controller/NhaCungCap/cNcc.php");
    include("controller/TaiKhoan/ctaikhoan.php");
     $MaNCC = $_REQUEST['MaNCC'];
    echo $MaNCC;
    $p = new cNcc();
    $a = new ctaikhoan();
    $table = $p-> select_NCC_byid($MaNCC);
?> 
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản lý Thông Tin Nhà Cung Cấp</h1>
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
              <h3 style="text-align:center">Cập nhật thông tin nhà cung cấp</h3>
              <form action="#"  method="post" enctype="multipart/form-data">
                <div class="row-md-12">
                  <div class="row">
                    <?php
                      // if($table){
                      //   if(mysqli_num_rows($table)>0){
                      //     while ($row=mysqli_fetch_assoc($table)) {
                      //       echo "<td>Mã nhà cung cấp</td>";
                      //       echo "<td><input type='text'class='form-control' name='txtmancc' value='" . $row['MaNCC'] . "'></td>";
                      //       echo "<td>Tên nhà cung cấp</td>";
                      //       echo "<td><input type='text'class='form-control' name='txttenncc' value='" . $row['TenNhaCungCap'] . "'></td>";
                      //       echo "<td>Tên người đại diện</td>";
                      //       echo "<td><input type='text' class='form-control' name='txttenndd' value='" . $row['TenNguoiDaiDien'] . "'></td>";
                      //       echo "<br>";
                            
                      //       echo "<td><img src='assets/uploads/images/".$row['HinhAnh']."' alt='' height='200px' width='300px'></td>";
                            
      
                      //       echo "<br>";
                      //       echo "<td>Địa chỉ nhà cung cấp</td>";
                      //       echo "<td><input type='text'class='form-control' name='txtdiachincc' value='" . $row['DiaChi_NCC'] . "'></td>";
                      //       echo "<td>Địa chỉ người đại diện</td>";
                      //       echo "<td><input type='text'class='form-control' name='txtdiachindd' value='" . $row['DiaChi_NDD'] . "'></td>";
                      //       echo "<td>Số điện thoại nhà cung cấp</td>";
                      //       echo "<td><input type='text'class='form-control' name='txtsdtncc' value='" . $row['SDT_NCC'] . "'></td>";
                      //       echo "<td>Số điện thoại người đại diện</td>";
                      //       echo "<td><input type='text'class='form-control' name='txtsdtndd' value='" . $row['SDT_NDD'] . "'></td>";
                      //       echo "<td>Email nhà cung cấp</td>";
                      //       echo "<td><input type='text' class='form-control' name='txtemailncc' value='" . $row['EmailNCC'] . "'></td>";
                      //       echo "<td>Email người đại diện</td>";
                      //       echo "<td><input type='text' class='form-control' name='txtemailndd' value='" . $row['EmailNDD'] . "'></td>";
                      //       echo "<td>Username</td>";
                      //       echo "<td><input type='text'class='form-control' name='Username' value='" . $row['username'] . "'></td>";
                      //       echo "<td>Mã xã</td>";
                      //       ?>
                      <!-- //         <div class="input-group mb-3"> -->
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
              
                      <!-- //         </div> -->
                      <!-- //       <div class="input-group mb-3"> -->
                      <!-- //         <select class="form-control" name="huyen" id="huyen" required> -->
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
                      <!-- //       </div> -->
                      <!-- //       <div class="input-group mb-3"> -->
                      <!-- //         <select class="form-control" name="xa" id="xa" required> -->
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
                    <td>Mã nhà cung cấp</td>
                    <td><input type='text'class='form-control' name='txtmancc' value="<?php echo $row['MaNCC'] ?>" readonly></td>
                    <td>Tên nhà cung cấp</td>
                    <td><input type='text'class='form-control' name='txttenncc' value="<?php echo $row['TenNhaCungCap'] ?>"></td>
                    <td>Địa chỉ nhà cung cấp</td>
                    <td><input type='text'class='form-control' name='txtdiachincc' value="<?php echo $row['DiaChi_NCC'] ?>"></td>
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
                    <td>Số điện thoại nhà cung cấp</td>
                    <td><input type='text'class='form-control' name='txtsdtncc' value="<?php echo $row['SDT_NCC'] ?>"></td>
                    <td>Email nhà cung cấp</td>
                    <td><input type='text' class='form-control' name='txtemailncc' value="<?php echo $row['EmailNCC'] ?>"></td>
                    <td>Tên người đại diện</td>
                    <td><input type='text'class='form-control' name='txttenndd' value="<?php echo $row['TenNguoiDaiDien'] ?>"></td> 
                    <td>Số điện thoại người đại diện</td>
                    <td><input type='text'class='form-control' name='txtsdtndd' value="<?php echo $row['SDT_NDD'] ?>"></td> 
                    <td>Địa chỉ người đại diện</td>
                    <td><input type='text'class='form-control' name='txtdiachindd' value="<?php echo $row['DiaChi_NDD'] ?>"></td>
                    <td>Email người đại diện</td>
                    <td><input type='text' class='form-control' name='txtemailndd' value="<?php echo $row['EmailNDD'] ?>"></td>      
                    <td>Username</td>
                    <td><input type='text'class='form-control' name='Username' value="<?php echo $row['username'] ?>"></td>
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
      $MaNCC=$_REQUEST["txtmancc"];
      $TenNCC=$_REQUEST["txttenncc"];
      $TenNDD=$_REQUEST["txttenndd"];
      $DiaChi_NCC=$_REQUEST["txtdiachincc"];
      $DiaChi_NDD=$_REQUEST["txtdiachindd"];
      $SDT_NCC=$_REQUEST["txtsdtncc"];
      $SDT_NDD=$_REQUEST["txtsdtndd"];
      $Email_NCC=$_REQUEST["txtemailncc"];
      $Email_NDD=$_REQUEST["txtemailndd"];
      $username=$_REQUEST["Username"];
      $MaXa=$_REQUEST["xa"];
      $MaVaiTro=3;
      $p = new cNCC();
      $tk = new ctaikhoan();
      $check= $p->check_user($username);
      if(mysqli_num_rows($check)>0){
        $update=$p->update_nhacungcap($MaNCC, $TenNCC, $TenNDD, $DiaChi_NCC, $DiaChi_NDD, $SDT_NCC,$SDT_NDD,$Email_NCC,$Email_NDD, $username, $MaXa);
        if($update==1){
          echo "<script>alert('Cập nhật thành công');</script>";
          echo "<script>window.location.href='?qlncc'</script>";
        }else {
          echo "<script>alert('Cập nhật không thành công');</script>";
          echo "<script>window.location.href='?qlncc'</script>";
        }
      }else {
        if($username !=""){
          $update= $tk->add_taikhoan($MaVaiTro,$username);
          if($update==1){
            $update=$p->update_nhacungcap($MaNCC, $TenNCC, $TenNDD, $DiaChi_NCC, $DiaChi_NDD, $SDT_NCC,$SDT_NDD,$Email_NCC,$Email_NDD, $username, $MaXa);
            if($update==1){
              echo "<script>alert('Cập nhật thành công');</script>";
              echo "<script>window.location.href='?qlncc'</script>";
            }else {
              echo "<script>alert('Cập nhật không thành công');</script>";
              echo "<script>window.location.href='?qlncc'</script>";
            }
          }
        }else {
          $update=$p->update_nhacungcap($MaNCC, $TenNCC, $TenNDD, $DiaChi_NCC, $DiaChi_NDD, $SDT_NCC,$SDT_NDD,$Email_NCC,$Email_NDD, $username, $MaXa);
          if($update==1){
            echo "<script>alert('Cập nhật thành công');</script>";
            echo "<script>window.location.href='?qlncc'</script>";
          }else {
            echo "<script>alert('Cập nhật không thành công');</script>";
            echo "<script>window.location.href='?qlncc'</script>";
          }
          
        }
      }
      
  }elseif (isset($_REQUEST["reset"])){
    echo "<script>alert('Cập nhật không thành công')</script>";
      //echo header("refresh:0; url='index.php?qlbv'");
    echo "<script>window.location.href='?qlncc'</script>";
  }
  ?>
  