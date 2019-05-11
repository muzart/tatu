<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 12.03.2019
 * Time: 17:22
 */
?>
<div class="w3-container">


    <table class="w3-table-all w3-hoverable">
        <thead>
        <tr class="w3-light-grey">
            <th>Habar id</th>
            <th>Talaba(nomi,guruhi)</th>
            <th>Ariza turi</th>
            <th>Ariza</th>
            <th>Status</th>
        </tr>
        </thead>
        <tr>
            <td><?= $model->id ?></td>
            <td><?= \app\models\Student::findOne(['user_id' => $model->user_id])->surname . ' ' . \app\models\Student::findOne(['user_id' => $model->user_id])->name . ' (' . \app\models\Student::findOne(['user_id' => $model->user_id])->group->name . ')' ?></td>
            <td><?= $model->tittle ?></td>

            <td><?= $model->body ?></td>
            <td><?= $model->status ?></td>
        </tr>
    </table>
</div>
