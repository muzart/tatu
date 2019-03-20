<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\ScheduleItemSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Schedule Items');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="schedule-item-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Schedule Item'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'subject_id',
                'value' => function ($model) {
                    return $model->subject->name;
                },
                'filter' => \yii\helpers\ArrayHelper::map(\app\models\Subject::find()->asArray()->all(), 'id', 'name'),
            ],
            'subject_type',

           [ 'attribute' => 'teacher_id',
            'value' => function ($model) {
                return $model->teacher->fio;
            },
            'filter' => \yii\helpers\ArrayHelper::map(\app\models\Teacher::find()->asArray()->all(), 'id', 'fio'),
           ],

            [
                    'attribute' => 'room_id',
                'value' => function ($model){
        return $model->room->name;
                },
                'filter' => \yii\helpers\ArrayHelper::map(\app\models\Room::find()->asArray()->all(),'id','fio'),
            ],
            //'room_id',
            //'group_id',
            //'day',
            //'pair',
            //'term_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
