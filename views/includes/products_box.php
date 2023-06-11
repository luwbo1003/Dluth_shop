<?php
if (!empty($data['prod'])) :
    foreach ($data['prod'] as $prod) : extract($prod); ?>
        <div class="col-sm-12 col-md-6 col-lg-4 d-flex">
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
                    <p class="bottom-area d-flex justify-content-center px-3">
                        <button class="btn btn-submit py-2 mr-1" type="submit" value="addToCart" name="addToCart"><span>Add to cart <i class="ion-ios-add ml-1"></i></span></button>
                        <button class="btn btn-all py-2" type="submit" value="buyNow" name="buyNow">Buy now<span><i class="ion-ios-cart ml-1"></i></span></button>
                    </p>
                </div>
            </form>
        </div>
<?php
    endforeach;
endif; ?>