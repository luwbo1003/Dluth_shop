<?php if (!empty($data['emp'])) :
    $i = 0; ?>
    <div class="table-responsive">
        <table class=" table table-hover align-middle">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Address</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody class="table-group-divider">

                <?php foreach ($data['emp'] as $emp) : extract($emp); ?>
                    <tr>
                        <td scope="row"><?= $staff_id ?></td>
                        <td><?= $lastname ?> <?= $firstname ?></td>
                        <td><?= $phone ?></td>
                        <td><?= $address ?></td>
                        <td class="text-center utility">
                            <div class="d-flex justify-content-center">
                                <form action="<?= URLROOT ?>/Manage/showEdit/<?= $user_id ?>" method="POST">
                                    <button name="editEmployee" type="submit" class="material-symbols-outlined edit border border-0 bg-white">edit</button>
                                </form>
                                <form action="<?= URLROOT ?>/Manage/deleteStaff/<?= $user_id ?>" method="POST">
                                    <button name="deleteStaff" type="submit" class="material-symbols-outlined delete border border-0 bg-white">delete</button>
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