<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\marketing\models\MonthsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Months';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="months-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Months', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_cat',
            'month',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
