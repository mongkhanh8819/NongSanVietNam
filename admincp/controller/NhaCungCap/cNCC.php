<?php
    include_once("model/NhaCungCap/mNCC.php");

    class cNCC{
        #xem nha cung cap
        public function select_NCC(){
            $p=new mNCC();
            $table=$p->select_NCC();
            return $table;
        }
        #xem nha cung cap theo id
        public function select_NCC_byid($MaNCC){
            $p=new mNCC();
            $table=$p->select_NCC_id($MaNCC);
            return $table;
        }
        #thêm nha cung cap nong san
        public function add_nhacungcap($MaNCC, $TenNCC, $TenNDD, $file,$tenanh,$loaianh,$size, $DiaChi_NCC, $DiaChi_NDD, $SDT_NCC,$SDT_NDD,$Email_NCC,$Email_NDD, $username, $MaXa){
            if($loaianh == "image/jpeg" || $loaianh == "image/png" || $loaianh== "image/jpg"){
				if($size <= 2*1024*1024){
					if(move_uploaded_file($file,"assets/uploads/images/".$tenanh)){
						$p= new mNCC();
						$insert=$p->add_NCC($MaNCC, $TenNCC, $TenNDD, $tenanh, $DiaChi_NCC, $DiaChi_NDD, $SDT_NCC,$SDT_NDD,$Email_NCC,$Email_NDD, $username, $MaXa);
						var_dump($insert);
						if($insert){
							return 1;
						}
						else{
							return 0; //không thể insert
						}
					}else{
						return -1; //không thể upload
					}
				}else{
					return -2; //Size kích thước lơn
				}
			}else{
				return -3; //Không đúng loại file
			}
        }
		#update nhà cung cấp
		public function update_nhacungcap($MaNCC, $TenNCC, $TenNDD, $DiaChi_NCC, $DiaChi_NDD, $SDT_NCC,$SDT_NDD,$Email_NCC,$Email_NDD, $username, $MaXa){
			$p=new mNCC();
			$update=$p->update_NCC($MaNCC, $TenNCC, $TenNDD, $DiaChi_NCC, $DiaChi_NDD, $SDT_NCC,$SDT_NDD,$Email_NCC,$Email_NDD, $username, $MaXa);
			var_dump ($update);
			if($update){
				return 1;// update thành công
			}else{
				return 0;// update không thành công
			}
				
		}
    }
    
?>