<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Potok */

$this->title = Yii::t('app', 'Create Potok');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Potoks'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="potok-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
