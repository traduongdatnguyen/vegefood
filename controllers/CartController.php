<?php
require_once("models/cart.php");
class HomeController
{
    var $cart_home;
    public function __construct()
    {
        $this->cart_home = new Cart();
    }
    public function list_sanpham()
    {
        $data_sanpham = $this->cart_home->list_sanpham();
       
        require_once("views/index.php");
    }
}
