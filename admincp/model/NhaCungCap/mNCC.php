<?php
    include_once("model/connect.php");

    class mNCC{
        #Hiển thị thông tin nhà cung cấp
        public function select_NCC(){
            $conn;
            $p=new ketnoi();
            if($p->moketnoi($conn)){
                $string="SELECT *FROM nhacungcapnongsan";
                $table=mysqli_query($conn,$string);
                $p->dongketnoi($conn);
                return $table;
            }else {
                return false;
            }
        }
        #Xem nhà cung cấp theo ID
        public function select_NCC_id($MaNCC){
            $conn;
            $p=new ketnoi();
            if($p->moketnoi($conn)){
                $string ="SELECT *FROM tinhthanh JOIN huyenquan on tinhthanh.MaTinh = huyenquan.MaTinh
                JOIN xaphuong on xaphuong.MaHuyen = huyenquan.MaHuyen JOIN nhacungcapnongsan on nhacungcapnongsan.MaXa = xaphuong.MaXa
                WHERE MaNCC='".$MaNCC."'";
                $table=mysqli_query($conn,$string);
                $p->dongketnoi($conn);
                return $table;
            }else {
                return false;
            }
        }
        #Thêm nhà cung cấp nông sản mới
        public function add_NCC($MaNCC, $TenNCC, $TenNDD, $HinhAnh, $DiaChi_NCC, $DiaChi_NDD, $SDT_NCC,$SDT_NDD,$Email_NCC,$Email_NDD, $username, $MaXa){
            $conn;
            $p = new ketnoi();
            if($p->moketnoi($conn)){
                if($username !=""){
                    $string = "INSERT INTO nhacungcapnongsan(MaNCC, TenNhaCungCap, TenNguoiDaiDien, HinhAnh, DiaChi_NCC, DiaChi_NDD, SDT_NCC,SDT_NDD, EmailNCC,EmailNDD, username, MaXa) VALUES ";
                    $string .="(".$MaNCC.",'".$TenNCC."','".$TenNDD."','".$HinhAnh."','".$DiaChi_NCC."','".$DiaChi_NDD."','".$SDT_NCC."','".$SDT_NDD."','".$Email_NCC."','".$Email_NDD."','".$username."',".$MaXa.")";
                }else{
                    $string = "INSERT INTO nhacungcapnongsan(MaNCC, TenNhaCungCap, TenNguoiDaiDien  , HinhAnh, DiaChi_NCC, DiaChi_NDD, SDT_NCC,SDT_NDD, EmailNCC,EmailNDD, MaXa) VALUES ";
                    $string .="(".$MaNCC.",'".$TenNCC."','".$TenNDD."','".$HinhAnh."','".$DiaChi_NCC."','".$DiaChi_NDD."','".$SDT_NCC."','".$SDT_NDD."','".$Email_NCC."','".$Email_NDD."',".$MaXa.")";
                }
                $table=mysqli_query($conn,$string);
                echo $string;
                $p->dongketnoi($conn);
                var_dump ($table);
                return $table;
            }else {
                return false;
            }
        }
        #Update nhà cung cấp
        public function update_NCC($MaNCC, $TenNCC, $TenNDD, $DiaChi_NCC, $DiaChi_NDD, $SDT_NCC,$SDT_NDD,$Email_NCC,$Email_NDD, $username, $MaXa){
			$conn;
			$p= new ketnoi();
			if($p->moketnoi($conn)){
				if($username !=""){
					$string ="update nhacungcapnongsan";
					$string .= " set MaNCC='".$MaNCC."', TenNhaCungCap='".$TenNCC."', TenNguoiDaiDien='".$TenNDD."', DiaChi_NCC='".$DiaChi_NCC."', DiaChi_NDD='".$DiaChi_NDD."',  SDT_NCC='".$SDT_NCC."', SDT_NDD='".$SDT_NDD."', EmailNCC='".$Email_NCC."',EmailNDD='".$Email_NDD."',username='".$username."', MaXa='".$MaXa."'";
					$string .= " Where MaNCC='".$MaNCC."'";
				}else {
					$string ="update nhacungcapnongsan";
					$string .= " set MaNCC='".$MaNCC."', TenNhaCungCap='".$TenNCC."', TenNguoiDaiDien='".$TenNDD."', DiaChi_NCC='".$DiaChi_NCC."', DiaChi_NDD='".$DiaChi_NDD."',  SDT_NCC='".$SDT_NCC."', SDT_NDD='".$SDT_NDD."', EmailNCC='".$Email_NCC."',EmailNDD='".$Email_NDD."', MaXa='".$MaXa."'";
					$string .= " Where MaNCC='".$MaNCC."'";
				}
				
				echo $string;
				$table =mysqli_query($conn,$string);
				$p->dongketnoi($conn);
				return $table;

			}else {
				return false;
			}
		}
    }
?>