<?php
    include_once("model/NhaCungCap/mNCC.php");

    class cNCC{
        public function select_NCC(){
            $p=new mNCC();
            $table=$p->select_NCC();
            return $table;
        }
        public function select_NCC_byid($MaNCC){
            $p=new mNCC();
            $table=$p->select_NCC_id($MaNCC);
            return $table;
        }
    }
    
?>