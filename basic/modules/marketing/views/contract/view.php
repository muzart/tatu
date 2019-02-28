<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\modules\marketing\models\Contract */

$this->title = $model->fio;
$this->params['breadcrumbs'][] = ['label' => 'Contracts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contract-view">
    <?= Html::button('Summa qo\'shish', ['value' => Url::to('materials/create'), 'class' => 'w3-btn w3-green', 'id' => 'modalButton']) ?>
    <br><br>
</div>
<div class="">
    <ul class="nav nav-pills">
        <li class="active"><a data-toggle="tab" href="#menu1">1-yarim yillik</a></li>
        <li><a data-toggle="tab" href="#menu2">2-yarim yillik</a></li>
        <li><a data-toggle="tab" href="#menu3">Yangi o'quv yillik</a></li>
    </ul>
    <div class="tab-content">

        <div id="menu1" class="tab-pane fade active in">

            <table class="w3-table-all w3-hoverable">
                <tbody>
                <tr>
                    <th>#</th>
                    <th>Oy</th>
                    <th>Sana</th>
                    <th>Summa</th>

                </tr>
                </tbody>

                <?php $i = 0;
                foreach ($first_half_year as $item): ?>
                    <tr>
                        <td><?= ++$i ?></td>
                        <td><?= $item->months->month ?></td>
                        <td><?= $item->current_date ?></td>
                        <td><?= $item->sum; ?></td>

                    </tr>
                <?php endforeach; ?>
            </table>


        </div>
        <div id="menu2" class="tab-pane fade">

            <table class="w3-table-all w3-hoverable">
                <tbody>
                <tr>
                    <th>#</th>
                    <th>Oy</th>
                    <th>Sana</th>
                    <th>Summa</th>
                    <th>Amallar</th>
                </tr>
                </tbody>

                <?php $i = 0;
                foreach ($second_half_year as $item): ?>
                    <tr>
                        <td><?= ++$i ?></td>
                        <td><?= $item->months->month ?></td>
                        <td><?= $item->current_date ?></td>
                        <td><?= $item->sum; ?></td>
                        <td><?= $item->contract->id ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>


        </div>
        <div id="menu3" class="tab-pane fade">

            <table class="w3-table-all w3-hoverable">
                <tbody>
                <tr>
                    <th>#</th>
                    <th>Oy</th>
                    <th>Sana</th>
                    <th>Summa</th>


                </tr>
                </tbody>

                <?php $i = 0;
                foreach ($new_term_year as $item): ?>
                    <tr>
                        <td><?= ++$i ?></td>
                        <td><?= $item->months->month ?></td>
                        <td><?= $item->current_date ?></td>
                        <td><?= $item->sum; ?></td>

                    </tr>
                <?php endforeach; ?>
            </table>


        </div>
    </div>
</div>
<?php
\yii\bootstrap\Modal::begin(['header' => "<h4>Summa qo'shish</h4>",
    'id' => 'modal',
    'size' => 'modal-lg',]); ?>

<div class="contract-two-form">

    <?php $form = \yii\widgets\ActiveForm::begin(); ?>

    <?= $form->field($contracttwo, 'month_id')->dropDownList(\yii\helpers\ArrayHelper::map(
        \app\modules\marketing\models\Months::find()->all(), 'id', 'month'
    )) ?>

    <?= $form->field($contracttwo, 'sum')->textInput() ?>

    <?= $form->field($contracttwo, 'current_date')->widget(kartik\date\DatePicker::className(), ['name' => 'odisi',
        'options' => ['placeholder' => 'Select operating time ...'],
        'convertFormat' => true,
        'pluginOptions' => ['format' => 'd-M-y',
            'todayHighlight' => true]]) ?>

    <?= $form->field($contracttwo, 'contract_id')->dropDownList(\yii\helpers\ArrayHelper::map(
        \app\modules\marketing\models\Contract::find()->all(), 'id', 'fio'
    ), ['prompt' => ' - Fanni tanlang - ', 'disabled' => 'disabled']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php \yii\widgets\ActiveForm::end(); ?>

</div>

<?php
\yii\bootstrap\Modal::end();
?>
<br>
<p>
    <?= Html::a(Yii::t('app','Update'), ['update', 'id' => $model->id], ['class' => 'w3-btn w3-green']) ?>
    <?= Html::a(Yii::t('app','Delete'), ['delete', 'id' => $model->id], [
        'class' => 'w3-btn w3-red',
        'data' => [
            'confirm' => 'Are you sure you want to delete this item?',
            'method' => 'post',
        ],
    ]) ?>
</p>
<?= DetailView::widget([
        'model' => $model,
        'attributes' => [

           // 'id',
            'fio',
            'faculty.name',
            'group.name',
            'contract.name',
            'full_paid',
            'half_paid',
            ['attribute'=>'total_rest',
                'value' =>'',
            ],
            'total_plan',

        ],
        'options' => ['class' => 'table table-hover panel'],
    ]
) ?>
