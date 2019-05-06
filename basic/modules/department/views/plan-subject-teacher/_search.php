<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\PlanSubjectTeacher */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="plan-subject-teacher-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'teacher_id') ?>

    <?= $form->field($model, 'subject_id') ?>

    <?= $form->field($model, 'subject_type_id') ?>

    <?= $form->field($model, 'term_id') ?>

    <?php // echo $form->field($model, 'potok_id') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
