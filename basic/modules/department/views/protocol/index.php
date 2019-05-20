<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProtocolSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bayonnomalar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="protocol-index">

    <p>
        <?= Html::a('Yangi bayonnoma', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'participants:html',
            [
                'attribute' => 'department_id',
                'value' => function ($model) {
                    return $model->department->name;
                },
                'filter' => \yii\helpers\ArrayHelper::map(\app\models\Department::find()->asArray()->all(), 'id', 'name'),
            ],
            // 'department_id',
            'schedule:html',
            'statement:html',
            'decision:html',

            [
                'header' => 'Amallar',
                'class' => 'yii\grid\ActionColumn',
                'buttons' => [
                    'view' => function ($url, $model) {
                        return Html::a('<span class="w3-btn w3-green"><i class="fa fa-eye"></i> </span>', $url, [
                            'title' => Yii::t('yii', 'Create'),
                        ]);
                    },
                    'update' => function ($url, $model) {
                        return Html::a('<span class="w3-btn w3-teal"><i class="fa fa-pencil"></i></span>', $url, [
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
                    'style' => 'width: 200px',
                ]
            ],

        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>