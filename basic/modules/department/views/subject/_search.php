<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\SubjectSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="subject-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'direction_id') ?>

    <?= $form->field($model, 'semester_id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'lecturer_id') ?>

    <?php // echo $form->field($model, 'practice_id') ?>

    <?php // echo $form->field($model, 'lab1_id') ?>

    <?php // echo $form->field($model, 'lab2_id') ?>

    <?php // echo $form->field($model, 'department_id') ?>

    <?php // echo $form->field($model, 'lecture_hour') ?>

    <?php // echo $form->field($model, 'practice_hour') ?>

    <?php // echo $form->field($model, 'lab_hour') ?>

    <?php // echo $form->field($model, 'seminar') ?>

    <?php // echo $form->field($model, 'independent_hour') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
