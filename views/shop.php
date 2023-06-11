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

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="mb-3">
                <input class="form-control" type="text" placeholder="Search our product here" name="keyword" id="keyword">
            </div>
            <div class="row">
                <div class="col-md-8 col-lg-10 order-md-last" id="output">
                </div>

                <div class="col-md-4 col-lg-2">
                    <div class="sidebar">
                        <div class="sidebar-box-2">
                            <h2 class="heading">Categories</h2>
                            <div class="row">
                                <?php if (!empty($data['cate'])) :
                                    $i = 0;
                                    foreach ($data['cate'] as $cate) : extract($cate); ?>

                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label><input type="checkbox" name="category" class="mr-2" value="<?= $cate_id ?>"> <?= $cate_name ?></label>
                                                </div>
                                            </div>
                                        </div>

                                <?php $i++;
                                    endforeach;
                                endif; ?>
                            </div>
                            <div class="sidebar-box-2">
                                <h2 class="heading">Price Range</h2>
                                <form method="post" class="colorlib-form-2">
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <div class="radio">
                                                    <label><input type="radio" name="price" class="mr-2" value="0-100000" checked> All</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <div class="radio">
                                                    <label><input type="radio" name="price" class="mr-2" value="0-50"> 0 - $50</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <div class="radio">
                                                    <label><input type="radio" name="price" class="mr-2" value="50-500"> $50 - $500</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <div class="radio">
                                                    <label><input type="radio" name="price" class="mr-2" value="500-100000"> Over $500</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
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
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
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
    <script type="text/javascript">
        handleAjax(<?= $data['number'] ?>);
        $("#keyword").keyup(function() {
            handleAjax(<?= $data['number'] ?>);
        });
        $("input[type=radio][name=price]").change(function() {
            handleAjax(<?= $data['number'] ?>);
        });
        $("input[type=checkbox][name=category]").change(function() {
            handleAjax(<?= $data['number'] ?>);
        });

        function handleAjax(number) {
            var category = [];
            var keyword = $("#keyword").val();
            var price = $("input[name='price']:checked").val();
            $("input[name='category']:checked").each(function() {
                category.push(this.value);
            });
            var url = window.location.pathname.split('/');

            $.ajax({
                url: window.location.protocol + "//" +
                    window.location.hostname + "/" + url[1] + "/Search/search/" +
                    number,
                method: "POST",
                data: {
                    keyword: keyword,
                    price: price,
                    category: category
                },
                success: function(data) {
                    $("#output").html(data);
                }
            });

        }
    </script>
</body>

</html>