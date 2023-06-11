<?php if (!empty($data['order'])) :
    $i = 0; ?>
    <div class="table-responsive">
        <table class=" table table-hover align-middle">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Adress</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Status</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php foreach ($data['order'] as $order) : extract($order); ?>
                    <tr>
                        <td scope="row"><?= $order_id ?></td>
                        <td><?= $lastname ?> <?= $firstname ?></td>
                        <td><?= $address ?>, <?= $city ?></td>
                        <td><?= $phone ?></td>
                        <td><?= $email ?></td>

                        <?php switch ($status):
                            case '0': ?>

                                <td class="text-info" scope="col">NEW</th>

                                    <?php break; ?>

                                <?php
                            case '1': ?>

                                <td class="text-success" scope="col">APPROVED</th>

                                    <?php break; ?>

                            <?php endswitch; ?>

                                <td class="text-center utility">
                                    <div class="d-flex justify-content-center">
                                        <form action="<?= URLROOT ?>/Manage/viewOrderDetails/<?= $order_id ?>" method="POST">
                                            <button name="editEmployee" type="submit" class="btn btn-primary">Details</button>
                                        </form>
                                    </div>
                                </td>

                    </tr>
                <?php $i++;
                endforeach; ?>
            </tbody>
        </table>
    </div>
<?php endif; ?>

<div class="row mt-5">
    <div class="col text-center">
        <?php require_once APPROOT . '/views/includes/pagination.php'; ?>
    </div>
</div>