<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\dormitory\models\TtjRoom */

$this->title = 'Update Ttj Room: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Ttj Rooms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ttj-room-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
