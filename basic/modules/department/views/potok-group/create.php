<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PotokGroup */

$this->title = Yii::t('app', 'Create Potok Group');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Potok Groups'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="potok-group-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
