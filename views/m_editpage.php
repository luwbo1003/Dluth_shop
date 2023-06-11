<!DOCTYPE html>
<html lang="en">

<?php
require_once APPROOT . '/views/includes/head.php';
?>
<link rel="stylesheet" href="<?= CSSFILE ?>/m_product.css">

<body>
    <div class="container-fluid p-0">
        <!-- Sidebar -->
        <?php
        require_once APPROOT . '/views/includes/m_bar.php';
        ?>

        <!-- edit employee -->
        <?php if (!empty($data['emp'])) : ?>
            <!-- Main content -->
            <div id="main-content" style="min-height: 100vh; margin-left: 340px; right: 0; bottom: 0; left: 0;">
                <!-- Title -->
                <section class="container-fluid shadow-sm">
                    <div class="row p-4">
                        <!-- title -->
                        <div class="col-12 col-lg-6 d-flex align-items-center justify-content-center justify-content-lg-start pb-4 pb-lg-0">
                            <a> <span class="material-symbols-outlined align-middle me-3" id="menu-btn" style="font-size: 40px;"> menu
                                </span> </a>
                            <span class="fw-semibold fs-3">Employee Management</span>
                        </div>
                    </div>
                </section>

                <div class="container-fluid">
                    <?php foreach ($data['emp'] as $emp) : extract($emp); ?>

                        <!-- Employee -->
                        <div class="pt-5 row">
                            <form action="<?= URLROOT ?>/Manage/editProfile" method="POST" class="col-12 col-md-6">
                                <div class="px-3 pb-5 pb-md-0">
                                    <input type="hidden" name="user_id" value="<?= $user_id ?>">
                                    <!-- Name -->
                                    <div class="row mb-4">
                                        <div class="col">
                                            <label class="form-label">First Name</label>
                                            <input type="text" class="form-control" name="firstNameInput" value="<?= $firstname ?>" placeholder="First Name" required>
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Last Name</label>
                                            <input type="text" class="form-control" name="lastNameInput" value="<?= $lastname ?>" placeholder="Last Name" required>
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">Phone</label>
                                            <input type="text" class="form-control" name="phone" value="<?= $phone ?>" placeholder="Phone" required>
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">Address</label>
                                            <input type="text" class="form-control" name="address" value="<?= $address ?>" placeholder="Address" required>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Email address</label>
                                        <input type="email" class="form-control" name="emailInput" value="<?= $email ?>" placeholder="name@example.com" required>
                                    </div>
                                    <div class="pt-3 d-flex gap-3 align-self-center justify-content-center">
                                        <button type="submit" name="editProfile" value="edit" class="btn btn-primary">Edit Profile</button>
                                        <button type="submit" name="editProfile" value="cancel" class="btn btn-outline-primary">Cancel</button>
                                    </div>
                                </div>
                            </form>
                            <form action="<?= URLROOT ?>/Manage/editAccount" method="POST" class="col-12 col-md-6">
                                <div class="px-3 pb-3 pb-md-0">
                                    <input type="hidden" name="user_id" value="<?= $user_id ?>">
                                    <div class="mb-4">
                                        <label class="form-label">New Password</label>
                                        <input type="password" class="form-control" name="passwordInput1" placeholder="Password" required>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Confirm New Password</label>
                                        <input type="password" class="form-control" name="passwordInput2" placeholder="Password" required>
                                    </div>
                                    <div class="pt-3 d-flex gap-3 align-self-center justify-content-center">
                                        <button type="submit" name="editAccount" value="edit" class="btn btn-primary">Edit Account</button>
                                        <button type="submit" name="editAccount" value="cancel" class="btn btn-outline-primary">Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>

        <!-- edit product -->
        <?php if (!empty($data['prod'])) : ?>
            <div id="main-content" style="min-height: 100vh; margin-left: 340px; right: 0; bottom: 0; left: 0;">
                <!-- Title -->
                <section class="container-fluid shadow-sm">
                    <div class="row p-4">
                        <!-- title -->
                        <div class="col-12 col-lg-6 d-flex align-items-center justify-content-center justify-content-lg-start pb-4 pb-lg-0">
                            <a> <span class="material-symbols-outlined align-middle me-3" id="menu-btn" style="font-size: 40px;"> menu
                                </span> </a>
                            <span class="fw-semibold fs-3">Product Management</span>
                        </div>
                    </div>
                </section>

                <div class="container-fluid">
                    <?php foreach ($data['prod'] as $prod) : extract($prod); ?>

                        <form action="<?= URLROOT ?>/Manage/editProduct" method="POST" class="pt-5">
                            <div class=" row py-2 py-md-4 px-3 px-md-4">
                                <div class=" col-12 col-lg-6">
                                    <div class="px-3">
                                        <input type="hidden" name="pro_id" value="<?= $prod_id ?>">
                                        <!-- name product -->
                                        <div class="mb-3">
                                            <label for="name_product" class="form-label">Product name</label>
                                            <input type="text" class="form-control" name="pro_name" id="name_product" placeholder="Enter name of product" value="<?= $prod_name ?>" required>
                                        </div>
                                        <div class="row mb-3 mb-lg-0">
                                            <!-- Category -->
                                            <div class="col">
                                                <label class="form-label">Category</label>
                                                <select class="form-select" name="category" aria-label="Default select example" required>
                                                    <?php foreach ($data['category_list'] as $cate) : extract($cate); ?>
                                                        <option value="<?= $cate_id ?>"><?= $cate_name ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                            <!-- Quantity -->
                                            <div class="col">
                                                <label for="quantity_product" class="form-label">Quantity</label>
                                                <input type="number" class="form-control" name="prod_quantity" id="quantity_product" value="<?= $prod_quantity ?>" min="0">
                                            </div>
                                        </div>

                                        <!-- Price product -->
                                        <label class="form-label">Price</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text">$</span>
                                            <input type="number" name="pro_price" value="<?= $prod_price ?>" class="form-control" min="0" aria-label="Amount (to the nearest dollar)" required>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-12 col-lg-6">
                                    <div class="px-3">
                                        <!-- Description -->
                                        <div class="mb-3">
                                            <label for="description" class="form-label">Description</label>
                                            <?php foreach ($data['des'] as $des) : extract($des); ?>
                                                <textarea class="form-control mb-3" name="size" rows="2" style="resize: none;" placeholder="Enter contents of size" required><?= $size ?></textarea>
                                                <textarea class="form-control mb-3" name="material" rows="2" style="resize: none;" placeholder="Enter contents of material" required><?= $material ?></textarea>
                                                <textarea class="form-control mb-3" name="detail 1" rows="2" style="resize: none;" placeholder="Enter contents of detail 1" required><?= $detail_1 ?></textarea>
                                                <textarea class="form-control mb-3" name="detail 2" rows="2" style="resize: none;" placeholder="Enter contents of detail 2" required><?= $detail_2 ?></textarea>
                                                <textarea class="form-control mb-3" name="origin" rows="2" style="resize: none;" placeholder="Enter contents of origin" required><?= $origin ?></textarea>

                                                <textarea class="form-control mb-3" name="maintenance" rows="2" style="resize: none;" placeholder="Enter contents of Maintenance" required><?= $maintance_des ?></textarea>
                                                <textarea class="form-control mb-3" name="brand" rows="1" style="resize: none;" placeholder="Enter contents of Brands" required><?= $brand_des ?></textarea>

                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="pt-2 d-flex gap-3 align-self-center">
                                    <button type="submit" name="editProduct" value="edit" class="btn btn-primary">Edit product</button>
                                    <button type="submit" name="editProduct" value="cancel" class="btn btn-outline-primary">Cancel</button>
                                </div>
                            </div>
                        </form>

                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>

        <!-- edit category -->
        <?php if (!empty($data['cate'])) : ?>
            <div id="main-content" style="min-height: 100vh; margin-left: 340px; right: 0; bottom: 0; left: 0;">
                <!-- Title -->
                <section class="container-fluid shadow-sm">
                    <div class="row p-4">
                        <!-- title -->
                        <div class="col-12 col-lg-6 d-flex align-items-center justify-content-center justify-content-lg-start pb-4 pb-lg-0">
                            <a> <span class="material-symbols-outlined align-middle me-3" id="menu-btn" style="font-size: 40px;"> menu
                                </span> </a>
                            <span class="fw-semibold fs-3">Category Management</span>
                        </div>
                    </div>
                </section>

                <div class="container-fluid">
                    <?php foreach ($data['cate'] as $cate) : extract($cate); ?>

                        <form action="<?= URLROOT ?>/Manage/editCategory" method="POST" class="pt-5">
                            <div class=" row py-2 py-md-4 px-3 px-md-4">
                                <input type="hidden" name="cate_id" value="<?= $cate_id ?>">
                                <div class=" col-12 col-lg-6">
                                    <div class="px-3">
                                        <div class="mb-3 mb-lg-0">
                                            <label for="cate_id" class="form-label">Category id</label>
                                            <input type="text" class="form-control p-2" value="<?= $cate_id ?>" name="category_id" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="px-3">
                                        <div class="">
                                            <label for="cate_name" class="form-label">Category name</label>
                                            <input type="text" class="form-control p-2" name="cate_name" value="<?= $cate_name ?>" placeholder="Enter category ..." required>
                                        </div>
                                    </div>
                                </div>
                                <div class="pt-3 d-flex gap-3 align-self-center justify-content-center">
                                    <button type="submit" name="editCategory" value="edit" class="btn btn-primary">Edit Category</button>
                                    <button type="submit" name="editCategory" value="cancel" class="btn btn-outline-primary">Cancel</button>
                                </div>
                            </div>
                        </form>

                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>

        <!-- edit customer -->
        <?php if (!empty($data['cus'])) : ?>
            <div id="main-content" style="min-height: 100vh; margin-left: 340px; right: 0; bottom: 0; left: 0;">
                <!-- Title -->
                <section class="container-fluid shadow-sm">
                    <div class="row p-4">
                        <!-- title -->
                        <div class="col-12 col-lg-6 d-flex align-items-center justify-content-center justify-content-lg-start pb-4 pb-lg-0">
                            <a> <span class="material-symbols-outlined align-middle me-3" id="menu-btn" style="font-size: 40px;"> menu
                                </span> </a>
                            <span class="fw-semibold fs-3">Customer Management</span>
                        </div>
                    </div>
                </section>

                <div class="container-fluid">
                    <?php foreach ($data['cus'] as $cus) : extract($cus); ?>

                        <form action="<?= URLROOT ?>/Manage/editCustomer" method="POST" class="pt-5">
                            <div class=" row py-2 py-md-4 px-3 px-md-4">
                                <input type="hidden" name="user_id" value="<?= $user_id ?>">
                                <div class=" col-12 col-lg-6">
                                    <div class="px-3">
                                        <div class="mb-3 row">
                                            <div class="col-6">
                                                <label class="form-label">First Name</label>
                                                <input type="text" class="form-control" name="firstNameInput" placeholder="First Name" value="<?= $firstname ?>" required>
                                            </div>

                                            <div class="col-6">
                                                <label class="form-label">Last Name</label>
                                                <input type="text" class="form-control" name="lastNameInput" placeholder="Last Name" value="<?= $lastname ?>" required>
                                            </div>

                                            <div class="col-12">
                                                <label class="form-label">Phone</label>
                                                <input type="text" class="form-control" name="phone" placeholder="Phone" value="<?= $phone ?>" required>
                                            </div>

                                            <div class="col-12">
                                                <label class="form-label">Address</label>
                                                <input type="text" class="form-control" name="address" placeholder="Address" value="<?= $address ?>" required>
                                            </div>

                                            <div class="col-12">
                                                <label class="form-label">City</label>
                                                <input type="text" class="form-control" name="city" placeholder="City" value="<?= $city ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-lg-6">
                                    <div class="px-3">
                                        <div>
                                            <label class="form-label">Email address</label>
                                            <input type="email" class="form-control" name="emailInput" placeholder="example@gmail.com" value="<?= $email ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="pt-2 d-flex gap-3 align-self-center justify-content-center">
                                    <button type="submit" name="editCustomer" value="edit" class="btn btn-primary">Edit Customer</button>
                                    <button type="submit" name="editCustomer" value="cancel" class="btn btn-outline-primary">Cancel</button>
                                </div>
                            </div>
                        </form>

                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="<?= JSFILE ?>/m_bar.js"></script>

</html>