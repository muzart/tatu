<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\marketing\models\ContractPayment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contract-payment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'total_real')->textInput() ?>

    <?= $form->field($model, 'start_date')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
