<?php
    include_once("model/LoaiNongSan/mloainongsan.php");

    class cLoaiNongSan{
    	//--------------THỐNG KÊ
		//
		#THỐNG KÊ SỐ LƯỢNG nhân viên phân phối
		// public function count_nhanvien(){
        //     $p = new mNVPP();
        //     $table = $p->count_nhanvien();
        //     return $table;
        // }
		//
		//------------------------------------------
        #Hien thi thong tin thanh vien
        public function select_loainongsan(){
            $p = new mLoaiNongSan();
            $table = $p->select_loains();
            return $table;
        }
        #Hien thi thong tin nhóm nông sản theo MaNhomNongSan
        public function select_loainongsan_byid($MaLoaiNongSan){
            $p=new mLoaiNongSan();
            $table=$p->select_loains_id($MaLoaiNongSan);
            return $table;
        }
        // #thêm nhân viên phân phối
        public function add_loainongsan($TenLoaiNongSan,$MaNhomnNongSan){
            $p = new mLoaiNongSan();
            $insert = $p->add_loains($TenLoaiNongSan,$MaNhomnNongSan);
            var_dump($insert);
            if($insert){
                return 1;// thêm thành công
            }else {
                return 0;//thêm không thành công
            }   
        }
		
		#Cap nhap thong tin nhan vien
		public function update_loainongsan($MaLoaiNongSan,$TenLoaiNongSan,$MaNhomnNongSan){
			$p=new mLoaiNongSan();
			$update=$p->update_loains($MaLoaiNongSan, $TenLoaiNongSan,$MaNhomnNongSan);
			var_dump($update);
			if($update){
				return 1;// update thành công
			}else{
				return 0;// update không thành công
			}
				
		}
        #xóa loại nông sản
        function delete_loainongsan($MaLoaiNongSan){
			$p = new mLoaiNongSan();
			$table  = $p -> del_loains($MaLoaiNongSan);
			var_dump($table);
			return $table;
		}
    }
?>