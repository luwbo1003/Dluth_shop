<div class="block-27">
    <!-- Pagination -->
    <ul>
        <!-- Previous button -->
        <?php if ($data['number'] == 1) :  ?>

            <li class=" disabled">
                <a style="cursor: pointer;">&lt;</a>
            </li>

        <?php else : ?>

            <li class="">
                <a style="cursor: pointer;" onclick="handleAjax(1)">&lt;</a>
            </li>

        <?php endif ?>

        <!-- Page number -->
        <?php
        if (!empty($data['page'])) : ?>

            <?php $number = $data['number'];
            if ($number == 1) : ?>

                <li class=" active">
                    <a style="cursor: pointer;" onclick="handleAjax(<?= $number ?>)"><?= $number ?></a>
                </li>

                <?php $number = $number + 1; ?>

                <li class="">
                    <a style="cursor: pointer;" onclick="handleAjax(<?= $number ?>)"><?= $number ?></a>
                </li>

            <?php else : ?>

                <?php $number = $number - 1; ?>

                <li class="">
                    <a style="cursor: pointer;" onclick="handleAjax(<?= $number ?>)"><?= $number ?></a>
                </li>

                <?php $number = $number + 1; ?>

                <li class=" active">
                    <a style="cursor: pointer;" onclick="handleAjax(<?= $number ?>)"><?= $number ?></a>
                </li>

            <?php endif; ?>

            <!-- Nếu số nút trang hiện nhiều hơn 5 -->
            <?php if ($data['page'] - $number > 3) : ?>

                <?php for ($i = $number + 1; $i <= $number + 1; $i++) : ?>

                    <li class="">
                        <a style="cursor: pointer;" onclick="handleAjax(<?= $i ?>)"><?= $i ?></a>
                    </li>

                <?php endfor; ?>

                <li class=" disabled">
                    <a style="cursor: pointer;">...</a>
                </li>

                <?php for ($i = $data['page'] - 1; $i <= $data['page']; $i++) : ?>

                    <li class="">
                        <a style="cursor: pointer;" onclick="handleAjax(<?= $i ?>)"><?= $i ?></a>
                    </li>

                <?php endfor; ?>

                <!-- Nếu số nút trang hiện ít hơn 5 -->
            <?php else : ?>

                <?php for ($i = $number + 1; $i <= $data['page']; $i++) : ?>

                    <li class="">
                        <a style="cursor: pointer;" onclick="handleAjax(<?= $i ?>)"><?= $i ?></a>
                    </li>

                <?php endfor; ?>

        <?php endif;
        endif; ?>


        <!-- Next button -->
        <?php if ($data['number'] == $data['page']) :  ?>

            <li class=" disabled">
                <a style="cursor: pointer;">&gt;</a>
            </li>

        <?php else : ?>

            <li class="">
                <a style="cursor: pointer;" onclick="handleAjax(<?= $data['page'] ?>)">&gt;</a>
            </li>

        <?php endif ?>
    </ul>
</div>