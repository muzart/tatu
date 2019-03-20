<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ScheduleItem */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Schedule Items'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="schedule-item-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
                'label' => 'Fan', 'value' => $model->subject->name
            ],
            'subject_type',
            [
                'label' => 'O\'qituvchi', 'value' => $model->teacher->fio
            ],
            ['label' => 'Xona', 'value' => $model->room->name],

            ['label' => 'Guruh', 'value' => $model->group->name],
            'day',
            'pair',
            ['label' => 'Semestr', 'value' => $model->term->name],

        ],
    ]) ?>

</div>
