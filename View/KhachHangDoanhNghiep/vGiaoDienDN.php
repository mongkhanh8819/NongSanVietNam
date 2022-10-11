<!-- Main Sidebar Container -->
  <!-- <aside class="main-sidebar"> -->
<div class="row">
    <!-- Sidebar -->
    <div class="col-md-2"></div>
    <!-- /.sidebar -->
  <!-- </aside> -->

  <!-- Content Wrapper. Contains page content -->
  	<div class="col-md-8">
  		<?php 

  			if (isset($_REQUEST['qlns'])) {
		      include("vQuanLyNongSan.php");
		    }
		    elseif(isset($_REQUEST['updatett'])){
		      include("vUpdateTTkhdn.php");
		    }
		    else{
		      echo "<div class='col-md-9'><h1>NHÀ CUNG CẤP NÔNG SẢN</h1></div>";
		    }

  		 ?>
  	</div>
  	<div class="col-md-2"></div>
  <!-- /.container-fluid -->
 </div>
<!-- /.content -->
