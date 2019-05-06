<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use kartik\select2\Select2;
use app\models\Subject;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\SubjectSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Subjects';
$this->title = Yii::t('app', 'Create Subject');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subject-index">

<!--   = Html::encode($this->title) -->
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Subject'), ['create'], ['class' => 'w3-btn w3-green']) ?>
        <?= Html::a(Yii::t('app', 'O\'quv rejasi'), ['education_plan'], ['class' => 'w3-btn w3-blue']) ?>
    </p>
    <?php Pjax::begin(); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //  'id',
            'name',
            [
                'attribute' => 'department_id',
                'value' => function ($model) {
                    return $model->department->name;
                },
                'filter' => \yii\helpers\ArrayHelper::map(\app\models\Department::find()->asArray()->all(), 'id', 'name'),
            ],

            [
                'class' => 'yii\grid\ActionColumn',
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

    <?php Pjax::end(); ?></div>
