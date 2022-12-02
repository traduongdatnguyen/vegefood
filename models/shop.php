<?php 
    require_once("model.php");
    class Shop extends Model{
        public function phantrang($a,$b){
            $query = "SELECT * FROM sanpham ORDER BY sanpham_id ASC LIMIT $a,$b";
            require("result.php");
            return $data;
        }
        public function sanpham_loai_id($id){
            $query = "SELECT * FROM sanpham WHERE sanpham_loai = $id";
            require("result.php");
            return $data;
        }

        public function timkiem_sanpham($ten_timkiem){
            $query = "SELECT * FROM sanpham WHERE sanpham_ten LIKE '%$ten_timkiem%'";
            require("result.php");
            return $data;
        }
    }