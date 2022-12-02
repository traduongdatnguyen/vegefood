<?php
require_once("models/home.php");
class HomeController
{
    var $home_model;
    public function __construct()
    {
        $this->home_model = new Home();
    }
    public function list_sanpham()
    {
        $data_sanpham = $this->home_model->list_sanpham();
       
        require_once("views/index.php");
    }
}
