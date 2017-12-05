<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\StudentSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="student-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'reyting_no') ?>

    <?= $form->field($model, 'direction_id') ?>

    <?= $form->field($model, 'surname') ?>

    <?= $form->field($model, 'name') ?>

    <?php // echo $form->field($model, 'patronymic') ?>

    <?php // echo $form->field($model, 'birthday') ?>

    <?php // echo $form->field($model, 'birthplace') ?>

    <?php // echo $form->field($model, 'education') ?>

    <?php // echo $form->field($model, 'workplace') ?>

    <?php // echo $form->field($model, 'father_name') ?>

    <?php // echo $form->field($model, 'father_workplace') ?>

    <?php // echo $form->field($model, 'father_phone') ?>

    <?php // echo $form->field($model, 'mother_name') ?>

    <?php // echo $form->field($model, 'mother_workplace') ?>

    <?php // echo $form->field($model, 'mother_phone') ?>

    <?php // echo $form->field($model, 'family_status') ?>

    <?php // echo $form->field($model, 'passport_serie') ?>

    <?php // echo $form->field($model, 'passport_number') ?>

    <?php // echo $form->field($model, 'passport_given') ?>

    <?php // echo $form->field($model, 'parents_address') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'living_type') ?>

    <?php // echo $form->field($model, 'created') ?>

    <?php // echo $form->field($model, 'updated') ?>

    <?php // echo $form->field($model, 'nationality') ?>

    <?php // echo $form->field($model, 'photo') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
