<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\marketing\models\ContractSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contract-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'fio') ?>

    <?= $form->field($model, 'faculty_id') ?>

    <?= $form->field($model, 'group_id') ?>

    <?= $form->field($model, 'contract') ?>

    <?php // echo $form->field($model, 'full_paid') ?>

    <?php // echo $form->field($model, 'half_paid') ?>

    <?php // echo $form->field($model, 'total_rest') ?>

       <?php // echo $form->field($model, 'total_plan') ?>



    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
