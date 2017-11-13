<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Groups */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="groups-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'group_head_id')->dropDownList(
        \yii\helpers\ArrayHelper::map(\app\models\Teacher::find()->all(),'id','fio'),
        ['prompt' => '- O\'qituvchini tanlang -']
    ) ?>

    <?= $form->field($model, 'direction_id')->dropDownList(
        \yii\helpers\ArrayHelper::map(\app\models\Direction::find()->all(),'id','name'),
        ['prompt' => '- Yo\'nalishni tanlang -']
    )  ?>

    <?= $form->field($model, 'course')->dropDownList(
        ['1'=>'1-kurs','2'=>'2-kurs','3'=>'3-kurs','4'=>'4-kurs',],
        ['prompt' => '- Kursni tanlang -']
    ) ?>

    <?= $form->field($model, 'faculty_id')->dropDownList(
        \yii\helpers\ArrayHelper::map(\app\models\Faculty::find()->all(),'id','name'),
        ['prompt' => '- Fakultetni tanlang -']
    )  ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
