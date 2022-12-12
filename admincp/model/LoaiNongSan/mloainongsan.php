<?php
    include_once("model/connect.php");

    class mLoaiNongSan{
        //--------------THỐNG KÊ
        //
        #THỐNG KÊ SỐ LƯỢNG KHÁCH HÀNG DOANH NGHIỆP
        // public function count_nhanvien(){
        //     $conn;
        //     $p=new ketnoi();
        //     if($p->moketnoi($conn)){
        //         $string="SELECT count(*) FROM nhanvienphanphoi";
        //         $table=mysqli_query($conn,$string);
        //         $p->dongketnoi($conn);
        //         return $table;
        //     }else {
        //         return false;
        //     }
        // }
        
        // ------------------------------------------
        #Hiển thị thông tin loại nông sản
        public function select_loains(){
            $conn;
            $p=new ketnoi();
            if($p->moketnoi($conn)){
                $string="SELECT *FROM loainongsan";
                $table=mysqli_query($conn,$string);
                $p->dongketnoi($conn);
                return $table;
            }else {
                return false;
            }
        }
        #Xem loại nông sản theo ID
        public function select_loains_id($MaLoaiNongSan){
             $conn;
             $p=new ketnoi();
             if($p->moketnoi($conn)){
                $string ="SELECT * FROM loainongsan WHERE MaLoaiNongSan='".$MaLoaiNongSan."'";
                 $table=mysqli_query($conn,$string);
                //   echo $string;
                 $p->dongketnoi($conn);
                //  var_dump ($table);
                 return $table;
             }else {
                 return false;
             }
        }
        #thêm loại nông sản
        public function add_loains($TenLoaiNongSan,$MaNhomNongSan){
			$conn;
			$p = new ketnoi();
			if($p->moketnoi($conn)){
					$string="insert into loainongsan(TenLoaiNongSan,MaNhomNongSan) values";
                	$string .= "('".$TenLoaiNongSan."','".$MaNhomNongSan."')";
                $table=mysqli_query($conn,$string);
                echo $string;
                $p->dongketnoi($conn);
				var_dump($table);
                return $table;
            }else{
                return false;
            }
		}
        #cập nhật loại nông sản
        public function update_loains($MaLoaiNongSan,$TenLoaiNongSan,$MaNhomNongSan){
			$conn;
			$p= new ketnoi();
			if($p->moketnoi($conn)){
					$string ="update loainongsan";
					$string .= " set MaLoaiNongSan='".$MaLoaiNongSan."', TenLoaiNongSan='".$TenLoaiNongSan."',MaNhomNongSan='".$MaNhomNongSan."'";
					$string .= " Where MaLoaiNongSan='".$MaLoaiNongSan."'";
				
				$table =mysqli_query($conn,$string);
                echo $string;
				$p->dongketnoi($conn);
                var_dump($table);
				return $table;

			}else {
				return false;
			}
		}
        #xóa loại nông sản
        function del_loains($MaLoaiNongSan){
			$conn;
			$p = new ketnoi();
			if($p -> moketnoi($conn)){
				$string = "Delete FROM loainongsan where MaLoaiNongSan='".$MaLoaiNongSan."'";
				//echo $string;
				$table = mysqli_query($conn,$string);
				$p -> dongketnoi($conn);
				//var_dump($table);
				return $table;
			}else{
				return false;
			}
		}
       
    }
?>