<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Department */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="department-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'faculty_id')->dropDownList(
        \yii\helpers\ArrayHelper::map(\app\models\Faculty::find()->all(),'id','name'),['prompt' => '- Fakultetni tanlang -']) ?>

    <?= $form->field($model, 'building_id')->dropDownList(
        \yii\helpers\ArrayHelper::map(\app\models\Building::find()->all(),'id','name'),['prompt' => '- Binoni tanlang -']) ?>

    <?= $form->field($model, 'room_id')->dropDownList(
        \yii\helpers\ArrayHelper::map(\app\models\Room::find()->all(),'id','name'),['prompt' => '- Xonani tanlang -'])  ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
