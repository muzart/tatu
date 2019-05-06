<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PotokGroup */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="potok-group-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'potok_id')->textInput() ?>

    <?= $form->field($model, 'group_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
