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
                        <span>Profile</span>
                    </p>
                    <h1 class="mb-0 bread">Profile</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section">
        <div class="container-fluid ml-5">
            <?php if (!empty($data['cus'])) :
                foreach ($data['cus'] as $cus) : extract($cus); ?>
                    <div id="mess-profile" class="w-50">

                    </div>
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-6">
                            <form id="profile-box" class="billing-form">
                                <h3 class="mb-4 billing-heading">Profile</h3>
                                <div class="row align-items-end">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="firstname">First Name</label>
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
                                            <input type="text" name="addressInput" class="form-control" placeholder="House number and street name" value="<?= $address ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="towncity">Town / City</label>
                                            <input type="text" name="cityInput" class="form-control" placeholder="" value="<?= $city ?>">
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
                                <button class="btn btn-submit" name="editProfile" type="submit">Change information</button>

                            </form><!-- END -->
                        </div> <!-- .col-md-8 -->
                        <div class="col-12 col-md-6">
                            <form id="account-box" class="billing-form">
                                <h3 class="mb-4 billing-heading">Account</h3>
                                <div class="row align-items-end">

                                    <div class="w-100"></div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="oldpassword">Old Password</label>
                                            <input type="password" name="oldPasswordInput" class="form-control" placeholder="Enter your old password" required>
                                        </div>
                                    </div>
                                    <div class="w-100"></div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="newpassword">New Password</label>
                                            <input type="password" name="passwordInput1" class="form-control" placeholder="Enter new password" required>
                                        </div>
                                    </div>
                                    <div class="w-100"></div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="confirmpassword">Confirm New Password</label>
                                            <input type="password" name="passwordInput2" class="form-control" placeholder="Confirm new password" required>
                                        </div>
                                    </div>
                                    <div class="w-100"></div>
                                </div>
                                <button class="btn btn-submit" name="editAccount" type="submit">Change Password</button>
                            </form><!-- END -->
                        </div> <!-- .col-md-8 -->
                    </div>
            <?php endforeach;
            endif; ?>

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
        $(document).on('submit', '#profile-box', function() {
            editProfile();
            return false;
        });

        $(document).on('submit', '#account-box', function() {
            editAccount();
            return false;
        });


        function refreshMessPro(msg, msgbox) {
            var url = window.location.pathname.split('/');
            msgbox.empty();
            msgbox.load(window.location.protocol + "//" +
                window.location.hostname + "/" + url[1] + "/User/loadMessLogin/" + msg,
                function(responseTxt, statusTxt, xhr) {});
            window.scrollTo(0, 0);
        }

        function refreshMessAcc(msg, msgbox) {
            var url = window.location.pathname.split('/');
            msgbox.empty();
            msgbox.load(window.location.protocol + "//" +
                window.location.hostname + "/" + url[1] + "/User/loadMessLogin/" + msg,
                function(responseTxt, statusTxt, xhr) {});
            window.scrollTo(0, 0);
        }

        function editProfile() {
            var emailInput = $("input[name='emailInput']").val();
            var firstNameInput = $("input[name='firstNameInput']").val();
            var lastNameInput = $("input[name='lastNameInput']").val();
            var phoneInput = $("input[name='phoneInput']").val();
            var addressInput = $("input[name='addressInput']").val();
            var cityInput = $("input[name='cityInput']").val();


            var url = window.location.pathname.split('/');
            $.ajax({
                url: window.location.protocol + "//" +
                    window.location.hostname + "/" + url[1] + "/User/editProfile/",
                method: "POST",
                data: {
                    emailInput: emailInput,
                    firstNameInput: firstNameInput,
                    lastNameInput: lastNameInput,
                    phoneInput: phoneInput,
                    addressInput: addressInput,
                    cityInput: cityInput
                },
                success: function(data) {
                    refreshMessPro(data, $("#mess-profile"));
                }
            });
        }

        function editAccount() {
            var oldPasswordInput = $("input[name='oldPasswordInput']").val();
            var passwordInput1 = $("input[name='passwordInput1']").val();
            var passwordInput2 = $("input[name='passwordInput2']").val();

            var url = window.location.pathname.split('/');
            $.ajax({
                url: window.location.protocol + "//" +
                    window.location.hostname + "/" + url[1] + "/User/editAccount/",
                method: "POST",
                data: {
                    oldPasswordInput: oldPasswordInput,
                    passwordInput1: passwordInput1,
                    passwordInput2: passwordInput2,

                },
                success: function(data) {
                    refreshMessAcc(data, $("#mess-profile"));
                }
            });
        }
    </script>

</body>

</html>