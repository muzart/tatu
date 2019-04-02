<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Events */

$this->title = Yii::t('app', 'Update Events: ' . $model->event_id, [
    'nameAttribute' => '' . $model->event_id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Events'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->event_id, 'url' => ['view', 'id' => $model->event_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="events-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
