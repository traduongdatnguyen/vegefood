<div class="hero-wrap hero-bread" style="background-image: url('public/images/bg_1.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="Home.php">Home</a></span> <span>Products</span></p>
                <h1 class="mb-0 bread">Products</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 mb-5 text-center">
                <ul class="product-category">
                    <?php
                    if (isset($_SESSION['loai_id'])) {
                        echo '<li><a href="?act=shop">Tất cả</a></li>';
                        unset($_SESSION['loai_id']);
                    } else {
                        echo '<li><a href="?act=shop" class="active">Tất cả</a></li>';
                    }
                    foreach ($data_loaisanpham as $row) {
                        if (empty($_GET['LoaiSanPham'])) {
                            echo '<li><a href="?act=shop&LoaiSanPham=' . $row['loai_id'] . '">' . $row['loai_ten'] . '</a></li>';
                        } else {
                            if ($_GET['LoaiSanPham'] !== $row['loai_id']) {
                                echo '<li><a href="?act=shop&LoaiSanPham=' . $row['loai_id'] . '">' . $row['loai_ten'] . '</a></li>';
                            } else {
                                echo '<li><a href="?act=shop&LoaiSanPham=' . $row['loai_id'] . '" class="active">' . $row['loai_ten'] . '</a></li>';
                            }
                        }
                    }
                    ?>
                </ul>
            </div>
        </div>

        <!-- Hiển thị sản phẩm -->
        <div class="container" id="SanPhamCuaKhanh">
            <div class="row" id="Products">
                <?php foreach ($data_sanpham as $item) : ?>
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="product">
                            <a href="?act=detail&MaSanPham=<?= $item['sanpham_id'] ?>" class="img-prod"><img class="img-fluid" src="public/images/<?= $item['sanpham_hinhanh'] ?>" alt="<?= $item['sanpham_ten'] ?>">
                                <span class="status"><?= $item['sanpham_giamgia'] ?> %</span>

                                <div class="overlay"></div>
                            </a>
                            <div class="text py-3 pb-4 px-3 text-center">
                                <h3><a href="#"> <?= $item['sanpham_ten'] ?></a></h3>
                                <div class="d-flex">
                                    <div class="pricing">

                                        <p class="price"><span class="mr-2 price-dc"> <?= $item['sanpham_gia'] ?></span><span class="price-sale"> <?= $item['sanpham_giamgia'] ?> $</span>;



                                        </p>
                                    </div>
                                </div>
                                <div class="bottom-area d-flex px-3">
                                    <div class="m-auto d-flex">
                                        <a href="?" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                            <span><i class="ion-ios-menu"></i></span>
                                        </a>
                                        <a href="?act=cart&addCart=add&id=<?=$item['sanpham_id']?>" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                            <span><i class="ion-ios-cart"></i></span>
                                        </a>
                                        <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                            <span><i class="ion-ios-heart"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col text-center">
                <div class="block-27">
                    <ul>
                        <?php
                            if (empty($_GET['LoaiSanPham'])) {
                                if ($current_page > 3) {
                                    $first_page = 1;
                                    echo '<li><a href="?act=shop&per_page=' . $item_per_page . '&page=' . $first_page . '">' . "&lt;" . '</a></li>';
                                }

                                for ($i = 1; $i <= $totalPages; $i++) {
                                    if ($i != $current_page) {
                                        if ($i > $current_page - 3 && $i < $current_page + 3) {
                                            echo '<li><a href="?act=shop&per_page=' . $item_per_page . '&page=' . $i . '">' . $i . '</a></li>';
                                        }
                                    } else {
                                        echo '<li class="active"><span>' . $i . '</span></li>';
                                    }
                                }

                                if ($current_page < $totalPages - 3) {
                                    $end_page = $totalPages;
                                    echo '<li><a href="?per_page=' . $item_per_page . '&page=' . $end_page . '">' . "&gt;" . '</a></li>';
                                }
                            }
                    
                        ?>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Phân trang -->
    </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
    <div class="container py-4">
        <div class="row d-flex justify-content-center py-5">
            <div class="col-md-6">
                <h2 style="font-size: 22px;" class="mb-0">Bạn muốn tìm sản phẩm nào?</h2>
                <span>Nhận thông tin vào đây, chúng tôi sẽ tìm kiếm giúp bạn !</span>
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <form action="?act=shop" class="subscribe-form" method="post">
                    <div class="form-group d-flex">
                        <input type="text" class="form-control" placeholder="Ví dụ: Dâu Tây" name="Search">
                        <input type="submit" value="Tìm kiếm" class="submit px-3">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>




<!-- loader -->
<!-- <div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
    </svg>
</div> -->


<script src="public/js/jquery.min.js"></script>
<script src="public/js/jquery-migrate-3.0.1.min.js"></script>
<script src="public/js/popper.min.js"></script>
<script src="public/js/bootstrap.min.js"></script>
<script src="public/js/jquery.easing.1.3.js"></script>
<script src="public/js/jquery.waypoints.min.js"></script>
<script src="public/js/jquery.stellar.min.js"></script>
<script src="public/js/owl.carousel.min.js"></script>
<script src="public/js/jquery.magnific-popup.min.js"></script>
<script src="public/js/aos.js"></script>
<script src="public/js/jquery.animateNumber.min.js"></script>
<script src="public/js/bootstrap-datepicker.js"></script>
<script src="public/js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="public/js/google-map.js"></script>
<script src="public/js/main.js"></script>