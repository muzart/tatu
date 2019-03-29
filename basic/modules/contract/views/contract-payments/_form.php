<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\contract\models\ContractPayments */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contract-payments-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'student_id')->dropDownList(\yii\helpers\ArrayHelper::map(
        \app\models\Student::find()->all(), 'id', 'name'
    ), ['prompt' => ' - Talabani tanlang - ']) ?>

 <?= $form->field($model, 'group_id')->dropDownList(\yii\helpers\ArrayHelper::map(
        \app\models\Groups::find()->all(), 'id', 'name'
    ), ['prompt' => ' - Guruhni tanlang - ']) ?>

    <?= $form->field($model, 'term_id')->dropDownList(\yii\helpers\ArrayHelper::map(
            \app\models\Term::find()->all(),'id','name'
    ),['prompt'=>'Semestrni tanlang']) ?>

    <?= $form->field($model, 'payment_date')->widget(kartik\date\DatePicker::className(), ['name' => 'odisi',
        'options' => ['placeholder' => 'Select operating time ...'],
        'convertFormat' => true,
        'pluginOptions' => ['format' => 'd-m-Y',
            'todayHighlight' => true]]) ?>

    <?= $form->field($model, 'payment_amount')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
