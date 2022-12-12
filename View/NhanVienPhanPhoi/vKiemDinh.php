<?php 

	include_once("Controller/PhieuKiemDinhNongSan/cPhieuKiemDinhNongSan.php");
  include_once("Controller/QRCODE/cQrcode.php");
  include('assets/vendor/phpqrcode/qrlib.php');
  //include('assets/vendor/phpqrcode/qrconfig.php'); // Include a library for PHP QR code
	$p = new cPhieuKiemDinhNongSan();
  $qr = new cQrcode();
	$list_kd = $p -> get_phieukiemdinh_by_nvpp($_SESSION['MaNVPP']);

 ?>
<div class="col-md-10">
	<div class="row">
		<!-- row -->
                <div class="col-md-12">
                    <div class="card-body table-responsive p-0">
                      <table class="table table-hover text-nowrap">
                        <thead>
                        <tr><th><h4>Phiếu kiểm định nông sản</h4></th></tr>
                        <tr>
                          <th>Mã phiếu kiểm định</th>
                          <th>Thời gian lập</th>
                          <th>Trạng thái</th>
                          <th>Tên nông sản</th>
                          <th>Tên nhà cung cấp</th>
                          <th>Tên nhân viên kiểm định</th>
                          <th style="display: none;">Địa chỉ</th>
                          <th style="display: none;">Số điện thoại</th>
                          <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php 

                            //$list_phieukd = $kd -> get_phieukiemdinh($_SESSION['MaNCC']);
                            // echo "<pre>";
                            // var_dump(mysqli_fetch_array($list_phieukd));
                            // echo "</pre>";
                            if($list_kd){
                              while ($rowkd = mysqli_fetch_array($list_kd)) {
                              
                         ?>
                         <tr>
                           <td><?php echo $rowkd['MaPhieuKiemDinh']?></td>
                           <td><?php echo $rowkd['ThoiGianLap']?></td>
                           <td><?php 
                           if ($rowkd['TrangThaiKiemDinh'] == 3) {
                             echo "Chờ kiểm định";
                           } elseif ($rowkd['TrangThaiKiemDinh'] == 0) {
                             echo "Đạt chuẩn";
                           } elseif ($rowkd['TrangThaiKiemDinh'] == 1){
                             echo "Không đạt chuẩn";
                           }
                           
                           ?></td>
                           <td><?php echo $rowkd['TenNongSan']?></td>
                           <td><?php echo $rowkd['TenNhaCungCap']?></td>
                           <td><?php echo $rowkd['TenNVPP']?></td>
                           <td style="display:none"><?php echo $rowkd['DiaChi'] ?></td>
                           <td style="display:none"><?php echo $rowkd['DanhGiaTuNCC'] ?></td>
                           <td style="display:none"><?php echo $rowkd['MaNongSan'] ?></td>
                           <td style="display: none;"><?php echo $rowkd['SDT_NCC'] ?></td>
                           <?php if($rowkd['TrangThaiKiemDinh'] == 0){
                            ?>
                            <td>
                            <button class="btn btn-primary editbtn" disabled>Đã duyệt</button>
                            <?php  
                           }else{ ?>
                           <td>
                            <button class="btn btn-primary editbtn">Duyệt</button>
                          
                          <?php } ?>
                          <!-- <a class="fa fa-trash" href="index.php"></a></td> -->
                          <button type="button" class="btn btn-danger deletebtn"> Xóa </button>
                         </tr>
                         <?php }
                            } ?>
                        
                        </tbody>
                      </table>
                    </div>
              <!-- /.card-body -->
                <!-- /.card -->
                </div>
              <!-- /.col -->
              </div>
              <!-- /.row -->
