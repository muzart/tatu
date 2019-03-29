<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ScheduleItem */

//$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Schedule Items'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="schedule-item-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'w3-btn w3-teal']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'w3-btn w3-red',
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
            ['label' => 'Juftlik', 'value' => $model->pair . '-juftlik'],
            ['label' => 'Hafta turi', 'value' => function ($model) {
                if ($model->week_type == 'odd') {
                    return 'Toq hafta';
                } elseif ($model->week_type == 'even') {
                    return 'Juft hafta';
                } else {
                    return 'To\'liq hafta';}
            }

            ],

            ['label' => 'Semestr', 'value' => $model->term->name],

        ],
    ]) ?>

</div>
