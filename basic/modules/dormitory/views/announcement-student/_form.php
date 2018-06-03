<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\dormitory\models\AnnouncementStudent */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="announcement-student-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'announcement_id')->textInput() ?>

    <?= $form->field($model, 'student_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
