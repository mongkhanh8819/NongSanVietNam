<?php 
	include_once("Controller/QRCODE/cQrcode.php");
  	$qr = new cQrcode();
  	$list_ns = $qr -> view_qrcode_by_mancc($_SESSION['MaNCC']);
 ?>
<div class="col-md-10">
	<div class="row">
		<!-- row -->
                <div class="col-md-12">
                    <div class="card-body table-responsive p-0">
                      <table class="table table-hover text-nowrap">
                        <thead>
                        <tr><th><h4>Danh sách QR Code</h4></th></tr>
                        <tr>
                          <th>Mã nông sản</th>
                          <th>Tên nông sản</th>
                          <th>QR Code</th>
                          <!-- <th>Mô tả nông sản</th> -->
                          <th>Nội dung</th>
                          <th>Download</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php 

                            if($list_ns){
                              while ($rowkd = mysqli_fetch_array($list_ns)) {
                              
                         ?>
                         <tr>
                           <td><?php echo $rowkd['MaNongSan']?></td>
                           <td><?php echo $rowkd['TenNongSan']?></td>
                           <td><img src="assets/public/qr_images/<?php echo $rowkd['QR_Image'] ?>" alt="" width="150px" height="150px"></td>
                           <!-- <td><?php //echo $rowkd['MoTaNS']?></td> -->
                           <td><textarea cols="30" rows="10"><?php echo $rowkd['noidung']?></textarea></td>
                           <td><a class="fa fa-download" href="modules/download.php?file=<?php echo urlencode($rowkd['QR_Image']); ?>"></a></td>
                           
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

<!--  -->
</div>