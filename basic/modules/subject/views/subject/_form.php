<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


/* @var $this yii\web\View */
/* @var $model app\models\Subject */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="subject-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'direction_id')->dropDownList(
        \yii\helpers\ArrayHelper::map(\app\models\Direction::find()->all(),'id','name'),['prompt'=>'- Yo`nalishni tanlang -'])  ?>

    <?= $form->field($model, 'semester_id')->dropDownList(
        \yii\helpers\ArrayHelper::map(\app\models\Term::find()->all(),'id','name'),['prompt'=>'- Semesterni tanlang -']) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lecturer_id')->dropDownList(
            \yii\helpers\ArrayHelper::map(\app\models\Teacher::find()->all(),'id','name'),['prompt'=>'- O`qituvchini tanlang -']) ?>

    <?= $form->field($model, 'practice_id')->dropDownList(
        \yii\helpers\ArrayHelper::map(\app\models\Teacher::find()->all(),'id','name'),['prompt'=>'- O`qituvchini tanlang -']) ?>

    <?= $form->field($model, 'lab1_id')->dropDownList(
        \yii\helpers\ArrayHelper::map(\app\models\Teacher::find()->all(),'id','name'),['prompt'=>'- O`qituvchini tanlang -']) ?>

    <?= $form->field($model, 'lab2_id')->dropDownList(
        \yii\helpers\ArrayHelper::map(\app\models\Teacher::find()->all(),'id','name'),['prompt'=>'- O`qituvchini tanlang -']) ?>

    <?= $form->field($model, 'department_id')->dropDownList(
        \yii\helpers\ArrayHelper::map(\app\models\Department::find()->all(),'id','name'),['prompt'=>'- Kafedrani tanlang -']) ?>

    <?= $form->field($model, 'lecture_hour')->textInput() ?>

    <?= $form->field($model, 'practice_hour')->textInput() ?>

    <?= $form->field($model, 'lab_hour')->textInput() ?>

    <?= $form->field($model, 'independent_hour')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
//
id, sub id, mash turi,tema,ajratilgan soat


