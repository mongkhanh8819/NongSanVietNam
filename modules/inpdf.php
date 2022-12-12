<?php
//Require tập tin autoload.php
//require '../assets/vendor/dompdf/vendor/autoload.php';
require '../config/config.php';
require 'dompdf/vendor/autoload.php';
include_once '../Controller/PhieuKiemDinhNongSan/cPhieuKiemDinh.php';
$p = new cPhieuKiemDinhNongSan();
//Khai báo sử dụng thư viện\
if ($_REQUEST['phieukd']) {
  $abc = $_REQUEST['phieukd'];
  $tt = $p -> get_phieukiemdinh_by_maphieu($abc);
  while ($row = mysqli_fetch_array($tt)) {
    $tennongsan = $row['TenNongSan'];
    $mota = $row['MoTaNS'];
    $trangthai = "Đạt chuẩn";
    $tenncc = $row['TenNhaCungCap'];
    $diachi = $row['DiaChi_NCC'];
    $sodienthoai = $row['SDT_NCC'];
    $arr = explode("-", $row['ThongSoKiemDinh']);
    $atpp = $arr[0];
    $nguongoc = $arr[1];
    $hanghoa = $arr[2];
    $baoquan = $arr[3];
    $danhgiancc = $row['DanhGiaTuNCC'];
    $danhgianvpp = $row['DanhGiaTuNVKD']; 
  }
}
else{
  header("Location:../");
}



use Dompdf\Dompdf;
$html = '
<html lang="en">

<head>
    <title>Phiếu kiểm định nông sản</title>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <style>
        .title{
            text-align: center;
            margin-top: 40px;
        }
        .border-top, .border-left, .border-right, .border-bottom{
          font-size: 15px !important;
        }

        .text-align {
          
        }
        .title-top {
          margin-left: 150px;
          position: relative;
          display: block;
        }
        .title-right {
          float: right;
          position: absolute;
          top: 80px;
          right: 500px;
        }
        .date-item {
          margin-left: 800px;
          margin-bottom: 20px;
        }
        .date-item img{
          width: 200px;
          height: 150px;
        }
         .info-detail{
            margin-top: 32px;
        }
        .wrapper-detail{
            display: flex;
            justify-content: flex-start;
            margin-bottom: 16px;
        }
        .info {
            /*margin-left: 14px;*/
        } 
        body{
          font-family: DejaVu Sans, sans-serif;
          /*width: 794px;*/
        }
}
    </style>
</head>

<body class="goto-here">
   <div class="container border-top border-left border-right border-bottom" style="width: 794px;">
    <div class="wrap-info">
      <br>
      <div class="title-top">
        <h4>HỆ THỐNG PHÂN PHỐI NÔNG SẢN SẠCH</h4>
      </div>
      <!-- <div class="title-right">
        <h4>CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM</h4>
        <h5>Độc lập - Tự do - Hạnh phúc</h5>
      </div> -->
        <h2 class="title">PHIẾU XÁC NHẬN CHẤT LƯỢNG NÔNG SẢN</h2>
        <div class="div-df">
            <div class="info-detail">
                <div class="info-1">1. Tên nông sản: '.$tennongsan.'</div>
                <div class="info-2">2. Mô tả nông sản: '.$mota.'</div>
                <div class="info-3">3. Trạng thái kiểm định: '.$trangthai.'</div>
                <div class="info-4">4. Nhà cung cấp: '.$tenncc.'</div>
                <div class="info-5">5. Địa chỉ nhà cung cấp: '.$diachi.'</div>
                <div class="info-6">6. Số điện thoại nhà cung cấp: '.$sodienthoai.'</div>
            </div>  
        </div>
    </div>
    <h1 style="margin-left:100px ;">Thông tin kiểm định</h1>
    <table class="table" style="width: 700px;" border="1">
        <thead>
          <tr>
            <th scope="col">Thứ tự</th>
            <th scope="col">Chỉ tiêu kiểm định</th>
            <th scope="col">Kết quả kiểm định</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Vệ sinh an toàn thực phẩm</td>
            <td>'.$atpp.'</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Nguồn gốc</td>
            <td>'.$nguongoc.'</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Chất lượng hàng hóa</td>
            <td>'.$hanghoa.'</td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>Chất lượng bảo quản</td>
            <td>'.$baoquan.'</td>
          </tr>
          <tr>
            <th>Đánh giá từ nhà cung cấp</th>
            <td colspan="2">'.$danhgiancc.'</td>
          </tr>
          <tr>
            <th>Đánh giá từ nhân viên phân phối</th>
            <td colspan="2">'.$danhgianvpp.'</td>
          </tr>
        </tbody>
      </table>
      <div style="margin-left: 400px;">
        <p>TP.HCM Ngày 20 tháng 10 năm 2022</p>
        <br><br><br><br><br>
        Ngô Duy Lân
      </div>
      
</div>


</body>

</html>';
//echo $html;
require_once dirname(__FILE__) . '/dompdf/autoload.inc.php'; //$rendererLibrary;
//Khởi tạo đối tượng dompdf
$dompdf = new Dompdf();

//Nạp nội dung HTML cần tạo PDF
$dompdf->loadHtml($html, 'UTF-8');

//
//$dompdf->setCharset('utf-8');
//Khai báo khổ giấy và chiều giấy
$dompdf->setPaper('A4');

//Xuất nội dung với định dạng PDF ra trình duyệt
$dompdf->render();

//Hoặc xuất thành tập tin PDF để tải về
$dompdf->stream("phieukiemdinh_ns".$abc.".pdf");