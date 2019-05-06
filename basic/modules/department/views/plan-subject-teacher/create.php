<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PlanSubjectTeacher */

$this->title = Yii::t('app', 'Create Plan Subject Teacher');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Plan Subject Teachers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="plan-subject-teacher-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
