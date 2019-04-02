<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CurrentTerm */

$this->title = Yii::t('app', 'Create Current Term');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Current Terms'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="current-term-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
