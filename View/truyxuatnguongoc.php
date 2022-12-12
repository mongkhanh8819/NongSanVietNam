<?php 
	include_once("Controller/NongSan/cNongSan.php");
	$p = new cNongSan();
 ?>
<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-10">
		<div><h4>TRUY XUẤT NGUỒN GỐC NÔNG SẢN</h4></div>
		<?php 

		$count = $p -> count_nongsan();
		$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : 1;
		$limit = 3;
		$total_page = $p -> get_total_page($count,$limit);
		if ($page > $total_page){
            	$page = $total_page;
        	}
        else if ($page < 1){
            	$page = 1;
       	}
		
		$table_nongsan = $p-> get_nongsan_phantrang($page,$limit);
	/////
	if($table_nongsan){
		if(mysqli_num_rows($table_nongsan)>0){
			$dem = 0;
			echo "<table class='row' style='width:80%;text-align:center'>";
			while($row = mysqli_fetch_array($table_nongsan)){
				if($dem == 0){
					echo "<tr class='col-md-12'>";
				}
				echo "<td style='width:20%;height:100px;border: 3px solid'>";
				echo "<b><a href='index.php?mans=".$row['MaNongSan']."'>".$row['TenNongSan']."</a></b><br>";
				echo "<img width='150px' height='150px' src='assets/public/qr_images/".$row['QR_Image']."'></img><br>";
				echo "Mô tả: ".$row['MoTaNS']."<br>";
				//echo "<img width='200px' height='165px' src='assets/uploads/images/".$row['HinhAnh']."'></img><br>";
				echo "</td>";
				$dem++;
				if($dem%3==0){
					echo "</tr>";
					//$dem = 0;
				}
			}
			echo "</table>";
		}
	}
		

	///CHỌN TRANG HIỂN THỊ
	echo "<div>";
	if ($page > 1 && $total_page > 1){
                echo '<a href="index.php?truyxuat&&page='.($page-1).'">Prev</a> | ';
    }
	// Lặp khoảng giữa
   	for ($i = 1; $i <= $total_page; $i++){
                // Nếu là trang hiện tại thì hiển thị thẻ span
                // ngược lại hiển thị thẻ a
        if ($i == $page){
            echo '<span style="font-size:28px">'.$i.'</span> | ';
        }
        else{
				echo '<a href="index.php?truyxuat&&page='.$i.'">'.$i.'</a> | ';
            }
     }
     // nếu page < $total_page và total_page > 1 mới hiển thị nút prev
     if ($page < $total_page && $total_page > 1){
		 echo '<a href="index.php?truyxuat&&page='.($page+1).'">Next</a> | ';
     }
	echo "</div>";

		 ?>
	</div>
	<div class="col-md-2"></div>
</div>