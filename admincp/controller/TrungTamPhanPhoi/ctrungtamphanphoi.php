<?php
    include_once("model/TrungTamPhanPhoi/mtrungtamphanphoi.php");

    class cTTPP{
        #Hien thi thong tin thanh vien
        public function select_trungtamphanphoi(){
            $p = new mTTPP();
            $table = $p->select_TTPP();
            return $table;
        }
        #Hien thi thong tin thanh vien theo MaKHTV
         public function select_trungtamphanphoi_byid($MaTrungTamPP){
            $p=new mTTPP();
            $table=$p->select_TTPP_id($MaTrungTamPP);
             return $table;
         }
        #THÊM TRUNG TÂM PHÂN PHỐI
        public function add_trungtamphanphoi($MaTrungTamPP, $TenTrungTam,$DiaChi,$ChucNang,$NguoiDaiDien,$MaXa){
            $p = new mTTPP();
            $insert = $p->add_TTPP($MaTrungTamPP, $TenTrungTam,$DiaChi,$ChucNang,$NguoiDaiDien,$MaXa);
            if($insert){
                return 1;// thêm thành công
            }else {
                return 0;//thêm không thành công
            }
        }
        #CẬP NHẬT TRUNG TÂM PHÂN PHỐI
        public function update_trungtamphanphoi($MaTrungTamPP, $TenTrungTam,$DiaChi,$ChucNang,$NguoiDaiDien,$MaXa){
            $p = new mTTPP();
            $update = $p->update_TTPP($MaTrungTamPP, $TenTrungTam,$DiaChi,$ChucNang,$NguoiDaiDien,$MaXa);
          
            if($update){
                return 1; //cập nhật thành công
            }else {
                return 0; //thất bại
            }
        }
        #xóa trung tâm phân phối
        function delete_trungtamphanphoi($MaTrungTamPP){
			$p = new mTTPP();
			$table  = $p -> del_TTPP($MaTrungTamPP);
			var_dump($table);
			return $table;
		}
    }
?>