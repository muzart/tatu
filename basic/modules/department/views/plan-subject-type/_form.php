<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PlanSubjectType */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="plan-subject-type-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'subject_id')->textInput() ?>

    <?= $form->field($model, 'subject_type_id')->textInput() ?>

    <?= $form->field($model, 'hour')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
