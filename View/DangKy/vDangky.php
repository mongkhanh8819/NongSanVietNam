<div style="margin-top: 5%;">
<form id="dangky" action="" method="post">
  <h2 id="dk" style="color:#141823; text-align:center; font-size: 30px; 
  line-height:38px; font-weight:1000; font-family:'roboto'">ĐĂNG KÝ THÀNH VIÊN</h2>
  <div class="loginheader">
    <h4 class="title">Nhập đầy đủ thông tin để tiến hành dăng ký!.</h4>
  </div>

  <div class="loginbox radius w3-col s5" style="margin-left:150px; padding-left: 1.5%; width: 75%;">
   
    <div class="loginboxinner radius" style="float: left;">
      <!--loginheader-->
     <div class="loginform">
<p><select id="sl_nnd" name = "sl_nnd">
     <option value="">Chọn nhóm ngưòi dùng</option>
     <option value="0">Ngưòi dùng cá nhân</option>
     <option value="1">Tổ chức - Công ty</option>

   </select>
 </p>
 <div style="color: red;" id="alert_nnd"></div>
 <p  id="themtenct"></p>
 <p id="themsdtct"></p>
 <p  id="themdcct"></p>
        <p>
          <input type="text" id="sdt" name="sdt" placeholder="Nhập số điện thoại >= 10 và <=  11 ký tự!" class="radius" />
        </p>
        <div style="color: red;" id="alert_sdt"></div>
        <p>
          <input style=" width: 209px; text-align: left;" class="radius" class="ho" type="text" name="ho" id="ho" placeholder="Họ">
          <input class="radius" style="width: 209px;" type="text" name="ten" id="ten" placeholder="Tên">
        </p>
        <span style="color: red;" id="alert_ho_ten"></span>
        <p>
          <input type="email" id="email" name="email" placeholder="Email" value="<?php if(isset( $_SESSION['email'])) echo $_SESSION['email'];?>" class="radius" />
        </p>
        <p>
          <input type="password" id="matkhau" name="matkhau" placeholder="Mật khẩu >= 8 ký tự" class="radius" />
        </p>
        <div style="color: red;" id="alert_pass"></div>
        <p>
          <input type="password" id="rematkhau" name="rematkhau" placeholder="Xác nhận mật khẩu" class="radius" />
        </p>
        <div style="color: red;" id="alert_repass"></div>
      </div>

    </div>

    <div class="w3-col s5 radius1" style="float: left; padding-top: 0.7%;">
      <p>
        <select class="tinh" id="sltinh" name="sltinh">
          <option value=""> Chọn tỉnh</option>
          <?php
          mysqli_set_charset($conn, 'UTF8');
          $sql = "SELECT * FROM tinh_thanh";
          $result = mysqli_query($conn,$sql);
          while($rows = mysqli_fetch_array($result,MYSQLI_ASSOC)){
           ?>
           <option value=<?php echo $rows['id_tinh']; ?>> <?php echo $rows['TINH_NAME']; ?></option>
           <?php 
         }
         ?>
       </select>
       <div style="color: red;" id="alert_tinh"></div>
     </p>
     <p>
      <select class="huyen" name="slhuyen" id="slhuyen">
        <option value=""> Chọn huyện</option>
      </select>
    </p>
    <div style="color: red;" id="alert_huyen"></div>
    <p>
      <select class="xa" name="slxa" id="slxa">
        <option value=""> Chọn xã</option>
      </select>
    </p>
    <div style="color: red;" id="alert_xa"></div>
    <p>
     <p>
      <select class="htx" name="slhxa" id="slhxa">
        <option value=""> Chọn hợp tác xã</option>
        <?php
        $sql1 = "SELECT * FROM HOPTACXA";
        $result = mysqli_query($conn,$sql1);
        while($rows = mysqli_fetch_array($result,MYSQLI_ASSOC)){
          ?>
          <option value="<?php echo $rows['HTX_ID'];?>"> <?php echo $rows['HTX_TEN']; ?></option>
          <?php
        }
        ?>
      </select>
    </p>
    <div style="color: red;" id="alert_hta"></div>

    <p>
      <select class="" id="slgioitinh" name="slgioitinh">
        <option value=""> Chọn giới tính</option>
        <option value="Nam">Nam</option>
        <option value="Nũ">Nữ</option>
        <option value="Không xác định">Không xác định</option>
      </select>
      <div style="color: red;" id="alert_gioitinh"></div>
    </p>
      
    <div style="color: red;" id="alert_email"></div>

  </div>
  <style type="text/css">
    .sl select{
      width: 200px;
      float: left;
      margin-left: 4%;
      margin-bottom: 2%;
    }
  </style>
  <div class="w3-col s12 sl" style="padding-left: 8%;">
    <select id="slngaysinh" name="slngaysinh">
      <option>Ngày sinh</option>
      <?php
        for($i=1;$i<=31;$i++){
          ?>
         <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
          <?php
        }
     ?> 
    </select>

    <select id="slthangsinh" name="slthangsinh">
      <option>Tháng sinh</option>
       <?php
        for($i=1;$i<=12;$i++){
          ?>
         <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
          <?php
        }
     ?> 
    </select>

    <select id="slnamsinh" name="slnamsinh">
      <option>Năm sinh</option>
       <?php
       $year = date("Y");
        for($i=1900;$i<=$year;$i++){
          ?>
         <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
          <?php
        }
     ?> 
    </select>
  </div>
 <div class="w3-col s12" style="padding-left: 25%;">
  <p id="dk">
    <input style="width: 200px; float: left;" type="button" class="w3-blue" name="dangky" id="dangky" onclick="check_dk();" value="Đăng ký">
     <input style="margin-left: 3px; width: 200px; float: left;" type="button" class="w3-red" name="dangky" id="trolai"  value="Trở lại">
  </p>
</div>

</div>
<!--loginform-->
</div>
<!--loginboxinner-->
</div>
<!--loginbox-->
</div>
</form>