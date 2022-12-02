<?php 
    require_once("model.php");
    class Detail extends Model{
        function detail_product($id){
            $query = "SELECT * FROM sanpham WHERE sanpham_id = $id";
            $result = $this->conn->query($query);
    
            return $result->fetch_assoc();
        }

     }