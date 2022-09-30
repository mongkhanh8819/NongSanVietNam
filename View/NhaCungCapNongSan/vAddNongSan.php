 <!-- Content Wrapper. Contains page content -->
 <div class="col-md-9" >
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Thêm nông sản mới</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
              <li class="breadcrumb-item active">Quản lý nông sản</li>
              <li class="breadcrumb-item active">Thêm nông sản mới</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
            
              <!-- /.card-header -->
              <!-- <h3 style="text-align:center">Thêm Nông Sản</h3> -->
              <form action="#" method="post" enctype="multipart/form-data">
                <div class="row">
                  <div class="col">
                    <td>Chọn loại nông sản</td><br>
                    <select name="nhomns" id="nhomns">
                      <option value="">Chọn loại nông sản</option>
                      <?php include_once("View/process_ajax/nhomnongsan.php"); ?> 
                    </select></br>
                    <td>Chọn loại nông sản</td><br>
                    <select name="loains" id="loains">
                      
                    </select></br>
                    <td>Tên nông sản</td>
                    <input type="text" class="form-control" id="tenns" placeholder="Enter tên nông sản" name="tenns"></br>
                    <td>Số lượng</td>
                    <input type="text" class="form-control" id="sl" placeholder="Enter số lượng" name="sl"></br>
                    <td>Đơn vị tính</td>
                    <input type="text" class="form-control" id="donvitinh" placeholder="Enter đơn vị tính" name="dvt"></br>
                    <td>Tổng giá trị lô nông sản (VNĐ)</td>
                    <input type="text" class="form-control" id="price" placeholder="Enter tổng giá trị" name="price"></br>
                    <td>Giới thiệu</td><br>
                    <textarea name="mota" id="mota" cols="80" rows="4" placeholder="Enter giới thiệu sơ lược nông sản" style="border-radius:10px"></textarea></br></br>
                    <td>Hình ảnh</td>
                    <input type="file" class="form-control" id="hinhanh" name="ffile"></br>
                  </div>
                </div>
                <button type="submit" name="submit" class="btn btn-primary" style="margin-left:45%">Submit</button>
                <button type="reset" class="btn btn-primary" >Reset</button>
                <!-- <input type="submit" value="Thêm Doanh Nghiệp" style="text-align:center"> -->
              </form>
              <!-- /.card-body -->
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
    // include("Controller/cSanpham.php");
    if(isset($_REQUEST['submit'])){
      $tenns = $_REQUEST['tenns'];
      $sl = $_REQUEST['sl'];
      $dvt = $_REQUEST['dvt'];
      $gia = $_REQUEST['price'];
      $mota = $_REQUEST['mota'];
      $loainongsan = $_REQUEST['loains'];
      $file = $_FILES['ffile']['tmp_name'];
      $type = $_FILES['ffile']['type'];
      $name = $_FILES['ffile']['name'];
      $size = $_FILES['ffile']['size'];
        
      $ns = new cNongSan();
      $kq = $ns ->  add_nongsan($tenns,$sl,$gia,$dvt,$mota,$name,$loainongsan,$file,$type,$size);
      //hiện thông báo
      if($kq == 1){
        echo "<script>alert('Thêm nông sản thành công')</script>";
        echo "<script>window.location.href = 'index.php?qlns';</script>";
      }elseif($kq == 0){
        echo "<script>alert('Không thể insert')</script>";
      }elseif($kq == -1){
        echo "<script>alert('Không thể upload')</script>";
      }elseif($kq == -2){
        echo "<script>alert('Size > 2MB')</script>";
      }elseif($kq == -3){
        echo "<script>alert('Không đúng định dạng file')</script>";
      }else{
        echo "<script>alert('Thêm nông sản thất bại')</script>";
      }
     }
  
  
  ?>