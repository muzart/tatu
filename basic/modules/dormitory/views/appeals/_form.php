<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\dormitory\models\Appeals */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="appeals-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'term_id')->textInput() ?>

    <?= $form->field($model, 'student_fio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'student_id')->textInput() ?>

    <?= $form->field($model, 'region')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
