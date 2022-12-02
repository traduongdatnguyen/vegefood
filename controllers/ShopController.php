<?php
require_once("models/shop.php");
class ShopController
{
    var $shop_model;
    public function __construct()
    {
        $this->shop_model = new Shop();
    }
    public function list_sanpham()
    {

        $data_loaisanpham = $this->shop_model->list_loaisanpham();
        if (isset($_GET['LoaiSanPham'])) {
            $id = $_GET['LoaiSanPham'];
            $data_sanpham = $this->shop_model->sanpham_loai_id($id);
        } elseif (isset($_POST['Search'])) {
            $item_per_page = isset($_GET['per_page']) ? $_GET['per_page'] : 8;
            $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
            $offset = ($current_page - 1) * $item_per_page;
            $data_sanpham = $this->shop_model->timkiem_sanpham($_POST['Search']);

            #Tính số trang

            $totalRecords = mysqli_query($this->shop_model->conn, "SELECT * FROM sanpham");
            $totalRecords = $totalRecords->num_rows;
            $totalPages = ceil($totalRecords / $item_per_page);
        } else {
            $item_per_page = isset($_GET['per_page']) ? $_GET['per_page'] : 8;
            $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
            $offset = ($current_page - 1) * $item_per_page;
            $data_sanpham = $this->shop_model->phantrang($offset, $item_per_page);

            #Tính số trang
            $totalRecords = mysqli_query($this->shop_model->conn, "SELECT * FROM sanpham");
            $totalRecords = $totalRecords->num_rows;
            $totalPages = ceil($totalRecords / $item_per_page);
        }
        require_once("views/index.php");
    }
}
