<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\search\StudentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Students');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Student'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'reyting_no',
            'direction_id',
            'surname',
            'name',
            // 'patronymic',
            // 'birthday',
            // 'birthplace',
            // 'education',
            // 'workplace',
            // 'father_name',
            // 'father_workplace',
            // 'father_phone',
            // 'mother_name',
            // 'mother_workplace',
            // 'mother_phone',
            // 'family_status',
            // 'passport_serie',
            // 'passport_number',
            // 'passport_given',
            // 'parents_address',
            // 'address',
            // 'living_type',
            // 'created',
            // 'updated',
            // 'nationality',
            // 'photo',
            // 'user_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
