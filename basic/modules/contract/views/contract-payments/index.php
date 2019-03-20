<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\contract\models\ContractPaymentsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Contract Payments');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contract-payments-index">


    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <div class="contract-view">
        <?= Html::button(Yii::t('app', 'Create Contract Payments'), ['class' => 'w3-btn w3-green', 'id' => 'modalButton']) ?>
        <br><br>
    </div>

    <?= GridView::widget(
        [

            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                [
                    'attribute' => 'student_id',
                    'value' => function ($model) {
                        return $model->student->name;
                    },
                    'filter' => \yii\helpers\ArrayHelper::map(\app\models\Student::find()->all(), 'id', 'name'),
                ],
                [
                    'attribute' => 'term_id',
                    'value' => function ($model) {
                        return $model->term->name;
                    },
                    'filter' => \yii\helpers\ArrayHelper::map(\app\models\Term::find()->all(), 'id', 'name'),
                ],
                [
                    'attribute' => 'payment_date',
                    'format' => 'raw',
                    'filter' => \kartik\date\DatePicker::widget([
                        'model' => $searchModel,
                        'attribute' => 'payment_date',
                        'pluginOptions' => [
                            'format' => 'dd-mm-yyyy',
                            'todayHighlight' => true
                        ]
                    ]),
                    // 'format' => 'html',
                ],
//                'payment_date',
                'payment_amount',
                [
                    'label' => 'Guruh nomi',
                    'value' => function ($model) {
                        return $model->student->group->name;
                    },
                    'filter' => \yii\helpers\ArrayHelper::map(\app\models\Groups::find()->all(), 'id', 'name'),

                ],
                [
                    'class' => 'yii\grid\ActionColumn',
                    'header' => 'Amallar',
                    'buttons' => [
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
    <?php Pjax::end(); ?>
</div>
<?php
\yii\bootstrap\Modal::begin(['header' => "<h4>Summa qo'shish</h4>",
    'id' => 'modal',
    'size' => 'modal-lg',]); ?>
<div class="contract-payments-form">

    <?php $form = \yii\widgets\ActiveForm::begin(); ?>

    <?= $form->field($model1, 'student_id')->dropDownList(\yii\helpers\ArrayHelper::map(
        \app\models\Student::find()->all(), 'id', 'name'
    ), ['prompt' => ' - Talabani tanlang - ']) ?>

    <?= $form->field($model1, 'term_id')->dropDownList(\yii\helpers\ArrayHelper::map(
        \app\models\Term::find()->all(), 'id', 'name'
    ), ['prompt' => 'Semestrni tanlang']) ?>

    <?= $form->field($model1, 'payment_date')->widget(kartik\date\DatePicker::className(), ['name' => 'odisi',
        'options' => ['placeholder' => 'Select operating time ...'],
        'convertFormat' => true,
        'pluginOptions' => ['format' => 'dd-MM-y',
            'todayHighlight' => true]]) ?>

    <?= $form->field($model1, 'payment_amount')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Saqlash'), ['class' => 'w3-btn w3-green']) ?>
    </div>

    <?php \yii\widgets\ActiveForm::end(); ?>

</div>
<?php
\yii\bootstrap\Modal::end();
?>

