<!DOCTYPE html>
<html lang="en">

<?php
require_once APPROOT . '/views/includes/head.php';
?>

<body class="goto-here">
    <?php
    require_once APPROOT . '/views/includes/head_nav.php';
    require_once APPROOT . '/views/includes/nav_all.php';
    ?>
    <!-- END nav -->

    <section id="home-section" class="hero">
        <div class="home-slider owl-carousel">
            <div class="slider-item js-fullheight">
                <div class="overlay"></div>
                <div class="container-fluid p-0">
                    <div class="row d-md-flex no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
                        <div class="d-flex" style="justify-content: flex-end;"><img class="one-third order-md-last img-fluid" src="<?= IMAGE ?>/bg1.png" alt=""></div>
                        <div class="d-flex one-forth align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                            <div class="text">
                                <span class="subheading">#New Arrival</span>
                                <div class="horizontal">
                                    <h1 class="mb-4 mt-3">Bag Collection 2022</h1>
                                    <p class="mb-4"> With a variety of sizes and designs, ensuring all conveniences and suitable for many objects,
                                        the collections from brands: Charles & Keith, Pedro, Marhen.J,... will satisfy the ladies.</p>

                                    <p><a href="<?= URLROOT ?>/Search" class="btn-custom">Discover Now</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="home-slider owl-carousel">
            <div class="slider-item js-fullheight">
                <div class="overlay"></div>
                <div class="container-fluid p-0">
                    <div class="row d-md-flex no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
                        <div class="d-flex" style="justify-content: flex-end;"><img class="one-third order-md-last img-fluid" src="<?= IMAGE ?>/bg2.png" alt=""></div>
                        <div class="d-flex one-forth align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                            <div class="text">
                                <span class="subheading">#New Arrival</span>
                                <div class="horizontal">
                                    <h1 class="mb-4 mt-3">Bag Collection 2022</h1>
                                    <p class="mb-4"> With a variety of sizes and designs, ensuring all conveniences and suitable for many objects,
                                        the collections from brands: Charles & Keith, Pedro, Marhen.J,... will satisfy the ladies.</p>

                                    <p><a href="<?= URLROOT ?>/Search" class="btn-custom">Discover Now</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="slider-item js-fullheight">
                <div class="overlay"></div>
                <div class="container-fluid p-0">
                    <div class="row d-flex no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
                        <div class="d-flex" style="justify-content: flex-end;"><img class="one-third order-md-last img-fluid" src="<?= IMAGE ?>/bg2.png" alt=""></div>
                        <div class="d-flex one-forth align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                            <div class="text">
                                <span class="subheading">#New Arrival</span>
                                <div class="horizontal">
                                    <h1 class="mb-4 mt-3">New Bag Summer Collection</h1>
                                    <p class="mb-4"> With a variety of sizes and designs, ensuring all conveniences and     suitable for many objects,
                                        the collections from brands: Charles & Keith, Pedro, Marhen.J,... will satisfy the ladies.</p>

                                    <p><a href="<?= URLROOT ?>/Search" class="btn-custom">Discover Now</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>

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

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-3 pb-3">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h2 class="mb-4">New Bag Arrival</h2>
                    <p>Feel free to choose and affirm your stylish and personal fashion style</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <?php
                if (!empty($data['prod'])) :
                    $i = 0;
                    $prods = array_reverse($data['prod']);
                    foreach ($prods as $prod) : extract($prod); ?>
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 ftco-animate d-flex">
                            <form class="product d-flex flex-column" method="POST" action="<?= URLROOT ?>/Cart/addProductToCart/<?= $prod_id ?>">
                                <input type="hidden" id="quantity" name="quantity" class="quantity form-control input-number" value="1">
                                <a href="<?= URLROOT ?>/Home/product_single/<?= $prod_id ?>" class="img-prod"><img class="img-fluid" src="<?= IMAGE ?>/<?= $img_link ?>" alt="Colorlib Template">
                                    <div class="overlay"></div>
                                </a>
                                <div class="text py-3 pb-4 px-3">
                                    <div class="d-flex">
                                        <div class="cat">
                                            <span><?= $data['cate'][$cate_id - 1]['cate_name'] ?></span>
                                        </div>
                                        <div class="rating">
                                            <p class="text-right mb-0">
                                                <a href="#"><span class="ion-ios-star-outline"></span></a>
                                                <a href="#"><span class="ion-ios-star-outline"></span></a>
                                                <a href="#"><span class="ion-ios-star-outline"></span></a>
                                                <a href="#"><span class="ion-ios-star-outline"></span></a>
                                                <a href="#"><span class="ion-ios-star-outline"></span></a>
                                            </p>
                                        </div>
                                    </div>
                                    <h3><a href="<?= URLROOT ?>/Home/product_single/<?= $prod_id ?>"><?= $prod_name ?></a></h3>
                                    <div class="pricing">
                                        <p class="price"><span>$<?= number_format($prod_price, 2, '.', ',') ?></span></p>
                                    </div>
                                    <p class="bottom-area d-flex justify-content-center px-2">
                                        <button class="btn btn-submit mr-1" style="padding: 12px 20px;" type="submit" value="addToCart" name="addToCart"><span>Add to cart <i class="ion-ios-add ml-1"></i></span></button>
                                        <button class="btn btn-all" style="padding: 12px 20px;" type="submit" value="buyNow" name="buyNow">Buy now<span><i class="ion-ios-cart ml-1"></i></span></button>
                                    </p>
                                </div>
                            </form>
                        </div>
                <?php
                        if ($i == 7) break;
                        $i++;
                    endforeach;
                endif; ?>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-choose ftco-no-pb ftco-no-pt">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-4">
                    <div class="choose-wrap divider-one img p-5 d-flex align-items-end" style="background-image: url(<?= IMAGE ?>/choose-1.jpg);">

                        <div class="text text-center text-white px-2">
                            <span class="subheading">Summer 2023</span>
                            <h2>postcard from the city</h2>
                            <p><a href="<?= URLROOT ?>/Home/shop" class="btn btn-black px-3 py-2">Shop now</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row no-gutters choose-wrap divider-two align-items-stretch">
                        <div class="col-md-12">
                            <div class="choose-wrap full-wrap img align-self-stretch d-flex align-item-center justify-content-end" style="background-image: url(<?= IMAGE ?>/choose-2.jpg);">
                                <div class="col-md-7 d-flex align-items-center">
                                    <div class="text text-white px-5">
                                        <span class="subheading">Summer 2023</span>
                                        <h2>The Pink Edit</h2>
                                        <p><a href="<?= URLROOT ?>/Home/shop" class="btn btn-black px-3 py-2">Shop
                                                now</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row no-gutters">
                                <div class="col-md-6">
                                    <div class="choose-wrap wrap img align-self-stretch bg-light d-flex align-items-center">
                                        <div class="text text-center px-5">
                                            <span class="subheading">Summer Sale</span>
                                            <h2>Extra 50% Off</h2>
                                            <p><a href="<?= URLROOT ?>/Home/shop" class="btn btn-black px-3 py-2">Shop
                                                    now</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="choose-wrap wrap img align-self-stretch d-flex align-items-center" style="background-image: url(<?= IMAGE ?>/choose-3.jpg);">
                                        <div class="text text-center px-5">
                                            <span class="subheading">Summer 2023</span>
                                            <h2>An Ode To Earth</h2>
                                            <p><a href="<?= URLROOT ?>/Home/shop" class="btn btn-black px-3 py-2">Shop
                                                    now</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-deal bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="<?= IMAGE ?>/prod2.png" class="img-fluid" alt="">
                </div>
                <div class="col-md-6">
                    <div class="heading-section heading-section-white">
                        <span class="subheading">Deal of the month</span>
                        <h2 class="mb-3">Deal of the month</h2>
                    </div>
                    <div id="timer" class="d-flex mb-4">
                        <div class="time" id="days"></div>
                        <div class="time pl-4" id="hours"></div>
                        <div class="time pl-4" id="minutes"></div>
                        <div class="time pl-4" id="seconds"></div>
                    </div>
                    <div class="text-deal">
                        <h2><a href="#">Túi đeo chéo unisex mini hình thang hiện đại Bucket</a></h2>
                        <p class="price"><span class="mr-2 price-dc">$55.00</span><span class="price-sale">$19.00</span>
                        </p>
                        <ul class="thumb-deal d-flex mt-4">
                            <li class="img" style="background-image: url(<?= IMAGE ?>/img7.png);"></li>
                            <li class="img" style="background-image: url(<?= IMAGE ?>/img10.png);"></li>
                            <li class="img" style="background-image: url(<?= IMAGE ?>/img5.png);"></li>
                        </ul>
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
                                <p class="mb-0">D'Luth serves delivery during office hours from Monday to Saturday (except Sundays and
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
                                <p class="mb-0">Separated they live in. A small river named Duden flows</p>
                            </div>
                        </div>
                        <div class="services-2 p-4 d-flex ftco-animate">
                            <div class="icon">
                                <span class="flaticon-payment-security"></span>
                            </div>
                            <div class="text">
                                <h3>Secure Payments</h3>
                                <p class="mb-0">D'Luth is committed to keeping your personal information confidential in any way
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
                    <p>
                        With a variety of sizes and designs, ensuring all conveniences and suitable for many objects,
                        the collections from brands: Charles & Keith, Pedro, Marhen.J,... will satisfy the ladies.
                    </p>
                </div>
            </div>
        </div>
        <div class="container-fluid px-0">
            <div class="row no-gutters">
                <div class="col-md-4 col-lg-2 ftco-animate">
                    <a href="<?= IMAGE ?>/gallery-1.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(<?= IMAGE ?>/pic1.png);">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-instagram"></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-2 ftco-animate">
                    <a href="<?= IMAGE ?>/gallery-2.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(<?= IMAGE ?>/pic2.png);">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-instagram"></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-2 ftco-animate">
                    <a href="<?= IMAGE ?>/gallery-3.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(<?= IMAGE ?>/pic3.png);">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-instagram"></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-2 ftco-animate">
                    <a href="<?= IMAGE ?>/gallery-4.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(<?= IMAGE ?>/pic4.png);">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-instagram"></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-2 ftco-animate">
                    <a href="<?= IMAGE ?>/gallery-5.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(<?= IMAGE ?>/pic5.png);">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-instagram"></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-2 ftco-animate">
                    <a href="<?= IMAGE ?>/gallery-6.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(<?= IMAGE ?>/pic6.png);">
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
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
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