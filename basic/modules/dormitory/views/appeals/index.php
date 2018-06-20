<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\modules\dormitory\models\AppealsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Appeals';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="appeals-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Appeals', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'term_id',
            'student_fio',
            'student_id',
            'region',
            // 'address',
            // 'phone',
            // 'date',
            // 'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
