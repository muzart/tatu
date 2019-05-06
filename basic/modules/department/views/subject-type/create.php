<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SubjectType */

$this->title = Yii::t('app', 'Create Subject Type');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Subject Types'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subject-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
