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

    <div class="hero-wrap hero-bread" style="background-image: url('<?= IMAGE ?>/bg_6.jpg');">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="<?= URLROOT ?>/Home/index">Home</a></span> <span>Shop</span></p>
                    <h1 class="mb-0 bread">Shop</h1>
                </div>
            </div>
        </div>
    </div>

    <?php
    if (!empty($data['prod'])) :
        foreach ($data['prod'] as $prod) : extract($prod); ?>
            <section class="ftco-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 mb-5 ftco-animate">
                            <a href="<?= IMAGE ?>/<?= $img_link ?>" class="image-popup prod-img-bg d-flex justify-content-center align-items-center"><img src="<?= IMAGE ?>/<?= $img_link ?>" class="img-fluid img-cover" alt="Colorlib Template"></a>
                        </div>
                        <form class="col-lg-6 pl-md-5 ftco-animate" method="POST" action="<?= URLROOT ?>/Cart/addProductToCart/<?= $prod_id ?>">
                            <h6><?= $data['cate'][0]['cate_name'] ?></h6>
                            <h4><?= $prod_name ?></h4>
                            <div class="rating d-flex">
                                <p class="text-left mr-4">
                                    <a href="#" class="mr-2">5.0</a>
                                    <a href="#"><span class="ion-ios-star-outline"></span></a>
                                    <a href="#"><span class="ion-ios-star-outline"></span></a>
                                    <a href="#"><span class="ion-ios-star-outline"></span></a>
                                    <a href="#"><span class="ion-ios-star-outline"></span></a>
                                    <a href="#"><span class="ion-ios-star-outline"></span></a>
                                </p>
                                <p class="text-left mr-4">
                                    <a href="#" class="mr-2" style="color: #000;">100 <span style="color: #bbb;">Rating</span></a>
                                </p>
                                <p class="text-left">
                                    <a href="#" class="mr-2" style="color: #000;">500 <span style="color: #bbb;">Sold</span></a>
                                </p>
                            </div>
                            <p class="price"><span>$<?= number_format($prod_price, 2, '.', ',') ?></span></p>
                            <p>Chất liệu: <?= $data['des'][0]['material'] ?></p>
                            <p>Kích thước: <?= $data['des'][0]['size'] ?></p>
                            <p>Phong cách: <?= $data['des'][0]['detail_1'] ?></p>
                            <p>Thiết kế: <?= $data['des'][0]['detail_2'] ?></p>
                            <p>Xuất xứ: <?= $data['des'][0]['origin'] ?></p>
                            <div class="row mt-4">
                                <div class="w-100"></div>
                                <div class="input-group col-md-6 d-flex mb-3 product-details">
                                    <span class="input-group-btn mr-2">
                                        <button type="button" class="quantity-left-minus btn" data-type="minus" data-field="">
                                            <i class="ion-ios-remove"></i>
                                        </button>
                                    </span>
                                    <input type="text" id="quantity" name="quantity" class="quantity form-control input-number" value="1" min="1" max="<?= $prod_quantity ?>">
                                    <span class="input-group-btn ml-2">
                                        <button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
                                            <i class="ion-ios-add"></i>
                                        </button>
                                    </span>
                                </div>
                                <div class="w-100"></div>
                                <div class="col-md-12">
                                    <p style="color: #000;"><?= $prod_quantity ?> available</p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <button class="btn btn-all mr-2" type="submit" value="addToCart" name="addToCart">Add to Cart</button>
                                <button class="btn btn-submit" type="submit" name="buyNow" value="buyNow">Buy now</button>
                            </div>
                        </form>
                    </div>

                    <div class="row mt-5">
                        <div class="col-md-12 nav-link-wrap">
                            <div class="nav nav-pills d-flex text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link ftco-animate active mr-lg-1" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Bảo quản</a>

                                <a class="nav-link ftco-animate mr-lg-1" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Về thương hiệu</a>

                                <a class="nav-link ftco-animate" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Đánh giá</a>

                            </div>
                        </div>
                        <div class="col-md-12 tab-wrap">

                            <div class="tab-content bg-light" id="v-pills-tabContent">

                                <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="day-1-tab">
                                    <div class="p-4">
                                        <p><?= $maintance_des ?></p>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-day-2-tab">
                                    <div class="p-4">
                                        <!-- <h3 class="mb-4"></h3> -->
                                        <p><?= $brand_des ?></p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-day-3-tab">
                                    <div class="row p-4">
                                        <div class="col-md-7">
                                            <h3 class="mb-4">23 Reviews</h3>
                                            <div class="review">
                                                <div class="user-img" style="background-image: url(<?= IMAGE ?>/person3.jpg)"></div>
                                                <div class="desc">
                                                    <h4>
                                                        <span class="text-left">Jacob Webb</span>
                                                        <span class="text-right">14 March 2018</span>
                                                    </h4>
                                                    <p class="star">
                                                        <span>
                                                            <i class="ion-ios-star-outline"></i>
                                                            <i class="ion-ios-star-outline"></i>
                                                            <i class="ion-ios-star-outline"></i>
                                                            <i class="ion-ios-star-outline"></i>
                                                            <i class="ion-ios-star-outline"></i>
                                                        </span>
                                                        <span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
                                                    </p>
                                                    <p>Mua tặng mẹ, mẹ khen rất đẹp</p>
                                                </div>
                                            </div>
                                            <div class="review">
                                                <div class="user-img" style="background-image: url(<?= IMAGE ?>/person1.jpg)"></div>
                                                <div class="desc">
                                                    <h4>
                                                        <span class="text-left">Jessi Nguyen</span>
                                                        <span class="text-right">14 March 2023</span>
                                                    </h4>
                                                    <p class="star">
                                                        <span>
                                                            <i class="ion-ios-star-outline"></i>
                                                            <i class="ion-ios-star-outline"></i>
                                                            <i class="ion-ios-star-outline"></i>
                                                            <i class="ion-ios-star-outline"></i>
                                                            <i class="ion-ios-star-outline"></i>
                                                        </span>
                                                        <span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
                                                    </p>
                                                    <p>Túi này đẹp ghê</p>
                                                </div>
                                            </div>
                                            <div class="review">
                                                <div class="user-img" style="background-image: url(<?= IMAGE ?>/person2.jpg)"></div>
                                                <div class="desc">
                                                    <h4>
                                                        <span class="text-left">Grey Han</span>
                                                        <span class="text-right">14 March 2018</span>
                                                    </h4>
                                                    <p class="star">
                                                        <span>
                                                            <i class="ion-ios-star-outline"></i>
                                                            <i class="ion-ios-star-outline"></i>
                                                            <i class="ion-ios-star-outline"></i>
                                                            <i class="ion-ios-star-outline"></i>
                                                            <i class="ion-ios-star-outline"></i>
                                                        </span>
                                                        <span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
                                                    </p>
                                                    <p>Túi rất đẹp, bạn gái tôi rất thích</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="rating-wrap">
                                                <h3 class="mb-4">Give a Review</h3>
                                                <p class="star">
                                                    <span>
                                                        <i class="ion-ios-star-outline"></i>
                                                        <i class="ion-ios-star-outline"></i>
                                                        <i class="ion-ios-star-outline"></i>
                                                        <i class="ion-ios-star-outline"></i>
                                                        <i class="ion-ios-star-outline"></i>
                                                        (98%)
                                                    </span>
                                                    <span>20 Reviews</span>
                                                </p>
                                                <p class="star">
                                                    <span>
                                                        <i class="ion-ios-star-outline"></i>
                                                        <i class="ion-ios-star-outline"></i>
                                                        <i class="ion-ios-star-outline"></i>
                                                        <i class="ion-ios-star-outline"></i>
                                                        <i class="ion-ios-star-outline"></i>
                                                        (85%)
                                                    </span>
                                                    <span>10 Reviews</span>
                                                </p>
                                                <p class="star">
                                                    <span>
                                                        <i class="ion-ios-star-outline"></i>
                                                        <i class="ion-ios-star-outline"></i>
                                                        <i class="ion-ios-star-outline"></i>
                                                        <i class="ion-ios-star-outline"></i>
                                                        <i class="ion-ios-star-outline"></i>
                                                        (98%)
                                                    </span>
                                                    <span>5 Reviews</span>
                                                </p>
                                                <p class="star">
                                                    <span>
                                                        <i class="ion-ios-star-outline"></i>
                                                        <i class="ion-ios-star-outline"></i>
                                                        <i class="ion-ios-star-outline"></i>
                                                        <i class="ion-ios-star-outline"></i>
                                                        <i class="ion-ios-star-outline"></i>
                                                        (98%)
                                                    </span>
                                                    <span>0 Reviews</span>
                                                </p>
                                                <p class="star">
                                                    <span>
                                                        <i class="ion-ios-star-outline"></i>
                                                        <i class="ion-ios-star-outline"></i>
                                                        <i class="ion-ios-star-outline"></i>
                                                        <i class="ion-ios-star-outline"></i>
                                                        <i class="ion-ios-star-outline"></i>
                                                        (98%)
                                                    </span>
                                                    <span>0 Reviews</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

    <?php
        endforeach;
    endif; ?>


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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="<?= JSFILE ?>/google-map.js"></script>
    <script src="<?= JSFILE ?>/main.js"></script>

    <script>
        $(document).ready(function() {

            var quantitiy = 0;
            $('.quantity-right-plus').click(function(e) {

                // Stop acting like a button
                e.preventDefault();
                // Get the field name
                var quantity = parseInt($('#quantity').val());

                // If is not undefined

                $('#quantity').val(quantity + 1);

                // Increment

            });

            $('.quantity-left-minus').click(function(e) {
                // Stop acting like a button
                e.preventDefault();
                // Get the field name
                var quantity = parseInt($('#quantity').val());

                // If is not undefined

                // Increment
                if (quantity > 1) {
                    $('#quantity').val(quantity - 1);
                }
            });

        });
    </script>

</body>
<style>
    .img-cover {
        object-fit: cover;
    }
</style>

</html>