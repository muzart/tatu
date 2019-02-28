<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\marketing\models\Months */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="months-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_cat')->textInput() ?>

    <?= $form->field($model, 'month')->dropDownList([ 'Yanvar' => 'Yanvar', 'Fevral' => 'Fevral', 'Mart' => 'Mart', 'Aprel' => 'Aprel', 'May' => 'May', 'Iyun' => 'Iyun', 'Iyul' => 'Iyul', 'Avgust' => 'Avgust', 'Sentyabr' => 'Sentyabr', 'Oktyabr' => 'Oktyabr', 'Noyabr' => 'Noyabr', 'Dekabr' => 'Dekabr', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
