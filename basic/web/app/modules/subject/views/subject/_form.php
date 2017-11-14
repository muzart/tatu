<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Subject */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="subject-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'direction_id')->textInput() ?>

    <?= $form->field($model, 'semester_id')->textInput() ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lecturer_id')->textInput() ?>

    <?= $form->field($model, 'practice_id')->textInput() ?>

    <?= $form->field($model, 'lab1_id')->textInput() ?>

    <?= $form->field($model, 'lab2_id')->textInput() ?>

    <?= $form->field($model, 'department_id')->textInput() ?>

    <?= $form->field($model, 'lecture_hour')->textInput() ?>

    <?= $form->field($model, 'practice_hour')->textInput() ?>

    <?= $form->field($model, 'lab_hour')->textInput() ?>

    <?= $form->field($model, 'independent_hour')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
