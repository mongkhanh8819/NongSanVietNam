 <?php
// include("../config/connect.php");
// session_start();
// if(isset($_SESSION['admin'])){

  ?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Quản trị hệ thống</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="assets/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="assets/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <!-- scripts -->
  <!-- jQuery 3 -->
  <script src="bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- FastClick -->
  <script src="bower_components/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- Sparkline -->
  <script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
  <!-- jvectormap  -->
  <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <!-- SlimScroll -->
  <script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- ChartJS -->
  <script src="bower_components/chart.js/Chart.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="dist/js/pages/dashboard2.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="">

  <header class="main-header">

    <!-- Logo -->
    <a href="index1.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>HG</span>
      <!-- logo for regular state and mobile devices -->
     <span class="logo-lg" id="index"> Quản trị hệ thống</span>
    </a>  
    <br />
                <div class="pull-right" style="padding-right: 2%;">
                  <a href="xuly/dangxuat.php" class="btn btn-danger btn-3d">Đăng xuất</a>
                  <a href="trang/database-backup.php" class="btn btn-success btn-3d">Sao lưu DB</a>
                </div>
                <br />
          
          <!-- Control Sidebar Toggle Button -->
         
        

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <div class="main-sidebar" style="height: 185%;">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Main Menu </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Quản lý người dùng</span>
            <!-- <?php
              $nd = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM USER"));
            ?> -->
            <span class="pull-right-container">
              <span class="label label-primary pull-right"><?php echo $nd; ?></span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li style="cursor: pointer;" id="dsnd"><a><i class="fa fa-circle-o"></i> Danh sách người dùng</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Quản lý nhóm sản phẩm</span>
            <!-- <?php
              $nsp = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM NHOMSANPHAM"));
            ?> -->
            <span class="pull-right-container">
              <i class="label label-primary pull-right"><?php echo $nsp; ?></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a style="cursor: pointer;" id="dsnsp"><i class="fa fa-circle-o"></i> Danh sách nhóm sản phẩm</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
             <!-- <?php
              $lsp = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM LOAISANPHAM"));
            ?> -->
            <span>Quản lý loại sản phẩm</span>
            <span class="pull-right-container">
             <i class="label label-primary pull-right"><?php echo $lsp; ?></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li style="cursor: pointer;"><a id="dslsp"><i class="fa fa-circle-o"></i> Danh sách loại sản phẩm</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Quản lý sản phẩm</span>
             <!-- <?php
              $sp = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM SANPHAM"));
            ?> -->
            <span class="pull-right-container">
               <i class="label label-primary pull-right"><?php echo $sp; ?></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li style="cursor: pointer;"><a id="dssp"><i class="fa fa-circle-o"></i> Danh sách sản phẩm</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
             <!-- <?php
              $htx = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM HOPTACXA"));
            ?> -->
            <span>Quản lý hợp tác xã</span>
            <span class="pull-right-container">
               <i class="label label-primary pull-right"><?php echo $htx; ?></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li style="cursor: pointer;"><a id="dshtx"><i class="fa fa-circle-o"></i> Danh sách hợp tác xã</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Quản lý DVVC</span>
            <!-- <?php
              $dvvc = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM DONVIVANCHUYEN"));
            ?> -->
            <span class="pull-right-container">
              <i class="label label-primary pull-right"><?php echo $dvvc; ?></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li style="cursor: pointer;"><a id="dsdvvc"><i class="fa fa-circle-o"></i> Danh sách đơn vị vận chuyển</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Quản lý cơ sở dữ liệu</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li style="cursor: pointer;"><a id="dsbkdb"><i class="fa fa-circle-o"></i> Danh sách Backup Database</a></li>
          </ul>
        </li>
       </ul>
    </section>
    <!-- /.sidebar -->
  </div>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-color:white;">
    <!-- Content Header (Page header) -->
    <div id="show" >
 <!-- <?php 
  include('trang/content.php');
 ?> -->
</div>
</div>
<!-- ./wrapper -->

</body>
</html>
<script type="text/javascript">
  $(document).ready(function(){
      $("#dsnd").click(function(){
          $("#show").load('trang/danhsach_nguoidung.php');
      });
      $("#dsnsp").click(function(){
          $("#show").load('trang/danhsach_nhomsanpham.php');
      });
      $("#dslsp").click(function(){
          $("#show").load('trang/danhsach_loaisanpham.php');
      });
       $("#dssp").click(function(){
          $("#show").load('trang/danhsach_sanpham.php');
      });
        $("#dshtx").click(function(){
          $("#show").load('trang/danhsach_hoptacxa.php');
      });
         $("#dsdvvc").click(function(){
          $("#show").load('trang/danhsach_donvivanchuyen.php');
      });
          $("#dsbkdb").click(function(){
          $("#show").load('trang/danhsach_db_backup.php');
      });
  });
</script>
<?php
//}
?>
<style type="text/css">
  .d2b-legend{
    display: none;
  }
</style>