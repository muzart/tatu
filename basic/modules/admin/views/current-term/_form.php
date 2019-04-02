<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CurrentTerm */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="current-term-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'current_term_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Term::find()->all(),'id','name')) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
