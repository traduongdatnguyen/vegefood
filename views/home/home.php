<section id="home-section" class="hero">
    <div class="home-slider owl-carousel">
        <div class="slider-item" style="background-image: url(public/images/bg_1.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                    <div class="col-md-12 ftco-animate text-center">
                        <h1 class="mb-2">Là nguồn cung cấp thực phẩm hàng đầu</h1>
                        <h2 class="subheading mb-4">Chúng tôi cung cấp rau &amp; trái cây hữu cơ</h2>
                        <p><a href="#Products" class="btn btn-primary">Xem Chi Tiết</a></p>
                    </div>

                </div>
            </div>
        </div>

        <div class="slider-item" style="background-image: url(public/images/bg_2.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                    <div class="col-sm-12 ftco-animate text-center">
                        <h1 class="mb-2">100% Thực phẩm tươi &amp; hữu cơ</h1>
                        <h2 class="subheading mb-4">Chúng tôi cung cấp rau &amp; trái cây hữu cơ</h2>
                        <p><a href="#Products" class="btn btn-primary">Xem Chi Tiết</a></p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<?php
require_once("views/Intro.html");
?>
<section class="ftco-section ftco-category ftco-no-pt">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6 order-md-last align-items-stretch d-flex">
                        <div class="category-wrap-2 ftco-animate img align-self-stretch d-flex" style="background-image: url(public/images/category.jpg);">
                            <div class="text text-center">
                                <h2>Vegetables</h2>
                                <p>Bảo vệ sức khỏe mọi nhà</p>
                                <p><a href="Shop.php" class="btn btn-primary">Shop now</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(public/images/category-1.jpg);">
                            <div class="text px-3 py-1">
                                <h2 class="mb-0"><a href="Home.php?LoaiSanPham=1#SanPhamCuaKhanh">Hoa quả</a></h2>
                            </div>
                        </div>
                        <div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(public/images/category-2.jpg);">
                            <div class="text px-3 py-1">
                                <h2 class="mb-0"><a href="Home.php?LoaiSanPham=2#SanPhamCuaKhanh">Rau củ</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(public/images/category-3.jpg);">
                    <div class="text px-3 py-1">
                        <h2 class="mb-0"><a href="Home.php?LoaiSanPham=3#SanPhamCuaKhanh">Nước trái cây</a></h2>
                    </div>
                </div>
                <div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(public/images/category-4.jpg);">
                    <div class="text px-3 py-1">
                        <h2 class="mb-0"><a href="Home.php?LoaiSanPham=4#SanPhamCuaKhanh">Các loại đậu</a></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sản phẩm -->
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-3 pb-3">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <span class="subheading">Sản Phẩm Nổi Bật</span>
                <h2 class="mb-4">Của Chúng Tôi</h2>
                <p>Xa xa, sau những ngọn núi đó, là những trang trại màu mỡ cung cấp thực phẩm tốt cho mọi người !</p>
            </div>
        </div>
    </div>
    <div class="container" id="SanPhamCuaKhanh">
        <div class="row" id="Products">
            <?php foreach ($data_sanpham as $item) : ?>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <a href="?act=shop&MaSanPham=<?= $item['sanpham_id'] ?>" class="img-prod"><img class="img-fluid" src="public/images/<?= $item['sanpham_hinhanh'] ?>" alt="<?= $item['sanpham_ten'] ?>">
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
                                    <a href="?act=cart&addCart=add&id=<?=$row['sanpham_id']?>" class="buy-now d-flex justify-content-center align-items-center mx-1">
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
</section>
<section class="ftco-section img" style="background-image: url(public/images/bg_3.jpg);">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-md-6 heading-section ftco-animate deal-of-the-day ftco-animate">
                <span class="subheading">Giá tốt nhất cho bạn</span>
                <h2 class="mb-4">Ưu đãi trong ngày</h2>
                <p>Xa xa, sau những ngọn núi đó, là những trang trại màu mỡ cung cấp thực phẩm tốt cho mọi người</p>
                <h3><a href="#">Xà Lách</a></h3>
                <span class="price">9$ <a href="#">bây giờ chỉ còn 7$</a></span>
                <div id="timer" class="d-flex mt-5">
                    <!-- <div class="time" id="days"></div>  -->
                    <div class="time pl-3" id="hours"></div>
                    <div class="time pl-3" id="minutes"></div>
                    <div class="time pl-3" id="seconds"></div>
                </div>
            </div>
        </div>
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