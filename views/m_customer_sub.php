<?php if (!empty($data['cus'])) :
    $i = 0; ?>
    <table class="table table-hover align-middle">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">First name</th>
                <th scope="col">Last name</th>
                <th scope="col">Phone</th>
                <th scope="col">Addresss</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody class="table-group-divider">

            <?php foreach ($data['cus'] as $cus) : extract($cus); ?>
                <tr>
                    <td scope="row"><?= $cus_id ?></td>
                    <td><?= $firstname ?></td>
                    <td><?= $lastname ?></td>
                    <td><?= $phone ?></td>
                    <td><?= $address ?>, <?= $city ?></td>
                    <td class="text-center utility">
                        <div class="d-flex justify-content-center">
                            <form action="<?= URLROOT ?>/Manage/showEdit/<?= $user_id ?>" method="POST">
                                <button name="editCustomer" type="submit" class="material-symbols-outlined edit border border-0 bg-white">edit</button>
                            </form>
                            <form action="<?= URLROOT ?>/Manage/deleteCustomer/<?= $user_id ?>" method="POST">
                                <button name="deleteCustomer" type="submit" class="material-symbols-outlined delete border border-0 bg-white">delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            <?php $i++;
            endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>
<div class="row mt-5">
    <div class="col text-center">
        <?php require_once APPROOT . '/views/includes/pagination.php'; ?>
    </div>
</div>