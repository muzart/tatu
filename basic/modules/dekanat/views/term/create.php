<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Term */

$this->title = Yii::t('app', 'Create Term');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Terms'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="term-create w3-animate-zoom w3-card-24 w3-silver">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
