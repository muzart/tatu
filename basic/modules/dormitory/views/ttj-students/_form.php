<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\modules\dormitory\models\TtjStudents */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ttj-students-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'term_id')->textInput() ?>

    <?= $form->field($model, 'room_id')->textInput() ?>

    <?= $form->field($model, 'section_id')->textInput() ?>

    <?= $form->field($model, 'student_id')->widget(Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Student::find()->all(), 'id', 'name'),
        'language' => 'en',
        'options' => ['placeholder' => 'Talabani tanlang'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'inside')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
