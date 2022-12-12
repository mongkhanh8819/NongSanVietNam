<?php
    include_once("controller/NhomNongSan/cnhomnongsan.php");
    include_once("controller/LoaiNongSan/cloainongsan.php");
     $MaLoaiNongSan = $_REQUEST['MaLoaiNongSan'];
    // echo $MaNVPP;
    $p = new cLoaiNongSan();
    $b=new cNhomNS();
    $dsnns=$b->select_NhomNS();
    $table = $p-> select_loainongsan_byid($MaLoaiNongSan);
?> 
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản lý Thông Tin Loại Nông Sản</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
              <li class="breadcrumb-item active">Quản lý Loại Nông Sản</li>
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
              <h3 style="text-align:center">Cập nhật thông tin loại nông sản</h3>
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
                    
                  
                    </div>
                    <div class="col-md-4">
                        <td>Mã loại nông sản</td>
                        <td><input type='text'class='form-control' name='txtmaloainongsan' value="<?php echo $row['MaLoaiNongSan'] ?>" readonly></td>
                        <td>Tên loại nông sản</td>
                        <td><input type='text'class='form-control' name='txttenloainongsan' value="<?php echo $row['TenLoaiNongSan'] ?>"></td>
                        <td>Mã Nhóm Nông Sản</td>
                        <td>
                      <!-- <input type='text'class='form-control' name='mattpp' value="<?php echo $row['MaTrungTamPP'] ?>"> -->
                        <select class="form-control" name="manhomnongsan" id="manhomnongsan" required> 
                          <?php 

                            $dsnns = new cNhomNS();
                            $option_nns = $dsnns ->select_NhomNS ($row['MaNhomNongSan']);
                            //
                            while($row1 = mysqli_fetch_array($option_nns,MYSQLI_ASSOC)) {
                              if ($row['MaNhomNongSan'] == $row1['MaNhomNongSan']) {
                                echo "<option value=".$row1['MaNhomNongSan']." selected>".$row1['TenNhomNongSan']."</option>";
                              } else {
                                echo "<option value=".$row1['MaNhomNongSan'].">".$row1['TenNhomNongSan']."</option>";
                              }
                              
                            }

                          ?>  
                        </select> 
                      
                        </td>
                    </div>
                  </div>
                  <div class="col-md-4">
                    
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
                <button type="submit" class="btn btn-primary" name="submit" style="margin-left:45%">Submit</button>
                <!-- <button type="submit" class="btn btn-primary" name="Reset" >Reset</button> -->
                      
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
        $MaLoainNongSan=$_REQUEST["txtmaloainongsan"];
        $TenLoaiNongSan=$_REQUEST["txttenloainongsan"];
        $MaNhomnNongSan=$_REQUEST["manhomnongsan"];
        $p = new cLoaiNongSan();
        $table=$p->update_loainongsan($MaLoaiNongSan,$TenLoaiNongSan,$MaNhomnNongSan);
        if ($table==1) {
            echo "<script>alert('Cập nhật thành công');</script>";
            echo "<script>window.location.href='?quanliloainongsan'</script>";
        }else {
            echo "<script>alert('Cập nhật không thành công');</script>";
            echo "<script>window.location.href='?quanliloainongsan'</script>";
        }
    
    }
  ?>