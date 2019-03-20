<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\contract\models\ContractPayments */

$this->title = $model->student->surname;
echo $model->student->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Contract Payments'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contract-payments-view">


    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'w3-btn w3-teal']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'w3-btn w3-red',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                [
                    'label' => 'Talabaning ismi',
                    'value' => $model->student->name,
                ],
                [
                    'label' => 'Talabaning familiyasi',
                    'value' => $model->student->surname,
                ],
[
                    'label' => 'Semestr',
                    'value' => $model->term->name,
                ],
                [
                    'label' => 'Gruhi',
                    'value' => $model->student->group->name,
                ],
                [
                    'label' => 'Yo\'nalishi',
                    'value' => $model->student->direction->name,
                ],

                'payment_date',

                'payment_amount',
                [
                    'label' => 'Shu semestrda umumiy to\'langan summa',
                    'value' => $model->getSumma(),
                ],
                [
                    'label' => 'Yana qancha to\'lashi kerakligi shu semetr uchun',
                    'value' => $model->restMoney(),
                ],
                [
                    'label' => 'Semestr uchun to\'lanishi kerak bo\'lgan umumiy summa',
                    'value' => $model->getTotal(),
                ],

            ],


        ]
    ) ?>

    <?php
    //    $opshi = 0;
    //    if ($model->id) {
    //        $summ = \app\modules\contract\models\ContractPayments::findAll(['student_id' => $model->student_id, 'term_id' => $model->term_id]);
    //        foreach ($summ as $item) {
    //            $opshi += $item->payment_amount;
    //        }
    //        echo $opshi;
    //    }


    //      if($model->student->direction_id){
    //         $amout = \app\modules\contract\models\ContractAmounts::find()->where(['direction_id'=>$model->student->direction_id])->one()->total_amount;
    //          echo $amout;
    //      }


    ?>

</div>
