<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Protocol */

$this->title = 'Create Protocol';
$this->params['breadcrumbs'][] = ['label' => 'Protocols', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="protocol-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
