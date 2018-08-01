<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProtocolSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="protocol-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'participants') ?>

    <?= $form->field($model, 'department_id') ?>

    <?= $form->field($model, 'schedule') ?>

    <?= $form->field($model, 'statement') ?>

    <?php // echo $form->field($model, 'decision') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
