<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\modules\marketing\models\Contract */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contract-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'faculty_id')->dropDownList(
        ArrayHelper::map(\app\models\Faculty::find()->all(), 'id', 'name'), ['prompt' => '-Yo\'nalishni tanlang-']
    ) ?>

    <?= $form->field($model, 'group_id')->dropDownList(
        ArrayHelper::map(\app\models\Groups::find()->all(), 'id', 'name'), ['prompt' => '-Guruhni tanlang-']
    ) ?>

    <?= $form->field($model, 'contract')->textInput() ?>

    <?= $form->field($model, 'full_paid')->textInput() ?>

    <?= $form->field($model, 'half_paid')->textInput() ?>



    <?= $form->field($model, 'total_plan')->textInput() ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
