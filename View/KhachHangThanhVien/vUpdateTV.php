<?php 
	
	include_once("Controller/CONTROLLER_AJAX/cDiaChi.php");
	include_once("Controller/KhachHangThanhVien/cKhachHangThanhVien.php");
	$p = new cKhachHangThanhVien();

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
      <div><?php
          echo $_SESSION['avatar'];
      ?></div>
      <div class="col-md-8 border-right">
        <div class="p-3 py-5">
          <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="text-right"><b>C???P NH???T TH??NG TIN TH??NH VI??N</b></h4>
          </div>
          <!-- TH??NG TIN NG?????I ?????I DI???N -->
          <!--  -->
          <!--  -->
          <!--  -->
          <!--  -->
          <!--  -->
          <div class="row mt-6">
          	<?php 
              //echo $_SESSION['MaDN'];
          		$tt = $p -> get_khtv_by_id($_SESSION['MaKHTV']);
              //var_dump($tt);
          		if ($tt) {
          			while ($row = mysqli_fetch_array($tt)) {
          				?>
          <div class="row col-mt-12"><label class="labels">M?? kh??ch h??ng</label>
              <input type="text" class="user-infor form-control" name="makh" value="<?php echo $row['MaKHTV'] ?>" readonly>
          </div>
          <div class="row mt-6">
            <div class="col-md-6"><label class="labels">T??n kh??ch h??ng</label>
              <input type="tel" class="user-infor form-control" name="tenkh" value="<?php echo $row['Ten_KHTV'] ?>">
            </div>
            <div class="col-md-6"><label class="labels">Email</label>
              <input type="email" class="user-infor form-control" placeholder="Nh???p Email" name="email" value="<?php echo $row['Email'] ?>">
            </div>
            <div class="col-md-12"><label class="labels">Ng??y sinh</label>
              <input type="date" class="user-infor form-control" name="date" value="<?php echo $row['NgaySinh'] ?>">
            </div>
            <?php 

              $array = array(
                  "0" => "Nam",
                  "1" => "N???",
              );

             ?>
            <div class="col-md-12"><label class="labels">Gi???i t??nh</label><br>
              <?php 
                foreach($array as $key=>$a){
                  if($key != $row['GioiTinh']){
                    echo "<input type='radio' name='gioitinh' value='".$key."'>".$a."";
                  } elseif($row['GioiTinh'] == NULL){
                    echo "<input type='radio' name='gioitinh' value='".$key."'>".$a."";
                  } else{
                    echo "<input type='radio' name='gioitinh' value='".$row['GioiTinh']."' checked='checked'>".$a."";
                  }
              }
               ?>
            </div>
            <div class="col-md-12"><label class="labels">S??? ??i???n tho???i</label>
              <input type="text" class="user-infor form-control" placeholder="Nh???p s??? ??i???n tho???i kh??ch h??ng" name="sdt" value="<?php echo $row['SDT'] ?>">
            </div>
            <div class="col-md-12"><label class="labels">?????a ch???</label>
              <input type="text" class="user-infor form-control" placeholder="Nh???p ?????a ch??? kh??ch h??ng" name="diachi" value="<?php echo $row['DiaChi'] ?>">
            </div>
                    
          </div>
            <!-- AJAX T???NH HUY???N X?? -->
        <div class="input-group col-md-6">
          <select class="form-control" name="tinh" id="tinh" required>
            <option value="">--Vui l??ng ch???n t???nh--</option>
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
            <option value="">--Vui l??ng ch???n huy???n--</option>
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
            <option value="">--Vui l??ng ch???n x??--</option>
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
            $makh = $_SESSION['MaKHTV'];
            $name = $_REQUEST['tenkh'];
            $sdt = $_REQUEST['sdt'];
            $email = $_REQUEST['email'];
            $diachi = $_REQUEST['diachi'];
            $ngaysinh = $_REQUEST['date'];
            $gioitinh = $_REQUEST['gioitinh'];
            $maxa = $_REQUEST['xa'];
            ////
            $file = $_FILES['myfile']['tmp_name'];
            $type = $_FILES['myfile']['type'];
            $hinhanh = $_FILES['myfile']['name'];
            $size = $_FILES['myfile']['size'];
            // echo $makh."<br>";
            // echo $name."<br>";
            // echo $sdt."<br>";
            // echo $email."<br>";
            // echo $diachi."<br>";
            // echo $ngaysinh."<br>";
            // echo $gioitinh."<br>";
            // echo $maxa."<br>";
            // echo $file."<br>";
            // echo $type."<br>";
            // echo $hinhanh."<br>";
            // echo $size."<br>";
            $kq = $p-> edit_khtv_by_id($makh,$name,$sdt,$diachi,$ngaysinh,$hinhanh,$email,$gioitinh,$maxa,$file,$type,$size);
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