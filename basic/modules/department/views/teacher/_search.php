<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\TeacherSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="teacher-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'fio') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'department_id') ?>

    <?= $form->field($model, 'img') ?>

    <?php // echo $form->field($model, 'post') ?>

    <?php // echo $form->field($model, 'type') ?>

    <?php // echo $form->field($model, 'birthday') ?>

    <?php // echo $form->field($model, 'birthplace') ?>

    <?php // echo $form->field($model, 'nationality') ?>

    <?php // echo $form->field($model, 'partiya') ?>

    <?php // echo $form->field($model, 'degree') ?>

    <?php // echo $form->field($model, 'ended') ?>

    <?php // echo $form->field($model, 'specialization') ?>

    <?php // echo $form->field($model, 'science_degree') ?>

    <?php // echo $form->field($model, 'science_title') ?>

    <?php // echo $form->field($model, 'foreign_langs') ?>

    <?php // echo $form->field($model, 'gov_awards') ?>

    <?php // echo $form->field($model, 'deputy') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
