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
<form action="" method="post" enctype="multipart/form-data">

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
             echo "<label class='filebutton'><img class='rounded-circle mt-6' width='260px' src='assets/uploads/avatar/".$_SESSION['avatar']."'></img><span><input type='file' id='myfile' name='myfile'></span></label>"; 
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
            <h4 class="text-right"><b>C???P NH???T TH??NG TIN DOANH NGHI???P</b></h4>
          </div>
          <!-- TH??NG TIN NG?????I ?????I DI???N -->
          <!--  -->
          <!--  -->
          <!--  -->
          <!--  -->
          <!--  -->
          <div class="d-flex justify-content-between align-items-center mb-3">
            <h5 class="text-right">Th??ng tin <b>DOANH NGHI???P</b></h5>
          </div>
          <div class="row mt-6">
          	<?php 
              //echo $_SESSION['MaDN'];
          		$tt = $p -> get_khdn_by_id($_SESSION['MaDN']);
              //var_dump($tt);
          		if ($tt) {
          			while ($row = mysqli_fetch_array($tt)) {
          				?>
          <div class="row col-mt-12"><label class="labels">M?? doanh nghi???p</label>
              <input type="text" class="user-infor form-control" name="madn" value="<?php echo $row['MaDN'] ?>" readonly>
          </div>
          <div class="row mt-6">
            <div class="col-md-6"><label class="labels">T??n doanh nghi???p</label>
              <input type="tel" class="user-infor form-control" name="tendn" value="<?php echo $row['TenDoanhNghiep'] ?>">
            </div>
            <div class="col-md-6"><label class="labels">Email doanh nghi???p</label>
              <input type="email" class="user-infor form-control" placeholder="Nh???p Email doanh nghi???p" name="emaildn" value="<?php echo $row['Email'] ?>">
            </div>
            <div class="col-md-6"><label class="labels">M?? s??? thu???</label>
              <input type="text" class="user-infor form-control" name="mst" value="<?php echo $row['MST'] ?>">
            </div>
            <div class="col-md-6"><label class="labels">Ng??y th??nh l???p</label>
              <input type="date" class="user-infor form-control" placeholder="Nh???p Email doanh nghi???p" name="ngaytl" value="<?php echo $row['NgayThanhLap'] ?>">
            </div>
            <!-- <div class="col-md-12"><label class="labels">Ng??y sinh</label>
              <input type="date" class="user-infor form-control" name="date" value="<?php //echo $row['NgaySinh'] ?>">
            </div> -->
            <div class="col-md-12"><label class="labels">?????a ch??? doanh nghi???p</label>
              <input type="text" class="user-infor form-control" placeholder="Nh???p ?????a ch??? doanh nghi???p" name="diachidn" value="<?php echo $row['DiaChi'] ?>">
            </div>
            <div class="col-md-12"><label class="labels">S??? ??i???n tho???i doanh nghi???p</label>
              <input type="text" class="user-infor form-control" placeholder="Nh???p ?????a ch??? doanh nghi???p" name="sdtdn" value="<?php echo $row['SDT'] ?>">
            </div>
            <div class="col-md-12"><label class="labels">Gi???i thi???u</label>
              <!-- <input type="text" class="user-infor form-control" placeholder="Nh???p ?????a ch??? doanh nghi???p" name="gioithieudn" value="<?php //echo $row['GioiThieu'] ?>"> -->
              <textarea name="gioithieudn" cols="30" rows="10" class="form-control"><?php echo $row['GioiThieu']; ?></textarea>
            </div>         
          </div>
          <!-- TH??NG TIN NG?????I ?????I DI???N -->
          <!--  -->
          <!--  -->
          <!--  -->
          <!--  -->
          <!--  -->
          <div class="d-flex justify-content-between align-items-center mb-3">
            <h5 class="text-right">Th??ng tin <b>NG?????I ?????I DI???N</b></h5>
          </div>

          <div class="row mt-6">
            <div class="col-md-6"><label class="labels">T??n ng?????i ?????i di???n</label>
              <input type="text" class="user-infor form-control" name="tennguoidaidien" value="<?php echo $row['TenNguoiDaiDien'] ?>" placeholder="Nh???p t??n ng?????i ?????i di???n">
            </div>
            <div class="col-md-6"><label class="labels">Email ng?????i ?????i di???n</label>
              <input type="text" class="user-infor form-control" name="emailndd"  value="<?php echo $row['Email_NDD'] ?>" placeholder="Nh???p Email ng?????i ?????i di???n">
            </div>
            <!-- <div class="col-md-12"><label class="labels">Ng??y sinh</label>
              <input type="date" class="user-infor form-control" name="date" value="<?php //echo $row['NgaySinh'] ?>">
            </div> -->
            <div class="col-md-6"><label class="labels">S??? ??i???n tho???i ng?????i ?????i di???n</label>
              <input type="tel" class="user-infor form-control" name="sdtndd" value="<?php echo $row['SDT_NDD'] ?>" placeholder="Nh???p s??? ??i???n tho???i ng?????i ?????i di???n">
            </div>
            <div class="col-md-12"><label class="labels">?????a ch??? ng?????i ?????i di???n</label>
              <input type="text" class="user-infor form-control" name="diachindd" value="<?php echo $row['DiaChi_NDD'] ?>" placeholder="Nh???p ?????a ch??? ng?????i ?????i di???n">
            </div>
            <!-- AJAX T???NH HUY???N X?? -->
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
            <input type="submit"  name="submit" class="btn btn-success" value="L??u th??ng tin">
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
        ///--------X??? L?? C???P NH???T TH??NG TIN NH??N VI??N PH??N PH???I
        ///----------------------------
        ///----------------------------
        ///----------------------------
//var_dump($_REQUEST['click']);
 //echo "<script>alert('".$_REQUEST['click']."');</script>";
        ///----------------------------

        if (isset($_REQUEST['submit'])) {
            $madn = $_SESSION['MaDN'];
            $tendoanhnghiep = $_REQUEST['tendn'];
            $sdt = $_REQUEST['sdtdn'];
            $diachidn = $_REQUEST['diachidn'];
            $emaildn = $_REQUEST['emaildn'];
            $mst = $_REQUEST['mst'];
            $ngaytl = $_REQUEST['ngaytl'];
            $gioithieu = $_REQUEST['gioithieudn'];
            $tennguoidaidien = $_REQUEST['tennguoidaidien'];
            $diachindd = $_REQUEST['diachindd'];
            $sdtndd = $_REQUEST['sdtndd'];
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
            $kq = $p-> edit_khdn_by_id($madn,$tendoanhnghiep,$sdt,$diachidn,$emaildn,$mst,$ngaytl,$gioithieu,$tennguoidaidien,$hinhanh,$diachindd,$sdtndd,$emailndd,$maxa,$file,$type,$size);
            //th??ng b??o
            if($kq == 1){
              echo "<script>alert('C???p nh???t th??ng tin th??nh c??ng');</script>";
              echo "<script>window.location.href = 'index.php';</script>";
            }elseif($kq == 0){
              echo "<script>alert('C???p nh???t th???t b???i')</script>";
            }elseif($kq == -1){
              echo "<script>alert('Kh??ng th??? upload')</script>";
            }elseif($kq == -2){
              echo "<script>alert('Size > 2MB')</script>";
            }elseif($kq == -3){
              echo "<script>alert('Kh??ng ????ng ?????nh d???ng file')</script>";
            }else{
              echo "<script>alert('C???p nh???t d??? li???u th???t b???i')</script>";
            }
        }

       ?>
</div>
<!--  -->