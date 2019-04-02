<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\CurrentTermSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Current Terms');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="current-term-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
<!--        --><?php //echo Html::a(Yii::t('app', 'Create Current Term'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',

            [
                'label' => 'Hozirgi semestr',
                'attribute' => 'current_term_id',
                'value' => function ($model) {
                    return $model->currentTerm->name;
                },
                'filter' => \yii\helpers\ArrayHelper::map(\app\models\Term::find()->all(), 'id', 'name'),

            ],

            [
                'class' => 'yii\grid\ActionColumn',
                'header' => 'Amallar',
                'buttons' => [
                    'view' => function ($url, $model) {

                    },
                    'update' => function ($url, $model) {
                        return Html::a('<span class="w3-btn w3-teal">Yangilash</span>', $url, [
                            'title' => Yii::t('yii', 'Update'),
                        ]);
                    },
                    'delete' => function ($url, $model) {

                    },
                ],
                'options' => [
                    'style' => 'width: 250px',
                ]
            ],
        ],
    ]); ?>
</div>
