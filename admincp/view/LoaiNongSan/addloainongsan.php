<?php
 
  include_once("controller/NhomNongSan/cnhomnongsan.php");
  include_once("controller/LoaiNongSan/cloainongsan.php");
  $a= new cNhomNS;
  $dsnns=$a->select_NhomNS();
    //   $a=new ctaikhoan();
  //$dn = new cKHDN();
  
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
              <li class="breadcrumb-item active">Quản lý loại nông sản</li>
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
              <h3 style="text-align:center">Thêm loại Nông Sản</h3>
              <form action="#" method='post'>
                <div class="row">
                  <div class="col-md-4">
                    
                  </div>
                  <div class="col-md-4">
                    <!-- <td>Mã nhóm nông sản</td> -->
                    <!-- <br> -->
                    <!-- <input type="text" class="form-control" id="manhomnongsan" placeholder="Enter Mã nhóm nông sản" name="manhomnongsan"></br> -->
                    <td>Tên loại nông sản</td>
                    <input type="text" class="form-control" id="tenloainongsan" placeholder="Enter Tên nhóm nông sản" name="tenloainongsan"></br>
                    <td>Mã Nhóm Nông Sản</td>
                    <select name="manhomnongsan" id="maloainongsan" class="form-control">
                    <option value="">Chọn Nhóm Nông Sản
                        <?php 
                          if($dsnns){
                            if(mysqli_num_rows($dsnns)){
                            while($row1 = mysqli_fetch_assoc($dsnns)){
                              ?>
                                <option value="<?php echo $row1['MaNhomNongSan']; ?>" <?php if(isset($_POST['MaNhomNongSan'])&&$_POST['MaNhomNongSan']==$row1['MaNhomNongSan']) echo "selected " ?>><?php echo $row1['TenNhomNongSan'] ?></option>
                                <?php 
                            }
                            }
                        }
                        ?>
                      </option>
                    </select>
                </div>
                  <div class="col-md-4">

                  </div>
                </div>
                <button type="submit" class="btn btn-primary" name="submit" style="margin-left:45%">Thêm</button>
                <!-- <button type="submit" class="btn btn-primary" name="reset" >Reset</button> -->
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
  <!--  -->
  <?php
    if(isset($_REQUEST["submit"])){
      // $MaNhomNongSan=$_REQUEST["manhomnongsan"];
      $TenLoaiNongSan=$_REQUEST["tenloainongsan"];
      $MaNhomNongSan=$_REQUEST["manhomnongsan"];
      $p=new cLoaiNongSan();
        $table=$p-> add_loainongsan($TenLoaiNongSan,$MaNhomNongSan);
        var_dump($table);
        if($table==1){
          echo "<script>alert('Thêm thành công');</script>";
          echo "<script>window.location.href='?quanliloainongsan'</script>";
        }else{
          echo "<script>alert('Thêm không thành công');</script>";
          echo "<script>window.location.href='?quanliloainongsan'</script>";
        }

     
    }

  ?>