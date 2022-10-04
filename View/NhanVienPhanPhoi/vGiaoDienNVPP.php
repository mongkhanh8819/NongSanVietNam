<!-- Main Sidebar Container -->
  <!-- <aside class="main-sidebar"> -->
<div class="row">
    <!-- Sidebar -->
    <div class="col-md-2">

     <!-- Sidebar Menu -->
     <nav class="mt-3">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Thông tin cá nhân   -->
          
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Thông tin cá nhân
              <i class="fas fa-angle-left right"></i>
              <span class="badge badge-info right">2</span>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="./duyetbainongsan.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Cập nhật thông tin cá nhân</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./duyetbainongsan.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Đổi mật khẩu</p>
              </a>
            </li>
          </ul>
        </li>
        <!-- Quản lí  -->

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Thông tin nông sản
              <i class="fas fa-angle-left right"></i>
              <span class="badge badge-info right">3</span>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="index.php?qlns" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Quản lý và kiểm định nông sản</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?qldh" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Quản lý QR Code</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?qldh" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Đề xuất phân phối nông sản</p>
              </a>
            </li>
          </ul>
        </li>


        <!-- Quản lí -->

        <!-- Thống kê / Liên hệ   -->
          
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Thống kê
              <i class="fas fa-angle-left right"></i>
              <span class="badge badge-info right">2</span>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="index.php?dangban" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Thông kê nông sản</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?dangban" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Thống kê nhà cung cấp</p>
              </a>
            </li>
          </ul>
        </li>

        <!-- Duyệt bài đăng -->
        
        <!-- Thống kê - Liên hệ   -->  
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Liên hệ 
              <i class="fas fa-angle-left right"></i>
              <span class="badge badge-info right">2</span>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="./duyetbainongsan.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Liên hệ doanh nghiệp</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./duyetbainongsan.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Liên hệ nhà cung cấp</p>
              </a>
            </li>
          </ul>
        </li>

        <!-- Duyệt bài đăng -->
      </ul>
    </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  <!-- </aside> -->

  <!-- Content Wrapper. Contains page content -->
    <?php if (isset($_REQUEST['qlns'])) {
      include("vQuanLyNongSan.php");
    } elseif (isset($_REQUEST['qldh'])) {
      include("vQuanLyDonHang.php");
    } elseif (isset($_REQUEST['addns'])){
      include("vAddNongSan.php");
    } elseif (isset($_REQUEST['gdkd'])){
      include("vGuiYcKiemDinh.php");
    } elseif (isset($_REQUEST['guiyeucau'])){
      include("vAddPhieukiemdinh.php");
    }elseif (isset($_REQUEST['dangban'])){
      //include("vGuiYcKiemDinh.php");
    } else{
      echo "<div class='col-md-9'><h1>NHÂN VIÊN PHÂN PHỐI</h1></div>";
    }
    ?>
  <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
