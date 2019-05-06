<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PlanSubjectTeacher */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="plan-subject-teacher-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'teacher_id')->textInput() ?>

    <?= $form->field($model, 'subject_id')->textInput() ?>

    <?= $form->field($model, 'subject_type_id')->textInput() ?>

    <?= $form->field($model, 'term_id')->textInput() ?>

    <?= $form->field($model, 'potok_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
