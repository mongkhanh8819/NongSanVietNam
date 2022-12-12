<style>
      .lii{float:left; margin: 3px; list-style: none}
      .a{padding: 5px;}
      .sp{display:inline-block; padding: 0px 3px; background: blue; color:white }
      /*.lii, .a, .sp{
        position: relative;
        left: 320px;
      }*/
</style>



<!-- <div class="row"> -->
    
    <?php 

        // include("controller/CLASS/clsMailer.php");
        // $p = new cPHPMailer();
        // $to = "mongkhanh8819@gmail.com";
        // $name = "Khánh";
        // $subject = "Chào bạn";
        // $body = "Chào cc";
        // if (isset($_GET['send'])) {
        //     $test = $p -> send_mail($to,$name,$subject,$body);
        // } else {
        //     echo "<a href='?send'>Send Mail</a>";
        // }
        
        //$test = $p -> send_mail($to,$name,$subject,$body);

     ?>
     <!-- <a href="?send">Send Mail</a> -->

<!-- </div> -->
<div class="row">
    <div class="col-md-1"></div>  
    <div class="container container-introduce" col-md-10><br>
    <div class="row">
      <div class="col">
        <div class="controduce">
          <img class="img-controduce" src="https://growmax.weba.vn/shop/images/growmax/hinhanh/hen-suyen-an-trai-cay-2.png" alt="" width="410px">
        </div>
      </div>
      <div class="col">
        <div class="controduce__text">
          <h1 class="controduce-text-heading">SƠ LƯỢC</h1>
          <div class="controduce__content">
           <h3 class="content-text"> <p>HỆ THỐNG PHÂN PHỐI NÔNG SẢN SẠCH</p></h3>
           <p>
            Trang giới thiệu giúp khách hàng hiểu rõ hơn về cửa hàng của bạn. Hãy cung cấp thông tin cụ thể về việc kinh doanh, về cửa hàng, thông tin liên hệ. 
            Điều này sẽ giúp khách hàng cảm thấy tin tưởng khi mua hàng trên website của bạn.
           </p>
           <p>
            Một vài gợi ý cho nội dung trang Giới thiệu:
           </p>
           <div>
            <ul>
              <li>Bạn là ai</li>
              <li>Giá trị kinh doanh của bạn là gì</li>
              <li>Địa chỉ cửa hàng</li>
              <li>Bạn đã kinh doanh trong ngành hàng này bao lâu rồi</li>
              <li>Bạn đã kinh doanh trong ngành hàng này bao lâu rồi</li>
              <li>Đội ngũ của bạn gồm những ai</li>
              <li><span>Thông tin liên hệ</span></li>
              <li>Liên kết đến các trang mạng xã hội (Twitter, Facebook)</li>
            
            </ul>
            <p>Bạn có thể chỉnh sửa hoặc xoá bài viết này tại <strong>đây</strong> hoặc thêm những bài viết mới trong phần quản lý <strong>Trang nội dung</strong></p>
           </div>
          </div>
        </div>
      </div>
    </div>
  

    </div>
    <div class="col-md-1"></div>    
  </div>



  <div class="row list-item">
      <div class="col-md-1"></div>
      <div class="row col-md-10 list-image__item" >
        <br>
        <img class="list-image" src="assets/public/images/gioithieu.jpg" alt="" width="421px">
        <img class="list-image" src="assets/public/images/canhdepvn.jpg" alt="" width="421x">
        <img class="list-image" src="assets/public/images/canh-dong.jpg" alt="" width="421px">
        <!-- <img class="list-image" src="assets/public/images/gioithieu.jpg" alt="" width="421px">
        <img class="list-image" src="assets/public/images/gioithieu.jpg" alt="" width="421px">
        <img class="list-image" src="assets/public/images/gioithieu.jpg" alt="" width="421px"> -->
      </div>
      <div class="col-md-1"></div>
  </div>





