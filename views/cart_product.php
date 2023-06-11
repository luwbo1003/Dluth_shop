    <?php if (isset($_SESSION['cart']) && sizeof($_SESSION['cart']) > 0) : ?>

        <section class="ftco-section ftco-cart">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="cart-list">
                            <table class="table">
                                <thead class="thead-primary">
                                    <tr class="text-center">
                                        <th>&nbsp;</th>
                                        <th>&nbsp;</th>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($_SESSION['cart'] as $prod) : extract($prod) ?>

                                        <tr class="text-center">
                                            <td class="product-remove"><a href="<?= URLROOT ?>/Cart/deleteProduct/<?= $prod_id ?>"><span class="ion-ios-close"></span></a></td>

                                            <td class="image-prod">
                                                <div class="img" style="background-image:url(<?= IMAGE ?>/<?= $img_link ?>);"></div>
                                            </td>

                                            <td class="product-name">
                                                <h3><?= $prod_name ?></h3>
                                            </td>

                                            <td class="price">$<?= number_format($prod_price, 2, '.', ',') ?></td>

                                            <td class="quantity">
                                                <div class="input-group mb-3">
                                                    <input type="number" name="quantity" class="quantity form-control input-number" onchange="updateProductCart(<?= $prod_id ?>, this.value)" value="<?= $prod_quantity_cart ?>" min="1" max="<?= $prod_quantity_max ?>">
                                                </div>
                                            </td>

                                            <td class="total">$<?= number_format($subtotal, 2, '.', ',') ?></td>
                                        </tr>
                                        <!-- END TR-->

                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-start">
                    <div class="col col-lg-5 col-md-6 mt-5 cart-wrap">
                        <div class="cart-total mb-3">
                            <h3>Cart Totals</h3>
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
                        <p class="text-center"><a href="<?= URLROOT ?>/Checkout" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p>
                    </div>
                </div>
            </div>
        </section>

    <?php else : ?>
    <?php endif; ?>