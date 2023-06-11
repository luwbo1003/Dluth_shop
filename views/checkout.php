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
                    <p class="breadcrumbs"><span class="mr-2"><a href="<?= URLROOT ?>/Home">Home</a></span>
                        <span>Checkout</span>
                    </p>
                    <h1 class="mb-0 bread">Checkout</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <?php if (!empty($data['cus'])) :
                    foreach ($data['cus'] as $cus) : extract($cus); ?>

                        <form action="<?= URLROOT ?>/Checkout/addOrder" method="POST" enctype="application/x-www-form-urlencoded" class="col-xl-10 ftco-animate">
                            <div class="billing-form">
                                <h3 class="mb-4 billing-heading">Billing Details</h3>
                                <div class="row align-items-end">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="firstname">Firt Name</label>
                                            <input type="text" name="firstNameInput" class="form-control" placeholder="" value="<?= $firstname ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="lastname">Last Name</label>
                                            <input type="text" name="lastNameInput" class="form-control text-black-50" placeholder="" value="<?= $lastname ?>">
                                        </div>
                                    </div>
                                    <div class="w-100"></div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="streetaddress">Street Address</label>
                                            <input type="text" name="streetInput" class="form-control" placeholder="House number and street name" value="<?= $address ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="towncity">Town / City</label>
                                            <input type="text" name="townInput" class="form-control" placeholder="" value="<?= $city ?>">
                                        </div>
                                    </div>
                                    <div class="w-100"></div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phone">Phone</label>
                                            <input type="text" name="phoneInput" class="form-control" placeholder="" value="<?= $phone ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="emailaddress">Email Address</label>
                                            <input type="text" name="emailInput" class="form-control" placeholder="" value="<?= $email ?>">
                                        </div>
                                    </div>
                                    <div class="w-100"></div>

                                </div>
                                <div class="form-group">
                                    <label for="">Notes</label>
                                    <textarea rows="3" name="notesInput" class="form-control" style="resize: none;" name="notesInput" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                </div>
                            </div><!-- END -->

                            <div class="row mt-5 pt-3 d-flex">
                                <div class="col-md-6 d-flex">
                                    <div class="cart-detail cart-total bg-light p-3 p-md-4">
                                        <h3 class="billing-heading mb-4">Cart Total</h3>
                                        <p class="d-flex">
                                            <span>Subtotal</span>
                                            <span>$<?= number_format($_SESSION['total'], 2, '.', ',') ?></span>
                                        </p>
                                        <p class="d-flex">
                                            <span>Delivery</span>
                                            <span>$10.00</span>
                                        </p>
                                        <p class="d-flex">
                                            <span>Discount</span>
                                            <span>$0.00</span>
                                        </p>
                                        <hr>
                                        <p class="d-flex total-price">
                                            <span>Total</span>
                                            <span>$<?= number_format($_SESSION['total'] + 10, 2, '.', ',') ?></span>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="cart-detail bg-light p-3 p-md-4">
                                        <h3 class="billing-heading mb-4">Payment Method</h3>
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <div class="radio">
                                                    <label><input type="radio" name="optradio" class="mr-2" value="COD"> COD</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <div class="radio">
                                                    <label><input type="radio" name="optradio" class="mr-2" value="Banking"> Banking</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <div class="radio">
                                                    <label><input type="radio" name="optradio" class="mr-2" value="Momo"> Momo</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label><input type="checkbox" value="" class="mr-2" required> I have read and accept
                                                        the terms and conditions</label>
                                                </div>
                                            </div>
                                        </div>
                                        <?php foreach ($_SESSION['cart'] as $prod) : extract($prod) ?>
                                            <input type="hidden" name="prod_id[]" value="<?= $prod_id ?>">
                                            <input type="hidden" name="quantity[]" value="<?= $prod_quantity_cart ?>">
                                            <input type="hidden" name="prod_price[]" value="<?= $prod_price ?>">
                                            <input type="hidden" name="prod_name[]" value="<?= $prod_name ?>">
                                        <?php endforeach; ?>
                                        <input type="hidden" name="cus_id" value="<?= $cus_id ?>">
                                        <input type="hidden" name="total" value="<?= number_format($_SESSION['total'] + 10, 2, '.', ',') ?>">
                                        <div class="d-flex ">
                                            <button class="btn btn-all w-100" type="submit" name="order">Place an order</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form> <!-- .col-md-8 -->

                <?php endforeach;
                endif; ?>
            </div>
        </div>
    </section> <!-- .section -->

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
                if (quantity > 0) {
                    $('#quantity').val(quantity - 1);
                }
            });

        });
    </script>

</body>

</html>