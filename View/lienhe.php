<?php 
	
	include("Controller/CLASS/clsMailer.php");
	include("Controller/LienHe/cLienHe.php");
	$mail = new cPHPMailer();
	$lienhe = new cLienHe();
	if (isset($_SESSION['LoginSuccess']) && $_SESSION['LoginSuccess'] == true) {
		switch ($_SESSION['MaVaiTro']) {
			case '2':
				include_once("Controller/NhanVienPhanPhoi/cNhanVienPhanPhoi.php");
				$nv = new cNhanVienPhanPhoi();
				$tt_nvpp = $nv -> get_nvpp_by_id($_SESSION['MaNVPP']);
				while ($row = mysqli_fetch_array($tt_nvpp)) {
					$hoten = $row['TenNVPP'];
					$sodienthoai = $row['SDT'];
					$email = $row['Email'];
					$tendn = $row['MaTrungTamPP'];

				}
				break;
			case '3':
				include_once("Controller/NhaCungCapNongSan/cNhaCungCapNongSan.php");
				$ncc = new cNhaCungCapNongSan();
				$tt_ncc = $ncc -> get_ncc_by_id($_SESSION['MaNCC']);
				while ($row = mysqli_fetch_array($tt_ncc)) {
					$hoten = $row['TenNguoiDaiDien'];
					$sodienthoai = $row['SDT_NCC'];
					$email = $row['EmailNCC'];
					$tendn = $row['TenNhaCungCap'];

				}
				break;
			case '4':
				include_once("Controller/KhachHangDoanhNghiep/cKhachHangDoanhNghiep.php");
				$dn = new cKhachHangDoanhNghiep();
				$tt_dn = $dn -> get_khdn_by_id($_SESSION['MaDN']);
				while ($row = mysqli_fetch_array($tt_dn)) {
					$hoten = $row['TenNguoiDaiDien'];
					$sodienthoai = $row['SDT'];
					$email = $row['Email'];
					$tendn = $row['TenDoanhNghiep'];

				}
				break;
			case '5':
				include_once("Controller/KhachHangThanhVien/cKhachHangThanhVien.php");
				$kh = new cKhachHangThanhVien();
				$tt_kh = $kh -> get_khtv_by_id($_SESSION['MaKHTV']);
				while ($row = mysqli_fetch_array($tt_kh)) {
					$hoten = $row['Ten_KHTV'];
					$sodienthoai = $row['SDT'];
					$email = $row['Email'];
					$tendn = "";

				}
				break;
			default:
				break;
		}
	} else{
		$hoten = "";
		$sodienthoai = "";
		$email = "";
		$tendn = "";
	}



 ?>
