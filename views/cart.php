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
                    <p class="breadcrumbs"><span class="mr-2"><a href="<?= URLROOT ?>/Home">Home</a></span> <span>Cart</span></p>
                    <h1 class="mb-0 bread">My Wishlist</h1>
                </div>
            </div>
        </div>
    </div>
    <div id="products-cart"></div>

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
        refreshCart();

        function refreshCart() {
            var url = window.location.pathname.split('/');
            $("#products-cart").empty();
            $("#products-cart").load(window.location.protocol + "//" +
                window.location.hostname + "/" + url[1] + "/Cart/refreshProductsCart/",
                function(responseTxt, statusTxt, xhr) {});
        }

        function updateProductCart(prod_id, quantity) {
            var url = window.location.pathname.split('/');
            $.ajax({
                url: window.location.protocol + "//" +
                    window.location.hostname + "/" + url[1] + "/Cart/updateProduct/" +
                    prod_id,
                method: "POST",
                data: {
                    quantity: quantity
                },
                success: function(data) {
                    refreshCart();
                }
            });
        }
    </script>
</body>

</html>