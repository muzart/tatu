<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $model app\models\Materials */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="materials-form">


    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'subject_id')->dropDownList(\yii\helpers\ArrayHelper::map(
        \app\models\Subject::find()->all(),
        'id',
        'name'
    ), ['prompt' => ' - Fanni tanlang - ', 'disabled' => 'disabled']) ?>

    <?= $form->field($model, 'studies_kind')->dropDownList(['lecture' => 'Lecture', 'laboratory' => 'Laboratory', 'practice' => 'Practice',], ['prompt' => '']) ?>

    <?= $form->field($model, 'topic')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'planned_hour')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'file[]')->widget(FileInput::classname(), [
        'options' => ['multiple' => true],
        'pluginOptions' => ['previewFileType' => 'any']
    ]);
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
