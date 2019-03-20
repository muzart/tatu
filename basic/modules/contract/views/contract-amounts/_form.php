<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\contract\models\ContractAmounts */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contract-amounts-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'total_amount')->textInput() ?>

    <?= $form->field($model, 'term_id')->textInput() ?>

    <?= $form->field($model, 'direction_id')->textInput() ?>

    <?= $form->field($model, 'deadline')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
