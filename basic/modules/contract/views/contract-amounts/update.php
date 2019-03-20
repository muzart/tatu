<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\contract\models\ContractAmounts */

$this->title = 'Update Contract Amounts: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Contract Amounts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="contract-amounts-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
