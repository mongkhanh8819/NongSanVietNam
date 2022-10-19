<?php 
	
	include_once("Controller/CONTROLLER_AJAX/cDiaChi.php");
	include_once("Controller/KhachHangDoanhNghiep/cKhachHangDoanhNghiep.php");
	$p = new cKhachHangDoanhNghiep();

 ?>
<div>
	<style>
		label.filebutton1 {
		    width:240px;
		    height:30px;
		    overflow:hidden;
		    position:relative;
		    background-color:#ccc;
		}
 
		label span input {
		    z-index: 999;
		    line-height: 0;
		    font-size: 50px;
		    position: absolute;
		    top: -2px;
		    left: -700px;
		    opacity: 0;
		    filter: alpha(opacity = 0);
		    -ms-filter: "alpha(opacity=0)";
		    cursor: pointer;
		    _cursor: hand;
		    margin: 0;
		    padding:0;
		}
	</style>	
<form action="#" method="post" enctype="multipart/form-data">

  <div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
      <div class="col-md-3 border-right">
        <div class="d-flex flex-column align-items-center text-center p-3 py-5">
            
            <?php 
            // echo'<i class="fa fa-pen" style="color: blue;">';
            // echo "<input style type='file' name='fflie' value='". $_SESSION['avatar']."'>";
            // echo '</i>';
            //echo "<img class='rounded-circle mt-5' width='150px' src='assets/uploads/avatar/".$_SESSION['avatar']."'></img>"; 
            //echo $_SESSION['avatar'];
            if ($_SESSION['avatar'] != "") {
             echo "<label class='filebutton'><img class='rounded-circle mt-6' width='270px' src='assets/uploads/avatar/".$_SESSION['avatar']."'></img><span><input type='file' id='myfile' name='myfile'></span></label>"; 
            } else {
              echo "<label class='filebutton1'><input type='file' id='myfile' name='myfile'></label>";
            }

            ?>

            <span class="font-weight-bold">
            <?php
                //echo $_SESSION['tenncc'];
              ?>
            </span><span class="text-black-50">
            <?php
                //echo $_SESSION['email'];
              ?>
            </span><span> </span>
        </div>
      </div>
      <div class="col-md-8 border-right">
        <div class="p-3 py-5">
          <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="text-right"><b>Cập nhật thông tin nhà cung cấp</b></h4>
          </div>
          <!-- THÔNG TIN NGƯỜI ĐẠI DIỆN -->
          <!--  -->
          <!--  -->
          <!--  -->
          <!--  -->
          <!--  -->
          <div class="d-flex justify-content-between align-items-center mb-3">
            <h5 class="text-right">Thông tin <b>NGƯỜI ĐẠI DIỆN</b></h5>
          </div>
          <div class="row mt-6">
          	<?php 
              //echo $_SESSION['MaDN'];
          		$tt = $p -> get_khdn_by_id($_SESSION['MaDN']);
              //var_dump($tt);
          		if ($tt) {
          			while ($row = mysqli_fetch_array($tt)) {
          				?>
          <div class="row col-mt-12"><label class="labels">Mã doanh nghiệp</label>
              <input type="text" class="user-infor form-control" name="tenndd" value="<?php echo $row['MaDN'] ?>">
          </div>
          <div class="row mt-6">
            <div class="col-md-6"><label class="labels">Tên doanh nghiệp</label>
              <input type="tel" class="user-infor form-control" name="sdtndd" value="<?php echo $row['TenDoanhNghiep'] ?>">
            </div>
            <div class="col-md-6"><label class="labels">Email doanh nghiệp</label>
              <input type="email" class="user-infor form-control" placeholder="Nhập Email doanh nghiệp" name="emailndd" value="<?php echo $row['Email'] ?>">
            </div>
            <div class="col-md-6"><label class="labels">Mã số thuế</label>
              <input type="text" class="user-infor form-control" name="sdtndd" value="<?php echo $row['MST'] ?>">
            </div>
            <div class="col-md-6"><label class="labels">Ngày thành lập</label>
              <input type="date" class="user-infor form-control" placeholder="Nhập Email doanh nghiệp" name="emailndd" value="<?php echo $row['NgayThanhLap'] ?>">
            </div>
            <!-- <div class="col-md-12"><label class="labels">Ngày sinh</label>
              <input type="date" class="user-infor form-control" name="date" value="<?php //echo $row['NgaySinh'] ?>">
            </div> -->
            <div class="col-md-12"><label class="labels">Địa chỉ doanh nghiệp</label>
              <input type="text" class="user-infor form-control" placeholder="Nhập địa chỉ doanh nghiệp" name="diachindd" value="<?php echo $row['DiaChi'] ?>">
            </div>
            <div class="col-md-12"><label class="labels">Số điện thoại doanh nghiệp</label>
              <input type="text" class="user-infor form-control" placeholder="Nhập địa chỉ doanh nghiệp" name="diachindd" value="<?php echo $row['SDT'] ?>">
            </div>
            
          </div>
          <!-- THÔNG TIN NGƯỜI ĐẠI DIỆN -->
          <!--  -->
          <!--  -->
          <!--  -->
          <!--  -->
          <!--  -->
          <div class="d-flex justify-content-between align-items-center mb-3">
            <h5 class="text-right">Thông tin <b>NHÀ CUNG CẤP NÔNG SẢN</b></h5>
          </div>

          <div class="row mt-6">
            <div class="col-md-6"><label class="labels">Tên nhà cung cấp</label>
              <input type="text" class="user-infor form-control" name="tenncc" value="<?php echo $row['TenNhaCungCap'] ?>">
            </div>
            <div class="col-md-6"><label class="labels">Email nhà cung cấp</label>
              <input type="text" class="user-infor form-control" name="emailncc"  value="<?php echo $row['EmailNCC'] ?>">
            </div>
            <!-- <div class="col-md-12"><label class="labels">Ngày sinh</label>
              <input type="date" class="user-infor form-control" name="date" value="<?php //echo $row['NgaySinh'] ?>">
            </div> -->
            <div class="col-md-6"><label class="labels">Số điện thoại nhà cung cấp</label>
              <input type="tel" class="user-infor form-control" name="sdtncc" value="<?php echo $row['SDT_NCC'] ?>">
            </div>
            <div class="col-md-12"><label class="labels">Địa chỉ nhà cung cấp</label>
              <input type="text" class="user-infor form-control" name="diachi" value="<?php echo $row['DiaChi_NCC'] ?>">
            </div>
            <!-- AJAX TỈNH HUYỆN XÃ -->
        <div class="input-group col-md-6">
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
        <div class="input-group col-md-6">
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
        <div class="input-group col-md-6">
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
        <!--  -->
            
          </div>
          <?php
          			}
          		}

          	 ?>

          <div class="mt-5 text-center">
            <input type="submit"  name="btnsubmit" class="btn btn-success" value="Lưu thông tin" id="add">
          </div>
        </div>
      </div>
  </div>
