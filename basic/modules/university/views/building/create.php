<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Building */

$this->title = Yii::t('app', 'Create Building');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Buildings'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="building-create">

    <fieldset>
        <legend><?= Html::encode($this->title) ?></legend>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
    </fieldset>
</div>
