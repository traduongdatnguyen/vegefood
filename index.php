<?php
session_start();
$act = isset($_GET['act']) ? $_GET['act'] : "home";
switch ($act) {
    case "home":
        require_once("controllers/HomeController.php");
        $list_homecontroller = new HomeController();
        $list_homecontroller->list_sanpham();
        break;
    case "shop":
        require_once("controllers/ShopController.php");
        $list_homecontroller = new ShopController();
        $list_homecontroller->list_sanpham();
        break;
    case 'detail':
        require_once("controllers/DetailController.php");
        $detailControllore = new DetailController();
        $detailControllore->show_detail();
        break;
    default:
        require_once("controllers/HomeController.php");
        $list_homecontroller = new HomeController();
        $list_homecontroller->list_sanpham();
        break;
}