</div>
</div>
</form>

<?php 

        ///----------------------------
        ///----------------------------
        ///----------------------------
        ///----------------------------
        ///--------XỬ LÝ CẬP NHẬT THÔNG TIN NHÂN VIÊN PHÂN PHỐI
        ///----------------------------
        ///----------------------------
        ///----------------------------
        ///----------------------------
        if (isset($_REQUEST['btnsubmit'])) {
            $mancc = $_SESSION['MaNCC'];
            $tenncc = $_REQUEST['tenncc'];
            $tenndd = $_REQUEST['tenndd'];
            $diachincc = $_REQUEST['diachi'];
            $diachindd = $_REQUEST['diachindd'];
            $sdtncc = $_REQUEST['sdtncc'];
            $sdtndd = $_REQUEST['sdtndd'];
            $emailncc = $_REQUEST['emailncc'];
            $emailndd = $_REQUEST['emailndd'];
            $maxa = $_REQUEST['xa'];
            ////
            $file = $_FILES['myfile']['tmp_name'];
            $type = $_FILES['myfile']['type'];
            $hinhanh = $_FILES['myfile']['name'];
            $size = $_FILES['myfile']['size'];

            // echo $maccc."<br>";
            // echo $tenncc."<br>";
            // echo $tenndd."<br>";
            // echo $diachincc."<br>";
            // echo $diachindd."<br>";
            // echo $sdtncc."<br>".$sdtndd."<br>";
            // echo $emailncc."<br>".$emailndd."<br>";
            // echo $file."<br>";
            // echo $type."<br>";
            // echo $hinhanh."<br>";
            // echo $size."<br>";
            $kq = $p-> edit_ncc_by_id($mancc,$tenncc,$tenndd,$diachincc,$diachindd,$sdtncc,$sdtndd,$emailncc,$emailndd,$maxa,$hinhanh,$file,$type,$size);
            //thông báo
            if($kq == 1){
              echo "<script>alert('Cập nhật thông tin thành công');</script>";
              echo "<script>window.location.href = 'index.php';</script>";
            }elseif($kq == 0){
              echo "<script>alert('Cập nhật thất bại')</script>";
            }elseif($kq == -1){
              echo "<script>alert('Không thể upload')</script>";
            }elseif($kq == -2){
              echo "<script>alert('Size > 2MB')</script>";
            }elseif($kq == -3){
              echo "<script>alert('Không đúng định dạng file')</script>";
            }else{
              echo "<script>alert('Cập nhật dữ liệu thất bại')</script>";
            }
        }

       ?>
</div>
<!--  -->