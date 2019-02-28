<?php
use app\modules\marketing\models\ContractPayment;
use yii\helpers\Html;
use kartik\grid\GridView;
use kartik\editable\Editable;
use yii\widgets\Pjax;
use yii\helpers\ArrayHelper;

$payment = ContractPayment::findOne(["id" => 1]);
/* @var $this yii\web\View */
/* @var $searchModel app\modules\marketing\models\ContractSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Contracts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contract-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <h1 style="text-align: center">Hozirgi shartnoma narhi :</h1>
    <h1
            style="text-align: center " class="alert-danger"><?= $payment->total_real ?></h1>
    <p>
        <?= Html::a(Yii::t('app', 'Create Contract'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'rowOptions' => function ($model) {

            if ($model->total_plan == \app\modules\marketing\models\ContractPayment::findOne(["id" => 1])->total_real or $model->total_plan > \app\modules\marketing\models\ContractPayment::findOne(["id" => 1])->total_real) {
                return ['class' => 'success'];
            } else {
                return ['class' => 'danger'];
            }
        },
        'pjax' => true,
        'export' => false,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'class' => 'kartik\grid\EditableColumn',
                'header' => 'FIO',
                'attribute' => 'fio',
                'value' => function ($model) {
                    return '' . $model->fio;
                }
            ],
            [
                'attribute' => 'faculty_id',
                'value' => function ($model) {
                    return $model->faculty->name;
                },
                'filter' => ArrayHelper::map(\app\models\Faculty::find()->all(), 'id', 'name'),
            ],
            [
                'attribute' => 'group_id',
                'value' => function ($model) {
                    return $model->group->name;
                },
                'filter' => ArrayHelper::map(\app\models\Groups::find()->all(), 'id', 'name'),
            ],
            'contract',
            'full_paid',
            'half_paid',
            'total_rest',
            'total_plan',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

