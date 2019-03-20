<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ScheduleItem */

$this->title = Yii::t('app', 'Create Schedule Item');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Schedule Items'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="schedule-item-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
