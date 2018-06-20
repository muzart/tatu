<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\dormitory\models\StudentMistakes */

$this->title = 'Create Student Mistakes';
$this->params['breadcrumbs'][] = ['label' => 'Student Mistakes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-mistakes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
