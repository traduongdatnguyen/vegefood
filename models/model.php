<?php 
require_once("connection.php");
class Model{
    var $conn;
    
    function __construct(){
        $obj_conn = new connection();
        $this->conn =  $obj_conn->conn;
    }
    function list_sanpham(){
        $query = "SELECT * FROM sanpham ORDER BY sanpham_id ASC LIMIT 0,8";
        require("result.php");
        return $data;
    }
    function list_loaisanpham(){
        $query = "SELECT * FROM loai";
        require("result.php");
        return $data;
    }
}