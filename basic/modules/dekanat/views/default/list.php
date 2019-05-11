<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\modules\dekanat\models\AnnouncementsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Announcements');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="announcements-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>



    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],


            'user_id',
            'start_date',
            'tittle',
            'body:ntext',
            //'end_date',
            //'status',

            [
                'class' => 'yii\grid\ActionColumn',
                'header' => 'Amallar',
                'buttons' => [
                    'view' => function ($url, $model) {
                        return Html::a('<span class="w3-btn w3-green">Ko\'rish</span>', $url, [
                            'title' => Yii::t('yii', 'Create'),
                        ]);
                    },
                    'update' => function ($url, $model) {
                        return Html::a('<span class="hidden">Yangilash</span>', $url, [
                            'title' => Yii::t('yii', 'Update'),
                        ]);
                    },
                    'delete' => function ($url, $model) {
                        return Html::a('<span class="hide"><i class="glyphicon glyphicon-trash"></i></span>', $url, [
                            'title' => Yii::t('yii', 'Delete'),
                            'data' => [
                                'confirm' => 'Are you sure you want to delete this item?',
                                'method' => 'post',
                            ],
                        ]);
                    },
                ],
                'options' => [
                    'style' => 'width: 100px',
                ]
            ],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
