<?php
    include_once("model/NhaCungCap/mNCC.php");

    class cNCC{
    	//--------------THỐNG KÊ
		//
		#THỐNG KÊ SỐ LƯỢNG nhân viên phân phối
		public function count_NCC(){
            $p=new mNCC();
            $table=$p->count_NCC();
            return $table;
        }
		//
		//------------------------------------------
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
        public function add_nhacungcap($TenNCC, $TenNDD, $DiaChi_NCC, $DiaChi_NDD, $SDT_NCC,$SDT_NDD,$Email_NCC,$Email_NDD, $username, $MaXa){
			$p = new mNCC();
            $insert = $p->add_NCC($TenNCC, $TenNDD, $DiaChi_NCC, $DiaChi_NDD, $SDT_NCC,$SDT_NDD,$Email_NCC,$Email_NDD, $username, $MaXa);
            var_dump($insert);
            if($insert){
                return 1;// thêm thành công
            }else {
                return 0;//thêm không thành công
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
		#kkiểm tra user
		public function check_user($username){
            $p= new mNCC();
            $table = $p -> checkuser($username);
			return $table;
		}
        #xoa nha cung cap
        function delete_nhacungcap($MaNCC){
			$p = new mNCC();
			$table  = $p -> del_NCC($MaNCC);
			var_dump($table);
			return $table;
		}

    }
    
?>