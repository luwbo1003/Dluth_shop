<html lang="en">

<?php
require_once APPROOT . '/views/includes/head.php';
?>

<body class="goto-here">
    <!--HEADER-->
    <?php
    require_once APPROOT . '/views/includes/head_nav.php';
    ?>
    <?php
    require_once APPROOT . '/views/includes/nav_all.php';
    ?>

    <!--WELCOME-->
    <div class="hero-wrap hero-bread" style="background-image: url('<?= IMAGE ?>/bg_6.jpg');">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="<?= URLROOT ?>/Home">Home</a></span>
                        <span>About</span>
                    </p>
                    <h1 class="mb-0 bread">About Us</h1>
                </div>
            </div>
        </div>
    </div>
    <section class="ftco-section ftco-no-pt ftco-no-pb">
        <div class="container">
            <div class="row no-gutters ftco-services">
                <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services p-4 py-md-5">
                        <div class="icon d-flex justify-content-center align-items-center mb-4">
                            <span class="flaticon-bag"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Free Shipping</h3>
                            <p>D'Luth serves delivery during office hours from Monday to Saturday (except Sundays and
                                public holidays and Tet).
                                In case, you place an order after 18:00, the delivery time will add up to 1 day.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services p-4 py-md-5">
                        <div class="icon d-flex justify-content-center align-items-center mb-4">
                            <span class="flaticon-customer-service"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Support Customer</h3>
                            <p>
                                Working time: 09:00 - 18:00 from Monday to Friday</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services p-4 py-md-5">
                        <div class="icon d-flex justify-content-center align-items-center mb-4">
                            <span class="flaticon-payment-security"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Secure Payments</h3>
                            <p>
                                D'Luth is committed to keeping your personal information confidential in any way
                                possible.
                                We will use a variety of information security technologies to protect this information
                                from unintended retrieval, use or disclosure.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pb ftco-no-pt bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center"
                    style="background-image: url(<?= IMAGE ?>/about.jpg);">
                    <a href="https://vimeo.com/45830194"
                        class="icon popup-vimeo d-flex justify-content-center align-items-center">
                        <span class="icon-play"></span>
                    </a>
                </div>
                <div class="col-md-7 py-md-5 wrap-about pb-md-5 ftco-animate">
                    <div class="heading-section-bold mb-4 mt-md-5">
                        <div class="ml-md-0">
                            <h2 class="mb-4">Stablished Sinced 1975</h2>
                        </div>
                    </div>
                    <div class="pb-md-5 pb-4">
                        <p>Được thành lập vào năm 2020, Công ty Cổ phần D'Luth (D'Luth Online) đã nhanh chóng trở thành
                            một trong những công ty phân phối thời trang lớn nhất trong việc giới thiệu các thương hiệu
                            thời trang cao cấp và sang trọng tại Việt Nam. Sau thành công ngoài mong đợi của cửa hàng
                            đầu tiên, hiện D'Luth đang là ngôi nhà chung của hơn 18 thương hiệu đình đám thế giới.
                            D'Luth không chỉ lan toả văn hoá thời trang thế giới đa dạng mà còn mang đến một nền tảng
                            thời trang giá trị, dịch vụ khách hàng tận tâm, có trách nhiệm, để Việt Nam là điểm đến sành
                            điệu cho những người yêu thời trang</p>
                        <p></p>
                        <p><a href="#" class="btn btn-primary">Shop now</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section testimony-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="services-flow">
                        <div class="services-2 p-4 d-flex ftco-animate">
                            <div class="icon">
                                <span class="flaticon-bag"></span>
                            </div>
                            <div class="text">
                                <h3>Free Shipping</h3>
                                <p class="mb-0">D'Luth serves delivery during office hours from Monday to Saturday
                                    (except Sundays and
                                    public holidays and Tet).
                                </p>
                            </div>
                        </div>
                        <div class="services-2 p-4 d-flex ftco-animate">
                            <div class="icon">
                                <span class="flaticon-heart-box"></span>
                            </div>
                            <div class="text">
                                <h3>Valuable Gifts</h3>
                                <p class="mb-0">Shop now to receive extremely attractive gifts.</p>
                            </div>
                        </div>
                        <div class="services-2 p-4 d-flex ftco-animate">
                            <div class="icon">
                                <span class="flaticon-payment-security"></span>
                            </div>
                            <div class="text">
                                <h3>Secure Payments</h3>
                                <p class="mb-0">D'Luth is committed to keeping your personal information confidential in
                                    any way
                                    possible.</p>
                            </div>
                        </div>
                        <div class="services-2 p-4 d-flex ftco-animate">
                            <div class="icon">
                                <span class="flaticon-customer-service"></span>
                            </div>
                            <div class="text">
                                <h3>Support</h3>
                                <p class="mb-0"> Working time: 09:00 - 18:00 from Monday to Friday</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="heading-section ftco-animate mb-5">
                        <h2 class="mb-4">Our satisfied customer says</h2>
                        <p></p>
                    </div>
                    <div class="carousel-testimony owl-carousel">
                        <div class="item">
                            <div class="testimony-wrap">
                                <div class="user-img mb-4" style="background-image: url(<?= IMAGE ?>/person2.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text">
                                    <p class="mb-4 pl-4 line">My girlfriend is Vietnamese, she often tells me about this
                                        shop. The shop has a variety of handbags, I can order even when I'm in Taiwan
                                    </p>
                                    <p class="name">Grey Han</p>
                                    <span class="position">Người mua hàng</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap">
                                <div class="user-img mb-4" style="background-image: url(<?= IMAGE ?>/person1.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text">
                                    <p class="mb-4 pl-4 line">Tôi đã mua túi xách ở D'Luth rất nhiều lần nhưng đây là
                                        lần đàu tiên tôi đặt trên web. Trang web dễ nhìn, xem và đặt hàng rất đơn giản.
                                    </p>
                                    <p class="name">Jessi Nguyen</p>
                                    <span class="position">Người mua hàng</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap">
                                <div class="user-img mb-4" style="background-image: url(<?= IMAGE ?>/person3.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text">
                                    <p class="mb-4 pl-4 line">Web rất đẹp</p>
                                    <p class="name">Garreth Smith</p>
                                    <span class="position">Người mua hàng</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap">
                                <div class="user-img mb-4" style="background-image: url(<?= IMAGE ?>/person4.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text">
                                    <p class="mb-4 pl-4 line">Web rất đẹp. Tôi rất thích</p>
                                    <p class="name">Smith Taylor</p>
                                    <span class="position">Người mua hàng</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap">
                                <div class="user-img mb-4" style="background-image: url(<?= IMAGE ?>/person5.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text">
                                    <p class="mb-4 pl-4 line">Rất nhiều mẫu mã để lựa chọn</p>
                                    <p class="name">Garreth Smith</p>
                                    <span class="position">Người mua hàng</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-gallery">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 heading-section text-center mb-4 ftco-animate">
                    <h2 class="mb-4">Follow Us On Instagram</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                        there live the blind texts. Separated they live in</p>
                </div>
            </div>
        </div>
        <div class="container-fluid px-0">
            <div class="row no-gutters">
                <div class="col-md-4 col-lg-2 ftco-animate">
                    <a href="<?= IMAGE ?>/gallery-1.jpg" class="gallery image-popup img d-flex align-items-center"
                        style="background-image: url(<?= IMAGE ?>/pic1.png);">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-instagram"></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-2 ftco-animate">
                    <a href="<?= IMAGE ?>/gallery-2.jpg" class="gallery image-popup img d-flex align-items-center"
                        style="background-image: url(<?= IMAGE ?>/pic2.png);">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-instagram"></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-2 ftco-animate">
                    <a href="<?= IMAGE ?>/gallery-3.jpg" class="gallery image-popup img d-flex align-items-center"
                        style="background-image: url(<?= IMAGE ?>/pic3.png);">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-instagram"></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-2 ftco-animate">
                    <a href="<?= IMAGE ?>/gallery-4.jpg" class="gallery image-popup img d-flex align-items-center"
                        style="background-image: url(<?= IMAGE ?>/pic4.png);">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-instagram"></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-2 ftco-animate">
                    <a href="<?= IMAGE ?>/gallery-5.jpg" class="gallery image-popup img d-flex align-items-center"
                        style="background-image: url(<?= IMAGE ?>/pic5.png);">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-instagram"></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-2 ftco-animate">
                    <a href="<?= IMAGE ?>/gallery-6.jpg" class="gallery image-popup img d-flex align-items-center"
                        style="background-image: url(<?= IMAGE ?>/pic6.png);">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-instagram"></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <!--FOOTER-->
    <?php
    require_once APPROOT . '/views/includes/footer.php';
    ?>


    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" />
        </svg></div>


    <script src="<?= JSFILE ?>/jquery.min.js"></script>
    <script src="<?= JSFILE ?>/jquery-migrate-3.0.1.min.js"></script>
    <script src="<?= JSFILE ?>/popper.min.js"></script>
    <script src="<?= JSFILE ?>/bootstrap.min.js"></script>
    <script src="<?= JSFILE ?>/jquery.easing.1.3.js"></script>
    <script src="<?= JSFILE ?>/jquery.waypoints.min.js"></script>
    <script src="<?= JSFILE ?>/jquery.stellar.min.js"></script>
    <script src="<?= JSFILE ?>/owl.carousel.min.js"></script>
    <script src="<?= JSFILE ?>/jquery.magnific-popup.min.js"></script>
    <script src="<?= JSFILE ?>/aos.js"></script>
    <script src="<?= JSFILE ?>/jquery.animateNumber.min.js"></script>
    <script src="<?= JSFILE ?>/bootstrap-datepicker.js"></script>
    <script src="<?= JSFILE ?>/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
    </script>
    <script src="<?= JSFILE ?>/google-map.js"></script>
    <script src="<?= JSFILE ?>/main.js"></script>

</body>

</html>