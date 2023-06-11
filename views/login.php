<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>y'Luth</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="<?= CSSFILE ?>/material-design-iconic-font.min.css">
    <!-- Main css -->
    <link rel="stylesheet" href="<?= CSSFILE ?>/loginstyle.css">
    <link rel="stylesheet" href="<?= CSSFILE ?>/icomoon.css">
</head>

<body>

    <div class="main">


        <section class="vh-70">
            <div class="container">
                <div id="mess">

                </div>
                <!-- Sign in form -->
                <form id="login-box" class="signin-content">
                    <div class="signin-image">
                        <figure><img src="<?= IMAGE ?>/signin-image.jpg" alt="sing up image"></figure>
                        <a style="cursor:pointer;" id="signup-btn" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Sign up</h2>
                        <div class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="email" name="emailInputLogin" id="your_email" placeholder="Your Email" required />
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="passwordInput" id="your_pass" placeholder="Password" required />
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in" />
                            </div>
                        </div>
                        <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi ion-logo-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </form>


                <!-- Sing up  Form -->
                <form id="signup-box" class="signup-conten d-none" style="display: none; ">
                    <div class="signin-form">
                        <h2 class="form-title">Sign up</h2>
                        <div class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="firstNameInput" id="name" placeholder="First Name" required />
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="lastNameInput" id="name" placeholder="Last Name" required />
                            </div>
                            <div class="form-group">
                                <label for="phone"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="phoneInput" id="phone" placeholder="Your Phone" required />
                            </div>
                            <div class="form-group">
                                <label for="birthday"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="date" name="birthdayInput" id="birthday" placeholder="Your Birthday" required />
                            </div>
                            <div class="form-group">
                                <label for="address"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="addressInput" id="address" placeholder="Your Address" required />
                            </div>
                            <div class="form-group">
                                <label for="city"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="cityInput" id="city" placeholder="Your City" required />
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="emailInput" id="email" placeholder="Your Email" required />
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="passwordInput1" id="pass" placeholder="Password" required />
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="passwordInput2" id="re_pass" placeholder="Repeat your password" required />
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register" />
                            </div>
                        </div>
                    </div>
                    <div class="signin-image">
                        <figure><img src="<?= IMAGE ?>/signup-image.jpg" alt="sing up image"></figure>
                        <a style="cursor: pointer;" id="login-btn" class="signup-image-link">I am already member</a>
                    </div>
                </form>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="<?= JSFILE ?>/jquery.min.js"></script>
    <script src="<?= JSFILE ?>/main.js"></script>
    <script>
        var loginBox = document.getElementById("login-box");
        var signupBox = document.getElementById("signup-box");
        var loginBtn = document.getElementById("login-btn");
        var signupBtn = document.getElementById("signup-btn");

        signupBtn.addEventListener("click", function() {
            hideLoginBox();
        })

        loginBtn.addEventListener("click", function() {
            hideSignupBox();
        })

        function hideLoginBox() {
            loginBox.classList.add("d-none");
            signupBox.classList.remove("d-none");
            loginBox.style.display = "none";
            signupBox.style.display = "flex";
        }

        function hideSignupBox() {
            signupBox.classList.add("d-none");
            loginBox.classList.remove("d-none");
            signupBox.style.display = "none";
            loginBox.style.display = "flex";
        }
    </script>
    <script>
        $(document).on('submit', '#login-box', function() {
            login();
            return false;
        });

        $(document).on('submit', '#signup-box', function() {
            register();
            return false;
        });

        function refreshMess(msg) {
            var url = window.location.pathname.split('/');
            $("#mess").empty();
            $("#mess").load(window.location.protocol + "//" +
                window.location.hostname + "/" + url[1] + "/User/loadMessLogin/" + msg,
                function(responseTxt, statusTxt, xhr) {});
            window.scrollTo(0, 0);
        }

        function login() {
            var emailInputLogin = $("input[name='emailInputLogin']").val();
            var passwordInput = $("input[name='passwordInput']").val();

            var url = window.location.pathname.split('/');
            $.ajax({
                url: window.location.protocol + "//" +
                    window.location.hostname + "/" + url[1] + "/User/login/",
                method: "POST",
                data: {
                    emailInputLogin: emailInputLogin,
                    passwordInput: passwordInput
                },
                success: function(data) {
                    if (data == "wrongpass") {
                        refreshMess(data);
                    } else {
                        window.location.replace(data);
                    }

                }
            });
        }

        function register() {
            var emailInput = $("input[name='emailInput']").val();
            var passwordInput1 = $("input[name='passwordInput1']").val();
            var passwordInput2 = $("input[name='passwordInput2']").val();
            var firstNameInput = $("input[name='firstNameInput']").val();
            var lastNameInput = $("input[name='lastNameInput']").val();
            var birthdayInput = $("input[name='birthdayInput']").val();
            var phoneInput = $("input[name='phoneInput']").val();
            var addressInput = $("input[name='addressInput']").val();
            var cityInput = $("input[name='cityInput']").val();

            var url = window.location.pathname.split('/');
            $.ajax({
                url: window.location.protocol + "//" +
                    window.location.hostname + "/" + url[1] + "/User/register/",
                method: "POST",
                data: {
                    emailInput: emailInput,
                    passwordInput1: passwordInput1,
                    passwordInput2: passwordInput2,
                    firstNameInput: firstNameInput,
                    lastNameInput: lastNameInput,
                    birthdayInput: birthdayInput,
                    phoneInput: phoneInput,
                    addressInput: addressInput,
                    cityInput: cityInput
                },
                success: function(data) {
                    if (data == "success") {
                        $("#signup-box").find(':input').each(function() {
                            $(this).val('');
                        });
                        hideSignupBox();
                        refreshMess(data);
                    } else if (data == "unmatchedpass" || data == "emailexist") {
                        refreshMess(data);
                    }
                }
            });
        }
    </script>
</body>

</html>