<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-10">
		<section class="s_title parallax s_parallax_is_fixed bg-black-50 pt24 pb24 o_colored_level" data-vcss="001" data-snippet="s_title" data-scroll-background-ratio="1" data-name="Title" style="background-image: none;">
        <span class="s_parallax_bg oe_img_bg" style="background-image: url('/web/image/website.s_banner_default_image'); background-position: 50% 0;"></span>
        <div class="o_we_bg_filter bg-black-50"></div>
        <div class="container">
          <h1>Liên hệ chúng tôi</h1>
        </div>
      	</section>
		<div class="container">
                  <form id="contactus_form" action="" method="post" enctype="multipart/form-data">
                    <div class="s_website_form_rows row s_col_no_bgcolor">
                      <div data-visibility-condition="" data-visibility-between="" class="form-group s_website_form_field col-12 s_website_form_custom s_website_form_required" data-type="char" data-name="Field">
                        <div class="row s_col_no_resize s_col_no_bgcolor">
                          <label class="col-form-label col-sm-auto s_website_form_label" style="width: 200px" for="ouhzads0syv">
                            <span class="s_website_form_label_content">Họ và tên</span>
                            <span class="s_website_form_mark">     *</span>
                          </label>
                          <div class="col-sm">
                            <input type="text" class="form-control s_website_form_input" name="name" required="1" value="<?php echo $hoten; ?>" placeholder="" id="ouhzads0syv" data-fill-with="name">
                          </div>
                        </div>
                      </div>
                      <div class="form-group col-12 s_website_form_field s_website_form_custom" data-type="char" data-name="Field" data-visibility-condition="" data-visibility-between="">
                        <div class="row s_col_no_resize s_col_no_bgcolor">
                          <label class="col-form-label col-sm-auto s_website_form_label" style="width: 200px" for="contact2">
                            <span class="s_website_form_label_content">Số điện thoại</span>
                          </label>
                          <div class="col-sm">
                            <input id="contact2" type="tel" class="form-control s_website_form_input" name="sodienthoai" value="<?php echo $sodienthoai; ?>" data-fill-with="phone">
                          </div>
                        </div>
                      </div>
                      <div class="form-group col-12 s_website_form_field s_website_form_required" data-type="email" data-name="Field" data-visibility-condition="" data-visibility-between="">
                        <div class="row s_col_no_resize s_col_no_bgcolor">
                          <label class="col-form-label col-sm-auto s_website_form_label" style="width: 200px" for="contact3">
                            <span class="s_website_form_label_content">Địa chỉ Email</span>
                            <span class="s_website_form_mark"> *</span>
                          </label>
                          <div class="col-sm">
                            <input id="contact3" type="email" class="form-control s_website_form_input" name="email" value="<?php echo $email; ?>" required="" data-fill-with="email">
                          </div>
                        </div>
                      </div>
                      <div class="form-group col-12 s_website_form_field s_website_form_custom" data-type="char" data-name="Field" data-visibility-condition="" data-visibility-between="">
                        <div class="row s_col_no_resize s_col_no_bgcolor">
                          <label class="col-form-label col-sm-auto s_website_form_label" style="width: 200px" for="contact4">
                            <span class="s_website_form_label_content">Tên doanh nghiệp (nếu có)</span>
                          </label>
                          <div class="col-sm">
                            <input id="contact4" type="text" class="form-control s_website_form_input" name="tendn" value="<?php echo $tendn; ?>" data-fill-with="commercial_company_name">
                          </div>
                        </div>
                      </div>
                      <div data-visibility-condition="" data-visibility-between="" class="form-group s_website_form_field col-12 s_website_form_required" data-type="char" data-name="Field">
                        <div class="row s_col_no_resize s_col_no_bgcolor">
                          <label class="col-form-label col-sm-auto s_website_form_label " style="width: 200px" for="ouiounx8prg7">
                            <span class="s_website_form_label_content">Tiêu đề</span>
                            <span class="s_website_form_mark">   *</span>
                          </label>
                          <div class="col-sm">
                            <input type="text" class="form-control s_website_form_input" name="tieude" required="1" value="" placeholder="" id="ouiounx8prg7" data-fill-with="undefined">
                          </div>
                        </div>
                      </div>
                      <div class="form-group col-12 s_website_form_field s_website_form_custom s_website_form_required" data-type="text" data-name="Field" data-visibility-condition="" data-visibility-between="">
                        <div class="row s_col_no_resize s_col_no_bgcolor">
                          <label class="col-form-label col-sm-auto s_website_form_label" style="width: 200px" for="contact6">
                            <span class="s_website_form_label_content">Nội dung</span>
                          </label>
                          <div class="col-sm">
                            <textarea id="contact6" class="form-control s_website_form_input" name="noidung" required=""></textarea>
                          </div>
                        </div>
                      </div>
                      <input type="submit" name="send" value="Gửi">
                    </div>
                  </form>
                </div>
	</div>
	<div class="col-md-2"></div>
</div>
<?php 

	if (isset($_REQUEST['send'])) {
		$hoten =  $_REQUEST['name'];
		$sodienthoai = $_REQUEST['sodienthoai'];
		$email = $_REQUEST['email'];
		$tendn = $_REQUEST['tendn'];
		$tieude = $_REQUEST['tieude'];
		$noidung = $_REQUEST['noidung'];

		$add = $lienhe -> add_lienhe($tieude,$noidung,$hoten,$tendn,$sodienthoai,$email);
		if($add == 1){
			$send = $mail -> send_mail_lienhe($email,$sodienthoai,$hoten,$tendn,$tieude,$noidung);
			//echo "<script>alert('Xin cảm ơn! Chúng tôi sẽ phản hồi cho bạn sớm nhất có thể')</script>";
		}else{
			echo "<script>alert('Xin lỗi! Yêu cầu của bạn hiện không thể ghi nhận')</script>";
		}
	}

 ?>