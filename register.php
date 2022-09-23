<?php 
//DIFINE CONNECT
  require_once("config/config.php");
  include_once("Controller/CONTROLLER_AJAX/cDiaChi.php");
  include_once("Controller/KhachHangThanhVien/cKhachHangThanhVien.php");
  include_once("Controller/TaiKhoan/cTaikhoan.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ĐĂNG KÝ TÀI KHOẢN</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/vendor/font-awesome/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/vendor/dist/css/adminlte.min.css">
  <!-- jQuery -->
  <!-- <script src="assets/plugins/jquery/jquery.min.js"></script> -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js" type="text/javascript"></script> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  
  <!--  -->
  <script src="assets/public/ajax/ajax_tinh_thanh.js" type="text/javascript"></script>
  <script src="assets/public/ajax/ajax_loainguoidung.js" type="text/javascript"></script>
  <!-- Bootstrap 4 -->
  <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="assets/vendor/dist/js/adminlte.min.js"></script>
</head>
<body class="hold-transition register-page">
<div style="margin-top:200px"></div>
<div class="register-box">
  <div class="register-logo" style="">
    <a href="../../index2.html"><b>NÔNG SẢN </b>VIỆT</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Đăng Ký Thành viên</p>

      <form action="" method="post">
        <!-- CHỌN LOẠI TÀI KHOẢN -->
        <div class="input-group mb-3">
          <select class="form-control" name="vaitro" id="slvaitro">
            <option value="5">Ngưòi dùng cá nhân</option>
            <option value="4">Người dùng doanh nghiệp</option>
            <option value="3">Nhà cung cấp nông sản</option>
          </select>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <!-- TÊN DOANH NGHIỆP -->
        <div class="" id="themtendn">
          
        </div>
        <!-- MST -->
        <div class="" id="themmst">
          
        </div>
        <!-- GIỚI THIỆU -->
        <div class="" id="themgioithieu">
          
        </div>
        <!-- NHẬP HỌ TÊN -->
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="hoten" placeholder="Họ và tên" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <!--  -->
        <!-- NHẬP SỐ ĐIỆN THOẠI -->
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="sdt" placeholder="Số điện thoại" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <!--  -->
        <!-- CHỌN GIỚI TÍNH -->
        <div class="input-group mb-3">
          <select class="form-control" id="slgioitinh" name="slgioitinh" required>
            <option value=""> Chọn giới tính</option>
            <option value="0">Nam</option>
            <option value="1">Nữ</option>
          </select>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <!--  -->
        <!-- NHẬP EMAIL -->
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" placeholder="Email" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <!--  -->
        <!-- NHẬP NGÀY SINH HOẶC NGÀY THÀNH LẬP -->
        <div class="input-group mb-3">
          <input type="date" class="form-control" name="date" placeholder="Ngày sinh" required>
        </div>
        <!-- NHẬP ĐỊA CHỈ -->
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="diachi" placeholder="Địa chỉ (Số nhà, đường)" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-address-book"></span>
            </div>
          </div>
        </div>
        <!-- AJAX TỈNH HUYỆN XÃ -->
        <div class="input-group mb-3">
          <select class="form-control" name="tinh" id="tinh" required>
            <option value="">Chưa chọn Tỉnh/Thành</option>
            <?php include_once("View/process_ajax/tinh.php"); ?>  
          </select> 
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-industry"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <select class="form-control" name="huyen" id="huyen" required>
            <option value="">Chưa chọn Huyện/Quận</option>  
          </select> 
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-industry"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <select class="form-control" name="xa" id="xa" required>
            <option value="">Chưa chọn Xã/Phường</option>  
          </select> 
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-industry"></span>
            </div>
          </div>
        </div>
        <!--  -->
        <!-- THÔNG TIN TÀI KHOẢN -->
        <p class="login-box-msg">THÔNG TIN TÀI KHOẢN</p>
        <!-- NHẬP USERNAME -->
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="username" placeholder="Tên tài khoản" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <!--  -->
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Mật khẩu" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="nlpassword" placeholder="Nhập lại mật khẩu" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <!--  -->

        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               Tôi đồng ý với  <a href="#">các điều khoản</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block" name="dangky">Đăng Ký</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google mr-2"></i>
          Đăng nhập bằng Google
        </a>
      </div>

      <a href="login.html" class="text-center">Tôi đã có tài khoản</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->
<?php 

    if (isset($_REQUEST['dangky']) && isset($_REQUEST['terms'])) {
      if ($_REQUEST['vaitro'] == 5) { //người dùng cá nhân
          //----------------------------------------------------
        //----------------------------------------------------
        //----------------------------------------------------
        //------------------ĐĂNG KÝ TÀI KHOẢN NGƯỜI DÙNG CÁ NHÂN
        //----------------------------------------------------
        //----------------------------------------------------
        //----------------------------------------------------
          $hoten = $_REQUEST['hoten'];
          $sdt = $_REQUEST['sdt'];
          $diachi = $_REQUEST['diachi'];
          $ngaysinh = $_REQUEST['date'];
          $email = $_REQUEST['email'];
          $gioitinh = $_REQUEST['slgioitinh'];
          $maxa = $_REQUEST['xa'];
          $mahuyen = $_REQUEST['huyen'];
          $matinh = $_REQUEST['tinh'];
          $vaitro = $_REQUEST['vaitro'];
          $username = $_REQUEST['username'];
          $password = $_REQUEST['password'];

          $dk = new cTaikhoan();
          $user = new cKhachHangThanhVien();
          $insert = $dk -> them_taikhoan($username,$password,$vaitro);
          if ($insert == 1) {
            $ins_khtv = $user -> them_khtv($hoten,$sdt,$diachi,$ngaysinh,$email,$gioitinh,$username,$maxa);
            if ($ins_khtv == 1) {
              echo "<script>alert('Đăng ký thành công');</script>";
              echo "<script>window.location.href = 'index.php';</script>";
            } else {
              echo "<script>alert('Đăng ký thất bại');</script>";
            }
            
          }else {
            echo "<script>alert('Đăng ký thất bại');</script>";
          }
          
      } elseif ($_REQUEST['vaitro'] == 4) { //người dùng doanh nghiệp
        //----------------------------------------------------
        //----------------------------------------------------
        //----------------------------------------------------
        //------------------ĐĂNG KÝ TÀI KHOẢN NGƯỜI DÙNG DOANH NGHIỆP
        //----------------------------------------------------
        //----------------------------------------------------
        //----------------------------------------------------
          $hoten_ndd = $_REQUEST['hoten'];
          $sdt = $_REQUEST['sdt'];
          $diachidn = $_REQUEST['diachi'];
          $ngaythanhlap = $_REQUEST['date'];
          $email = $_REQUEST['email'];
          $gioitinh = $_REQUEST['slgioitinh'];
          $maxa = $_REQUEST['xa'];
          $mahuyen = $_REQUEST['huyen'];
          $matinh = $_REQUEST['tinh'];
          $vaitro = $_REQUEST['vaitro'];
          $username = $_REQUEST['username'];
          $password = $_REQUEST['password'];
          $tendn = $_REQUEST['tendn'];
          $mst = $_REQUEST['mst'];
          $gioithieu = $_REQUEST['gioithieu'];

          echo $hoten_ndd."<br>";
          echo $sdt."<br>";
          echo $diachidn."<br>";
          echo $ngaythanhlap."<br>";
          echo $email."<br>";
          echo $gioitinh."<br>";
          echo $maxa."<br>";
          echo $mahuyen."<br>";
          echo $matinh."<br>";
          echo $vaitro."<br>";
          echo $username ."<br>";
          echo $password."<br>";
          echo $tendn."<br>";
          echo $mst ."<br>";
          echo $gioithieu."<br>";
      } 
      
    }
    else{
      echo "cc";
    }

 ?>
</body>
</html>
