<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SubjectDirection */

$this->title = Yii::t('app', 'Create Subject Direction');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Subject Directions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subject-direction-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
