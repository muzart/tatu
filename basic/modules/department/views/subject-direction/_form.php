<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SubjectDirection */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="subject-direction-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'subject_id')->textInput() ?>

    <?= $form->field($model, 'direction_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
