<!-- Main Sidebar Container -->
  <!-- <aside class="main-sidebar"> -->
<br>
<br>
<div class="row">
    <!-- Sidebar -->
    <div class="col-md-1"></div>
    <!-- /.sidebar -->
  <!-- </aside> -->

  <!-- Content Wrapper. Contains page content -->
  	<div class="col-md-10">
  		<?php 

  			if (isset($_REQUEST['qlns'])) {
		      include("vQuanLyNongSan.php");
		    }
		    elseif(isset($_REQUEST['updatett'])){
		      include("vUpdateTTkhdn.php");
		    }
		    else{
		      echo "<div class='col-md-9'><h1>DOANH NGHIỆP</h1></div>";
		    }

  		 ?>
  	</div>
  	<div class="col-md-1"></div>
  <!-- /.container-fluid -->
 </div>
<!-- /.content -->