</div>
			<!-- Modal UPDATE PHIẾU KIỂM ĐỊNH NÔNG SẢN -->
                       <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel"><b>Chi tiết phiếu kiểm định</b></h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <div id="xemchitiet">
                                
                              </div>
                      
                              <form action="" method="post" enctype="multipart/form-data">
                                <div class="form-row">
                    
                                  <div class="form-group col-md-6">
                                    <label for="maphieu">Mã phiếu kiểm định</label>
                                    <input type="text" class="form-control" name="maphieu" id="maphieu"  value="" readonly>
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label for="thoigian">Thời gian lập phiếu</label>
                                    <input type="text" class="form-control" id="thoigian" name="thoigian" disabled value="" readonly>
                                  </div>
                                  <div class="form-group col-md-5">
                                    <label for="tennongsan">Tên nông sản</label>
                                    <input type="text" class="form-control" id="tennongsan" name="tennongsan" value="" readonly>
                                  </div>
                                  <div style="display:none">
                                    <input type="text" class="form-control" id="manongsan" name="manongsan" value="">
                                  </div>
                                  <div class="form-group col-md-5">
                                    <label for="nhacungcap">Nhà cung cấp</label>
                                    <input type="text" class="form-control" id="nhacungcap" name="nhacungcap" value="" readonly>
                                  </div>
                                  <!-- <div class="form-group col-md-4">
                                    <label for="trangthai">Trạng thái kiểm định</label>
                                    <input type="text" class="form-control" id="trangthai" name="trangthai" value="" readonly>
                                  </div> -->
                                  
                                </div>
                                <div class="form-group">
                                  <label for="diachi">Địa chỉ</label>
                                  <input type="text" class="form-control" id="diachi" name="diachi" value="" readonly >
                                </div>
                                <div class="form-group">
                                  <label for="diachi">Số điện thoại</label>
                                  <input type="text" class="form-control" id="sdt" name="sdt" value="" readonly >
                                </div>
                                <div class="form-group">
                                  <label for="danhgiancc">Đánh giá từ nhà cung cấp</label>
                                  <input type="text" class="form-control" id="danhgiancc" name="danhgiancc" value="" readonly>
                                </div>
                                <!-- THÔNG SỐ KIỂM ĐỊNH -->
                                <div class="form-group">
                                  <label for="thongso">Vệ sinh ATTP (môi trường đất, quy trình sản xuất, trồng trọt,...)</label>
                                  <textarea class="form-control" name="vesinh" id="thongso" cols="30" rows="10" required></textarea>
                                </div>
                                <div class="form-group">
                                  <label for="nguongoc">Nguồn gốc (Nơi sản xuất, kho hàng,...)</label>
                                  <textarea class="form-control" name="nguongoc" id="nguongoc" cols="30" rows="10" required></textarea>
                                </div>
                                <div class="form-group">
                                  <label for="hanghoa">Chất lượng hàng hóa (Bao gói, khả năng vận chuyển)</label>
                                  <textarea class="form-control" name="hanghoa" id="hanghoa" cols="30" rows="10" required></textarea>
                                </div>
                                <div class="form-group">
                                  <label for="baoquan">Chất lượng bảo quản (Kỹ thuật áp dụng, tình trạng vỏ, độ cứng, hạn sử dụng,...)</label>
                                  <textarea class="form-control" name="baoquan" id="baoquan" cols="30" rows="10" required></textarea>
                                </div>
                                <!-- ----------- -->
                                <!-- ----------- -->
                                <div class="form-group">
                                  <label for="danhgianvpp">Đánh giá từ nhân viên phân phối</label>
                                  <textarea class="form-control" name="danhgianvpp" id="danhgianvpp" cols="30" rows="10" required></textarea>
                                </div>
                                <div class="form-group"> 
                                  <label for="choose">Kết luận</label>
                                  Đạt chuẩn
                                  <input type="radio" name="ketluan" id="choose" value="0" required>
                                  Không đạt chuẩn
                                  <input type="radio" name="ketluan" id="choose" value="1" required>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" name="reset" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  <button type="submit" name="update" class="btn btn-primary">Cập nhật</button>
                                  <!-- <input type="submit" name="update"> -->
                                </div>
                              </form>
                            </div>
                            
                          </div>
                        </div>
                      </div>

      <!-- Modal -->
      <?php 

        if(isset($_REQUEST['update'])){
            $manongsan = $_REQUEST['manongsan'];
            $tennongsan = $_REQUEST['tennongsan'];
            $nhacungcap = $_REQUEST['nhacungcap'];
            $diachi = $_REQUEST['diachi'];
            $sdt = $_REQUEST['sdt'];
            $makiemdinh = $_REQUEST['maphieu'];
            $danhgianvpp = $_REQUEST['danhgianvpp'];
            $vesinh = $_REQUEST['vesinh'];
            $nguongoc = $_REQUEST['nguongoc'];
            $hanghoa = $_REQUEST['hanghoa'];
            $baoquan = $_REQUEST['baoquan'];
            $ketluan = $_REQUEST['ketluan'];
            $thongso = "Vệ sinh ANTP: ".$vesinh." - Nguồn gốc: ".$nguongoc." - Chất lượng hàng hóa: ".$hanghoa." - Chất lượng bảo quản: ".$baoquan;
                      
            if($ketluan == 0){
              $duyet = $p -> edit_phieukiemdinh($makiemdinh, $thongso, $danhgianvpp, $ketluan, $manongsan);
              //thông báo
              if ($duyet == 1) {
                  //its a location where generated QR code can be stored.
                  $qr_code_file_path = dirname(__FILE__).DIRECTORY_SEPARATOR.'..\..\assets\public\qr_images'.DIRECTORY_SEPARATOR;
                  //echo $qr_code_file_path;
                  $set_qr_code_path = 'assets/public/qr_images/';
                  
                  //Set a file name of each generated QR code
                  $filename = $qr_code_file_path.$manongsan."_".time().'.png';
                  //$file = 
                  /* All the user generated data must be sanitize before the processing */
                  $errorCorrectionLevel = "Q";
                 //$codeContents = rand(1000000, 9999999);
                  $matrixPointSize = "4";
                  //NỘI DUNG
                  $frm_link = $tennongsan." / ".$nhacungcap." / ".$diachi." / ".$sdt." / ".$thongso." http://khanhis.online/index.php?mans=".$manongsan;
                  
                  // After getting all the data, now pass all the value to generate QR code.
                  //QRcode::png($frm_link, $pngAbsoluteFilePath); 
                  QRcode::png($frm_link, $filename, $errorCorrectionLevel, $matrixPointSize, 3);
                  // 
                  //INSERT BẢNG QRCODE LƯU THÔNG TIN KIỂM ĐỊNH
                  $insert_qr = $qr -> create_qrcode($frm_link,basename($filename),$manongsan);
                  // 
                echo "<script>alert('Kiểm định thành công!')</script>";
                echo "<script>window.location.href = 'index.php?kiemdinh';</script>";
              } elseif ($duyet == 0) {
                echo "<script>alert('Cập nhật thất bại!')</script>";
              }
              
            }elseif ($ketluan == 1) {
              $duyet = $p -> edit_phieukiemdinh($makiemdinh, $thongso, $danhgianvpp, $ketluan, $manongsan);
              //thông báo
              if ($duyet == 1) {
                echo "<script>alert('Cập nhật thành công!')</script>";
                echo "<script>window.location.href = 'index.php?kiemdinh';</script>";
              } elseif ($duyet == 0) {
                echo "<script>alert('Cập nhật thất bại!')</script>";
              }
            }
                        
        }

      ?>
<!--  -->
</div>
<script>
        $(document).ready(function () {

            $('.editbtn').on('click', function () {

                $('#editmodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#maphieu').val(data[0]);
                $('#thoigian').val(data[1]);
                $('#trangthai').val(data[2]);
                $('#tennongsan').val(data[3]);
                $('#nhacungcap').val(data[4]);
                $('#tennv').val(data[5]);
                $('#diachi').val(data[6]);
                $('#danhgiancc').val(data[7]);
                $('#manongsan').val(data[8]);
                $('#sdt').val(data[9]);

                //document.write($('#hinh').val(data[9]));
                //var id = $('#hinhanh').val(data[8]);
                //$.post("", {hinhanh: id}, function(data){
                  //$("#xemchitiet").html(data);
                    //alert("dd");
                //})
            });
        });
    </script>