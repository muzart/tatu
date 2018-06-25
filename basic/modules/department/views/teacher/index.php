<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\search\TeacherSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Teachers');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="teacher-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Teacher'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            [
                'attribute' => 'img',
                'value' => function($model){
                        /* @var $model \app\models\Teacher */
                        return Html::img($model->getImageUrl(),['alt'=>$model->fio,'class'=>'img-circle','width'=>'70', 'height'=>'70']);
                    },
                'format' => 'raw'
            ],
            'fio:ntext',
//            'user_id',
            [
                'attribute' => 'department_id',
                'value' => function($model){
                        /* @var $model \app\models\Teacher */
                        return $model->department->name;
                    },
                'filter' => \yii\helpers\ArrayHelper::map(\app\models\Department::find()->asArray()->all(), 'id', 'name'),
            ],
            // 'post',
            // 'type',
            // 'birthday',
            // 'birthplace',
            // 'nationality',
            // 'partiya',
            // 'degree',
            // 'ended',
            // 'specialization',
            // 'science_degree',
            // 'science_title',
            // 'foreign_langs',
            // 'gov_awards:ntext',
            // 'deputy',

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
