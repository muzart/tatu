<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\marketing\models\ContractTwo */

$this->title = 'Create Contract Two';
$this->params['breadcrumbs'][] = ['label' => 'Contract Twos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contract-two-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
