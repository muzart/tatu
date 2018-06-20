<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\dormitory\models\Payments */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="payments-form">
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'month')->widget(kartik\date\DatePicker::classname(), [
        'options' => ['placeholder' => 'Sanani tanlang'],
        'convertFormat' => true,
        'pluginOptions' => [
            'pluginOptions' => [
                'format' => 'd-M-yyyy',
                'todayHighlight' => true
            ]
        ]
    ]); ?>
    <?= $form->field($model, 'year')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'payed')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'student_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