<div class="row list-item">
<div class ="col-md-1"></div>
<div id="content" class="col-md-10">
            <h2>BÀI ĐĂNG NÔNG SẢN</h2>
            <div id="list">
                <!-- <table cellspacing="0" cellpadding="5"> --> 
                  <!-- <tr> -->
                    <div class="row">
                    <?php 
                    foreach ($member as $item){ ?>

                            <!-- <td style="text-align:center;"> --><div class="col" style="text-align:center">
                                 <div class="card posts">
                               <?php echo "<img src='assets/uploads/images/".$item['HinhAnh']."' width='410x' height='300px'><br>"; ?>
                               <h4><?php echo $item['TenNongSan'] ?></h4>  
                            
                                <div class="card-body">
                                    <h5 class="card-title heading-post"><?php echo $item['SoLuong']." ".$item['DVT']." / ".number_format($item['Gia'], 0, ',', '.')." VNĐ / ".$item['TenNhaCungCap']  ?></h5>
                                    <p class="card-text">
                                        <a href="index.php?mans=<?php echo $item['MaNongSan'] ?>">Xem chi tiết</a>
                                    </p>

                                </div>
                                <a href="index.php?donhang&&manongsan=<?php echo $item['MaNongSan'] ?>"><button type="button" class="btn-next-checkout">Đặt mua nông sản</button></a><br>
                              </div>
                            <!-- </td> --></div>
                    <!-- </tr> -->

                        <!-- </div> -->

                    <?php }
                     ?>
                  <!-- </tr> -->
                    </div>
                <!-- </table> -->
            </div>
            <div id="paging" class="">
                <?php echo $paging->html(); ?>
            </div>
        </div>
        <div class = "col-md-1"></div>
</div>
         <script language="javascript">
             $('#content').on('click','#paging a', function ()
             {
                  
                 var url = $(this).attr('href');
                   //alert(url);
                  // alert(result.hasOwnProperty('member'));
                 $.ajax({
                   //alert(result.hasOwnProperty('member'));
                  //alert("dcmm");
                     url : url,
                     type : 'get',
                     dataType : 'json',
                     success:function(result)
                     {
                        // var khanh = 1;
                        // alert(khanh);
                        // //alert(dataType);
                         //  kiểm tra kết quả đúng định dạng không

                         if (result.hasOwnProperty('member') && result.hasOwnProperty('paging'))
                         {
                            //alert("dcmm");
                            //var html;
                             // var html = '<table cellspacing="0" cellpadding="5">';
                             // lặp qua danh sách thành viên và tạo html
                             var html = '<div class="row">';
                             $.each(result['member'], function (key, item){
                                gia = item['Gia'].replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.");

                                //html += '<td style="text-align:center">';
                                html += '<div class="col" style="text-align:center">';
                                html += '<div class="card posts">';
                                html += '<img src="assets/uploads/images/' + item['HinhAnh']+ '" width="410x" height="300px"></img><br><h4>'+item['TenNongSan']+'</h4>';
                                html += '<div class="card-body">';
                                html += '<h5 class="card-title heading-post">';
                                html += item['SoLuong'] + ' ' + item['DVT']+' / '+gia+' VNĐ / ' + item['TenNhaCungCap'];
                                html += '</h5>';
                                html += '<p class="card-text"><a href="index.php?mans='+item['MaNongSan']+'">Xem chi tiết</a></p>';
                                html += '</div>';
                                html += '<a href="index.php?donhang&&manongsan='+ item['MaNongSan']+'"><button type="button" class="btn-next-checkout">Đặt mua nông sản</button></a><br>';
                                html += '</div>';
                                html += '</div>';
                                //html += '</td>';
                             });
                             html += '</div>'; 
                             //html += '</table>';
                               //alert(html);
                             // Thay đổi nội dung danh sách thành viên
                             $('#list').html(html);
                              
                             // Thay đổi nội dung phân trang
                             $('#paging').html(result['paging']);
                               //alert(html);
                             // Thay đổi URL trên website
                             window.history.pushState({path:url},'',url);
                             //alert(html);
                         }
                     }
                 });
                 return false;
             });
         </script>
