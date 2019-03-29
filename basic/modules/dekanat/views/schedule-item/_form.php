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

    <?= $form->field($model, 'subject_type')->dropDownList(['lecture' => 'Ma\'ruza', 'practice' => 'Amaliyot', 'labaratory' => 'Tajriba', 'seminar' => 'Seminar','discussion'=>'Munozara'], ['prompt' => '-Tanlash-']) ?>

    <?= $form->field($model, 'teacher_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Teacher::find()->all(), 'id', 'fio'), ['prompt' => '- Tanlash -']) ?>

    <?= $form->field($model, 'room_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Room::find()->all(), 'id', 'name'), ['prompt' => '- Tanlash -']) ?>

    <?= $form->field($model, 'group_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Groups::find()->all(), 'id', 'name'), ['prompt' => '- Tanlash -']) ?>

    <?= $form->field($model, 'day')->dropDownList(['1-kun' => '1-kun', '2-kun' => '2-kun', '3-kun' => '3-kun', '4-kun' => '4-kun', '5-kun' => '5-kun', '6-kun' => '6-kun',], ['prompt' => '-Tanlash-']) ?>

    <?= $form->field($model, 'pair')->dropDownList(['1' => '1-juftlik', '2' => '2-juftlik', '3' => '3-juftlik', '4' => '4-juftlik', '5' => '5-juftlik', '6' => '6-juftlik'], ['prompt' => '-Tanlash-']) ?>

    <?= $form->field($model, 'week_type')->dropDownList(['full' => 'T\'liq', 'odd' => 'Toq xafta', 'even' => 'Juft xafta'], ['prompt' => '-Tanlash-']) ?>

    <?= $form->field($model, 'term_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Term::find()->all(), 'id', 'name'), ['prompt' => '- Tanlash -']) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'w3-btn w3-green']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
