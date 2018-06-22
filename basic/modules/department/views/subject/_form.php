<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


/* @var $this yii\web\View */
/* @var $model app\models\Subject */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="subject-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'direction_id')->dropDownList(
                \yii\helpers\ArrayHelper::map(\app\models\Direction::find()->all(), 'id', 'name'), ['prompt' => '- Yo`nalishni tanlang -']) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'semester_id')->dropDownList(
                \yii\helpers\ArrayHelper::map(\app\models\Term::find()->all(), 'id', 'name'), ['prompt' => '- Semesterni tanlang -']) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'lecturer_id')->dropDownList(
                \yii\helpers\ArrayHelper::map(\app\models\Teacher::find()->all(), 'id', 'fio'), ['prompt' => '- O`qituvchini tanlang -']) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'practice_id')->dropDownList(
                \yii\helpers\ArrayHelper::map(\app\models\Teacher::find()->all(), 'id', 'fio'), ['prompt' => '- O`qituvchini tanlang -']) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'lab1_id')->dropDownList(
                \yii\helpers\ArrayHelper::map(\app\models\Teacher::find()->all(), 'id', 'fio'), ['prompt' => '- O`qituvchini tanlang -']) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'lab2_id')->dropDownList(
                \yii\helpers\ArrayHelper::map(\app\models\Teacher::find()->all(), 'id', 'fio'), ['prompt' => '- O`qituvchini tanlang -']) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'department_id')->dropDownList(
                \yii\helpers\ArrayHelper::map(\app\models\Department::find()->all(), 'id', 'name'), ['prompt' => '- Kafedrani tanlang -']) ?>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <?= $form->field($model, 'lecture_hour')->textInput() ?>
    </div>
    <div class="col-md-6">
        <?= $form->field($model, 'practice_hour')->textInput() ?>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <?= $form->field($model, 'lab_hour')->textInput() ?>
        <?= $form->field($model, 'seminar')->textInput() ?>
    </div>
    <div class="col-md-6">
        <?= $form->field($model, 'independent_hour')->textInput() ?>
    </div>
</div>

<div class="row">
<div class="w3-center">
    <div class="col-md-3">
        <?= $form->field($model, 's1')->textInput(['type'=>'number']) ?>
    </div>
    <div class="col-md-3">
        <?= $form->field($model, 's2')->textInput(['type'=>'number']) ?>
    </div>
    <div class="col-md-3">
        <?= $form->field($model, 's3')->textInput(['type'=>'number']) ?>
    </div>
    <div class="col-md-3">
        <?= $form->field($model, 's4')->textInput(['type'=>'number']) ?>
    </div>
    <div class="row"></div>
    <div class="col-md-3">
        <?= $form->field($model, 's5')->textInput(['type'=>'number']) ?>
    </div>
    <div class="col-md-3">
        <?= $form->field($model, 's6')->textInput(['type'=>'number']) ?>
    </div>
    <div class="col-md-3">
        <?= $form->field($model, 's7')->textInput(['type'=>'number']) ?>
    </div>
    <div class="col-md-3">
        <?= $form->field($model, 's8')->textInput(['type'=>'number']) ?>
    </div>
</div>
</div>

<div class="form-group">
    <?= Html::submitButton($model->isNewRecord ? 'Yaratish' : 'Tahrirlash', ['class' => $model->isNewRecord ? 'w3-btn w3-green' : 'w3-btn w3-teal']) ?>
</div>

<?php ActiveForm::end(); ?>

</div>
