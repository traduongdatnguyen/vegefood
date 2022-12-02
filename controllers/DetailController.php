<?php require_once("models/detail.php");

class DetailController{
    var $detail_model;
    public function __construct()
    {
        $this->detail_model = new Detail();
    }
    public function show_detail(){
        $id = $_GET['MaSanPham'];
        $row = $this->detail_model->detail_product($id);

        require_once("views/index.php");
    }
}