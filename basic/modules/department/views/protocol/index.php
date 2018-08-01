<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProtocolSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Protocols';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="protocol-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Protocol', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //  'id',
            'participants:ntext',
            [
                'attribute' => 'department_id',
                'value' => function ($model) {
                    return $model->department->name;
                },
                'filter' => \yii\helpers\ArrayHelper::map(\app\models\Department::find()->asArray()->all(), 'id', 'name'),
            ],
           // 'department_id',
            'schedule:ntext',
            'statement:ntext',
            // 'decision:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?></div>
