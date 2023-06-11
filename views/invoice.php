<!DOCTYPE html>
<html lang="en">

<?php
require_once APPROOT . '/views/includes/head.php';

?>
<link rel="stylesheet" href="<?= CSSFILE ?>/invoice.css">


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
                    <p class="breadcrumbs"><span class="mr-2"><a href="<?= URLROOT ?>/Home">Home</a></span>
                        <span>History</span>
                    </p>
                    <h1 class="mb-0 bread">My History</h1>
                </div>
            </div>
        </div>
    </div>
    <section class="">
        <div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 padding">
            <div class="card">
                <div class="card-header p-4">
                    <a class="pt-2 d-inline-block" href="index.html" data-abc="true">Y'luth</a>
                    <div class="float-right">
                        <h3 class="mb-0">Invoice #<?= $data['order'][0]['order_id'] ?></h3>
                        Date: <?= $data['order'][0]['date'] ?>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row mb-4">
                        <?php
                        foreach ($data['order'] as $order) : extract($order) ?>
                            <div class="col-sm-6">
                                <h5 class="mb-3">BILL TO:</h5>
                                <h3 class="text-dark mb-1"><?= $lastname ?> <?= $firstname ?></h3>
                                <div>Địa chỉ: <?= $address ?></div>
                                <div>thành phố: <?= $city ?></div>
                                <div>Email: <?= $email ?></div>
                                <div>Phone: <?= $phone ?></div>
                                <div>Note: <?= $notes ?></div>
                            </div>
                        <?php
                        endforeach; ?>
                    </div>
                    <div class="table-responsive-sm">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th class="center">#</th>
                                    <th>Item</th>
                                    <th class="right">Price</th>
                                    <th class="center">Qty</th>
                                    <th class="right">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($data['orderdetail'] as $orderdetail) : extract($orderdetail) ?>

                                    <tr>
                                        <td class="center"><?= $i ?></td>
                                        <td class="left strong"><?= $prod_name ?></td>
                                        <td class="right">$<?= number_format($prod_price, 2, '.', ',') ?></td>
                                        <td class="center"><?= $quantity ?></td>
                                        <td class="right">$<?= number_format($prod_price * $quantity, 2, '.', ',') ?></td>
                                    </tr>

                                <?php $i++;
                                endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-sm-5">
                        </div>
                        <div class="col-lg-4 col-sm-4 ml-auto">
                            <div class=" mb-3">

                                <p class="d-flex" style="justify-content: space-around;">
                                    <span>Subtotal:</span>
                                    <span>$<?= number_format($data['total'], 2, '.', ',') ?></span>
                                </p>
                                <p class="d-flex" style="justify-content: space-around;">
                                    <span>Delivery:</span>
                                    <span>$10.00</span>
                                </p>
                                <p class="d-flex" style="justify-content: space-around;">
                                    <span>Discount:</span>
                                    <span>$0.00</span>
                                </p>
                                <hr>
                                <p class="d-flex total-price" style="justify-content: space-around;">
                                    <span>Total:</span>
                                    <span>$<?= number_format($data['total'] + 10, 2, '.', ',') ?></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-white">
                    <p class="mb-0 justify-content-center"> From Y'Luth with love</p>
                </div>
            </div>
        </div>
        <div class="card-footer bg-white">
            <p class="mb-0 justify-content-center"> From Y'Luth with love</p>
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