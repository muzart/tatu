<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\modules\marketing\models\ContractTwo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contract-two-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'month_id')->textInput() ?>

    <?= $form->field($model, 'sum')->textInput() ?>

    <?= $form->field($model, 'current_date')->widget(kartik\date\DatePicker::className(), [
        'name' => 'odisi',
        'options' => ['placeholder' => 'Select operating time ...'],
        'convertFormat' => true,
        'pluginOptions' => [
            'format' => 'd-M-y',
            'todayHighlight' => true]
    ]) ?>

    <?= $form->field($model, 'contract_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
