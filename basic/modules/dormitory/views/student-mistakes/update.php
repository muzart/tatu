<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\dormitory\models\StudentMistakes */

$this->title = 'Update Student Mistakes: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Student Mistakes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="student-mistakes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
