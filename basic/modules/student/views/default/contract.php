<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 12.03.2019
 * Time: 4:01
 */
/* @var  $model  app\modules\contract\models\ContractPayments */
/* @var $payment app\modules\student\controllers\DefaultController */
/* @var $amount app\modules\student\controllers\DefaultController */
/* @var $contract_amount app\modules\student\controllers\DefaultController */
?>
<table class="w3-table w3-bordered w3-striped w3-border test w3-hoverable">
    <tbody>
    <tr class="w3-red">
        <th>#</th>
        <th>Semestr</th>
        <th>To'lagan vaqti</th>
        <th>To'lagan summasi</th>
    </tr>
    </tbody>
    <?php $count = 0;
    foreach ($payment as $item) : ?>
        <tr>
            <td><?= ++$count ?></td>
            <td><?= $item->term->name ?></td>
            <td><?= $item->payment_date ?></td>
            <td><?= $item->payment_amount ?></td>
        </tr>
    <?php endforeach; ?>

</table>

<br>
<table class="w3-table w3-bordered w3-striped w3-border test w3-hoverable">
    <tbody>
    <tr class="w3-green">
        <th>#</th>
        <th>Semestr</th>
        <th>Yo'nalish</th>
        <th>Umumiy kontrakt summasi</th>
        <th>To'lashi kerak bo'lgan</th>
        <th>O'xirgi muddat</th>
    </tr>
    </tbody>
    <?php $count1 = 0;
    foreach ($contract_amount as $item) :?>
        <tr>
            <td><?= ++$count1 ?></td>
            <td><?= $item->term->name ?></td>
            <td><?= $item->direction->name ?></td>
            <td><?= $item->total_amount ?></td>
            <td>
                <?php
                $total = 0;
                foreach ($payment as $item1) {
                    if ($item->term->id == $item1->term->id) $total += $item1->payment_amount;
                };
                echo $item->total_amount - $total;
                ?>
            </td>
            <td><?= $item->deadline ?></td>
        </tr>

    <?php endforeach; ?>
    <?php foreach ($model as $item): ?>
        <?= '' ?>
    <?php endforeach; ?>
</table>