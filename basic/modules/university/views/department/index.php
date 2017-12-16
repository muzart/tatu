<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\search\DepartmentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Departments');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="department-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Department'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            [
                'attribute' => 'building_id',
                'value' => function($model){
                        return $model->building->name;
                    },
                'filter' => \yii\helpers\ArrayHelper::map(\app\models\Building::find()->all(),'id','name')
            ],
            [
                'attribute' => 'faculty_id',
                'value' => function($model){
                      return  $model->faculty->name;
                    },
                'filter' => \yii\helpers\ArrayHelper::map(\app\models\Faculty::find()->all(),'id','name')
            ],
            [
                'attribute' => 'room_id',
                'value' => function($model){
                        return $model->room->name;
                    },
                'filter' => \yii\helpers\ArrayHelper::map(\app\models\Room::find()->all(),'id','name')
            ],

            [
                'class' => 'yii\grid\ActionColumn',
                'buttons'=>[
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
<?php Pjax::end(); ?></div>
