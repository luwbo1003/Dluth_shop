<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="<?= URLROOT ?>/Home/index">y'luth</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="<?= URLROOT ?>/Home/index" class="nav-link">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= URLROOT ?>/Search">Shop</a></li>
                <li class="nav-item"><a href="<?= URLROOT ?>/Home/about" class="nav-link">About</a></li>
                <li class="nav-item"><a href="<?= URLROOT ?>/Home/contact" class="nav-link">Contact</a></li>
                <li class="nav-item cta cta-colored">
                    <?php if (!empty($_SESSION['cart'])) : ?>
                        <a href="<?= URLROOT ?>/Cart" class="nav-link"><span class="icon-shopping_cart"></span>[<?= sizeof($_SESSION['cart']) ?>]</a>
                    <?php else : ?>
                        <a href="<?= URLROOT ?>/Cart" class="nav-link"><span class="icon-shopping_cart"></span>[0]</a>
                    <?php endif; ?>
                </li>

                <?php if (!empty($_SESSION['user_id'])) : ?>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="<?= URLROOT ?>/User/login" id="dropdown04" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false"><span class="icon-person_outline"></span></a>
                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                            <?php if ($_SESSION['user_type'] == 1) : ?>

                                <a class="dropdown-item" href="<?= URLROOT ?>/User/profile">Profile</a>
                                <a class="dropdown-item" href="<?= URLROOT ?>/User/history">History</a>

                            <?php else : ?>

                                <a class="dropdown-item" href="<?= URLROOT ?>/User/profile">Administrator</a>

                            <?php endif; ?>
                            <a class="dropdown-item" href="<?= URLROOT ?>/User/logout">Log Out</a>
                        </div>
                    </li>

                <?php else : ?>

                    <li class="nav-item"><a href="<?= URLROOT ?>/User" class="nav-link"><span class="icon-person_outline"></span></a></li>

                <?php endif; ?>

            </ul>
        </div>
    </div>
</nav>