<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $model app\models\Teacher */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="teacher-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'department_id')->dropDownList(
        \yii\helpers\ArrayHelper::map(\app\models\Department::find()->all(), 'id', 'name'), ['prompt' => ' - Kafedrani tanlang - ']) ?>

    <?= (!$model->isNewRecord) ? Html::img('/uploads/departments/' . $model->department->name . '/' . $model->img, ['style' => 'max-widh:200px;']) : '' ?>

    <?= $form->field($model, 'img')->widget(kartik\file\FileInput::className(), [
        'options' => ['accept' => 'image/*'],
        'language' => 'ru',
    ]) ?>
    <?= $form->field($model, 'post')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type')->dropDownList(['asosiy' => 'Asosiy', 'ichki' => 'Ichki', 'tashqi' => 'Tashqi',], ['prompt' => '']) ?>

    <?= $form->field($model, 'birthday')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'birthplace')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nationality')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'partiya')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'degree')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ended')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'specialization')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'science_degree')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'science_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'foreign_langs')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gov_awards')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'deputy')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'started_work')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'w3-btn w3-green' : 'w3-btn w3-teal']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
