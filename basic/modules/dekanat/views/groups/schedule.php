<?php
/**
 * @var $schedule array
 * @var $scheduleItems \app\models\ScheduleItem[]
 */

use app\modules\dekanat\controllers\ScheduleItemController;

?>
<?= \yii\helpers\Html::button('Dars jadvali yaratish', ['value' => \yii\helpers\Url::to('schedule-item/create'), 'class' => 'w3-btn w3-black', 'id' => 'modalButton']) ?>
<h1 class="text-center">GURUH :<?=$group->group->name;

    ?></h1>
<div class="well">
<div class="row">
    <div class="col-md-4">
        <div class="box">
            <div class="box-header with-border text-center">
                <h3 class="box-title">Dushanba</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table class="table table-bordered">
                    <tbody>
                    <tr>
                        <th style="width: 1%">#</th>
                        <th>Fanlar</th>
                        <th>O'qituvchi</th>
                        <th style="width: 40px">Xona</th>
                        <th style="width: 40px">ochirish</th>
                    </tr>

                    <?php foreach ($schedule["1-kun"] as $item):?>
                        <tr>
                            <td style="width: 1%"><?= $item->pair ?></td>
                            <td><?= $item->subject->name . '' . ' (' . ScheduleItemController::findLessonType($item->subject_type) . ')' ?></td>
                            <td><?= $item->teacher->fio ?></td>
                            <td><?= $item->room->name ?></td>
                            <td><?= \yii\helpers\Html::Button(Yii::t('app', 'O\'chirish'), ['class' => 'btn btn-xs btn-danger','onclick'=>'delSchedule('.$item->id.')']) ?></td>
                        </tr>
                    <?php endforeach; ?>


                    </tbody>
                </table>
            </div>

        </div>
        <!-- /.box -->

    </div>
    <div class="col-md-4">
        <div class="box">
            <div class="box-header with-border text-center">
                <h3 class="box-title">Seshanba</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table class="table table-bordered">
                    <tbody>
                    <tr>
                        <th style="width: 1%">#</th>
                        <th>Fanlar</th>
                        <th>O'qituvchi</th>
                        <th style="width: 40px">Xona</th>
                    </tr>

                    <?php
                    foreach ($schedule["2-kun"] as $item):?>
                        <tr>
                            <td style="width: 1%"><?= $item->pair ?></td>
                            <td><?= $item->subject->name . '' . ' (' . ScheduleItemController::findLessonType($item->subject_type) . ')' ?></td>
                            <td><?= $item->teacher->fio ?></td>
                            <td><?= $item->room->name ?></td>
                        </tr>
                    <?php
                    endforeach;
                    ?>


                    </tbody>
                </table>
            </div>

        </div>
        <!-- /.box -->

    </div>
    <div class="col-md-4">
        <div class="box">
            <div class="box-header with-border text-center">
                <h3 class="box-title">Chorshanba</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table class="table table-bordered">
                    <tbody>
                    <tr>
                        <th style="width: 1%">#</th>
                        <th>Fanlar</th>
                        <th>O'qituvchi</th>
                        <th style="width: 40px">Xona</th>
                    </tr>

                    <?php
                    foreach ($schedule["3-kun"] as $item):?>
                        <tr>
                            <td style="width: 1%"><?= $item->pair ?></td>
                            <td><?= $item->subject->name . '' . ' (' . ScheduleItemController::findLessonType($item->subject_type) . ')' ?></td>
                            <td><?= $item->teacher->fio ?></td>
                            <td><?= $item->room->name ?></td>
                        </tr>
                    <?php
                    endforeach;
                    ?>


                    </tbody>
                </table>
            </div>

        </div>
        <!-- /.box -->

    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="box">
            <div class="box-header with-border text-center">
                <h3 class="box-title">Payshanba</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table class="table table-bordered">
                    <tbody>
                    <tr>
                        <th style="width: 1%">#</th>
                        <th>Fanlar</th>
                        <th>O'qituvchi</th>
                        <th style="width: 40px">Xona</th>
                    </tr>

                    <?php
                    foreach ($schedule["4-kun"] as $item):?>
                        <tr>
                            <td style="width: 1%"><?= $item->pair ?></td>
                            <td><?= $item->subject->name . '' . ' (' . ScheduleItemController::findLessonType($item->subject_type) . ')' ?></td>
                            <td><?= $item->teacher->fio ?></td>
                            <td><?= $item->room->name ?></td>
                        </tr>
                    <?php
                    endforeach;
                    ?>


                    </tbody>
                </table>
            </div>

        </div>
        <!-- /.box -->

    </div>
    <div class="col-md-4">
        <div class="box">
            <div class="box-header with-border text-center">
                <h3 class="box-title">Juma</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table class="table table-bordered">
                    <tbody>
                    <tr>
                        <th style="width: 1%">#</th>
                        <th>Fanlar</th>
                        <th>O'qituvchi</th>
                        <th style="width: 40px">Xona</th>
                    </tr>

                    <?php
                    foreach ($schedule["5-kun"] as $item):?>
                        <tr>
                            <td style="width: 1%"><?= $item->pair ?></td>
                            <td><?= $item->subject->name . '' . ' (' . ScheduleItemController::findLessonType($item->subject_type) . ')' ?></td>
                            <td><?= $item->teacher->fio ?></td>
                            <td><?= $item->room->name ?></td>
                        </tr>
                    <?php
                    endforeach;
                    ?>


                    </tbody>
                </table>
            </div>

        </div>
        <!-- /.box -->

    </div>
    <div class="col-md-4">
        <div class="box">
            <div class="box-header with-border text-center">
                <h3 class="box-title">Shanba</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table class="table table-bordered">
                    <tbody>
                    <tr>
                        <th style="width: 1%">#</th>
                        <th>Fanlar</th>
                        <th>O'qituvchi</th>
                        <th style="width: 40px">Xona</th>
                    </tr>

                    <?php
                    foreach ($schedule["3-kun"] as $item):?>
                        <tr>
                            <td style="width: 1%"><?= $item->pair ?></td>
                            <td><?= $item->subject->name . '' . ' (' . ScheduleItemController::findLessonType($item->subject_type) . ')' ?></td>
                            <td><?= $item->teacher->fio ?></td>
                            <td><?= $item->room->name ?></td>
                        </tr>
                    <?php
                    endforeach;
                    ?>


                    </tbody>
                </table>
            </div>

        </div>
        <!-- /.box -->

    </div>
