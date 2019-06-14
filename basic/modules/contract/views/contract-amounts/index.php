<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\contract\models\ContractAmountsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app','Contract Amounts');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contract-amounts-index">

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Umumiy shartnoma miqdorini qo\'shish', ['create'], ['class' => 'w3-btn w3-green']) ?>

    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'total_amount',
            [
                'attribute' => 'term_id',
                'value' => function ($model) {
                    return $model->term->name;
                },
                'filter' => \yii\helpers\ArrayHelper::map(\app\models\Term::find()->all(),'id','name'),

            ],


            [
                    'attribute' => 'direction_id',

                'value' => function($model)
                {
                    return $model->direction->name;
                },
                'filter' => \yii\helpers\ArrayHelper::map(\app\models\Direction::find()->all(),'id','name'),
            ],
            'deadline',

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
                        return Html::a('<span class="w3-btn w3-teal">Yangilash</span>', $url, [
                            'title' => Yii::t('yii', 'Update'),
                        ]);
                    },
                    'delete' => function ($url, $model) {
                        return Html::a('<span class="w3-btn w3-red"><i class="glyphicon glyphicon-trash"></i></span>', $url, [
                            'title' => Yii::t('yii', 'Delete'),
                            'data' => [
                                'confirm' => 'Are you sure you want to delete this item?',
                                'method' => 'post',
                            ],
                        ]);
                    },
                ],
                'options' => [
                    'style' => 'width: 250px',
                ]
            ],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
