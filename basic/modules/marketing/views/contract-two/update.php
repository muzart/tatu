<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\marketing\models\ContractTwo */

$this->title = 'Update Contract Two: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Contract Twos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="contract-two-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
