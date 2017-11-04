<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Faculty */

$this->title = Yii::t('app', 'Create Faculty');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Faculties'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="faculty-create">

    <fieldset>
    <legend><?= Html::encode($this->title) ?></legend>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
    </fieldset>
</div>
