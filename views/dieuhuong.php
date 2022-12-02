<?php
$act = isset($_GET['act']) ? $_GET['act'] : "home";
switch ($act) {
    case 'home':
        require_once("home/home.php");
        break;
    case 'shop':
        require_once("shop/Shop.php");
        break;
    case 'detail':
        require_once("detail_product/Product-Single.php");
        break;    
    case 'cart':
        require_once("cart/Cart.php");
        break;   
    case 'dangnhap':
        require_once("login/Login.php");
        break;    
}
