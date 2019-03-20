<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ScheduleItem */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="schedule-item-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'subject_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Subject::find()->all(), 'id', 'name'), ['prompt' => '- Tanlash -']) ?>

    <?= $form->field($model, 'subject_type')->dropDownList(['ma\'ruza' => 'Ma\'ruza', 'amaliyot' => 'Amaliyot', 'tajriba' => 'Tajriba', 'seminar' => 'Seminar',], ['prompt' => '-Tanlash-']) ?>

    <?= $form->field($model, 'teacher_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Teacher::find()->all(), 'id', 'fio'), ['prompt' => '- Tanlash -']) ?>

    <?= $form->field($model, 'room_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Room::find()->all(), 'id', 'name'), ['prompt' => '- Tanlash -']) ?>

    <?= $form->field($model, 'group_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Groups::find()->all(), 'id', 'name'), ['prompt' => '- Tanlash -']) ?>

    <?= $form->field($model, 'day')->dropDownList(['1-kun' => '1-kun', '2-kun' => '2-kun', '3-kun' => '3-kun', '4-kun' => '4-kun', '5-kun' => '5-kun', '6-kun' => '6-kun',], ['prompt' => '-Tanlash-']) ?>

    <?= $form->field($model, 'pair')->dropDownList(['1-pair' => '1-juftlik', '2-pair' => '2-juftlik', '3-pair' => '3-juftlik','4-pair' => '4-juftlik','5-pair' => '5-juftlik','6-pair' => '6-juftlik'], ['prompt' => '-Tanlash-']) ?>

    <?= $form->field($model, 'term_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Term::find()->all(), 'id', 'name'), ['prompt' => '- Tanlash -']) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
