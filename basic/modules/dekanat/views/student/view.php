<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Student */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Students'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'reyting_no',
            'direction_id',
            'surname',
            'name',
            'patronymic',
            'birthday',
            'birthplace',
            'education',
            'workplace',
            'father_name',
            'father_workplace',
            'father_phone',
            'mother_name',
            'mother_workplace',
            'mother_phone',
            'family_status',
            'passport_serie',
            'passport_number',
            'passport_given',
            'parents_address',
            'address',
            'living_type',
            'created',
            'updated',
            'nationality',
            'photo',
            'user_id',
        ],
    ]) ?>

</div>
