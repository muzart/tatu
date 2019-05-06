<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\search\PlanSubjectTeacher */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Plan Subject Teachers');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="plan-subject-teacher-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Plan Subject Teacher'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'teacher_id',
            'subject_id',
            'subject_type_id',
            'term_id',
            //'potok_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
