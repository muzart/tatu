<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\contract\models\ContractAmounts */

$this->title = 'Create Contract Amounts';
$this->params['breadcrumbs'][] = ['label' => 'Contract Amounts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contract-amounts-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
