<?php


?>

<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title"><?=$subject->name?></h3>
        <h3 class="box-title"><?=$teacher->fio?></h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div class="absence-form">
            <?php $form = \yii\widgets\ActiveForm::begin(); ?>
            <table class="table table-bordered">

                <tbody>
                <tr>
                    <th style="width: 2%">#</th>
                    <th style="width: 11%;">Fio</th>
                    <?php
                    foreach ($dates as $item):?>
                        <th style="text-align: center"><?= $item ?></th>
                    <?php
                    endforeach;
                    ?>

                    <th style="width: 2%">T</th>
                </tr>

                <?php $i = 0;
                foreach ($students as $student):$i++ ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><?= $student->surname . ' ' . $student->name ?></td>
                        <?php foreach ($dates as $date):
                            $absence_by_date = \app\models\Absence::getAbsenceByDateSubjectType($date,$subject->id,$subject_type)
                        ?>
                        <td style="text-align: center"><?=(in_array($student->id,$absence_by_date))? "<span  style=' padding: 0.5vmax' class=\"label label-danger\">Y</span>" : "" ?></td>
                        <?php endforeach;?>
                        <td>
                            <?= $form->field($absence, 'student_id[]')->checkbox(['value' => $student->id]); ?>
                        </td>
                    </tr>

                <?php
                endforeach; ?>
                </tbody>
            </table>
            <div class="text-right">
                <?= \yii\helpers\Html::submitButton($absence->isNewRecord ? 'Yaratish' : 'Update', ['class' => $absence->isNewRecord ? 'w3-btn w3-green' : 'btn btn-primary']) ?>
            </div>
            <?php \yii\widgets\ActiveForm::end(); ?>

        </div>
    </div>

</div>