</div>
    <?php
    \yii\bootstrap\Modal::begin([
        'header' => "<h4>Yangi Darslik qo'shish</h4>",
        'id' => 'modal',
        'size' => 'modal-lg',
    ]); ?>

    <div class="schedule-item-form">

        <?php $form = \yii\widgets\ActiveForm::begin(); ?>

        <?= $form->field($model2, 'subject_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Subject::find()->all(), 'id', 'name'), ['prompt' => '- Tanlash -']) ?>

        <?= $form->field($model2, 'subject_type')->dropDownList(['lecture' => 'Ma\'ruza', 'practice' => 'Amaliyot', 'labaratory' => 'Tajriba', 'seminar' => 'Seminar','discussion'=>'Munozara'], ['prompt' => '-Tanlash-']) ?>

        <?= $form->field($model2, 'teacher_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Teacher::find()->all(), 'id', 'fio'), ['prompt' => '- Tanlash -']) ?>

        <?= $form->field($model2, 'room_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Room::find()->all(), 'id', 'name'), ['prompt' => '- Tanlash -']) ?>

        <?= $form->field($model2, 'group_id')->hiddenInput(['value'=>$group->group->id]) ?>

        <?= $form->field($model2, 'day')->dropDownList(['1-kun' => '1-kun', '2-kun' => '2-kun', '3-kun' => '3-kun', '4-kun' => '4-kun', '5-kun' => '5-kun', '6-kun' => '6-kun',], ['prompt' => '-Tanlash-']) ?>

        <?= $form->field($model2, 'pair')->dropDownList(['1' => '1-juftlik', '2' => '2-juftlik', '3' => '3-juftlik', '4' => '4-juftlik', '5' => '5-juftlik', '6' => '6-juftlik'], ['prompt' => '-Tanlash-']) ?>

        <?= $form->field($model2, 'week_type')->dropDownList(['full' => 'T\'liq', 'odd' => 'Toq xafta', 'even' => 'Juft xafta'], ['prompt' => '-Tanlash-']) ?>

        <?= $form->field($model2, 'term_id')->hiddenInput(['value'=>\app\helpers\ScheduleHelper::getCurrentTerm()]) ?>

        <div class="form-group">
            <?= \yii\helpers\Html::submitButton(Yii::t('app', 'Save'), ['class' => 'w3-btn w3-green']) ?>
        </div>

        <?php \yii\widgets\ActiveForm::end(); ?>

    </div>

    <?php
    \yii\bootstrap\Modal::end();
    ?>
<script>
function delSchedule(id){
    if(confirm('O\'chirishni xohlaysizmi?')){
        document.location.href="/dekanat/schedule-item/delete?id="+id;
    }
}
</script>