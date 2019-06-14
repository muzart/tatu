<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Absence */

$this->title = Yii::t('app', 'Create Absence');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Absences'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="absence-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
