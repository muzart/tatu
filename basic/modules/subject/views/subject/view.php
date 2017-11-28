<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\DetailView;
use app\modules\subject\controllers;
use app\models\Direction;
use yii\widgets\ListView;
use app\models\Materials;
use yii\helpers\Url;
use yii\bootstrap\Modal;


/* @var $this yii\web\View */
/* @var $model app\models\Subject */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Subjects', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="subject-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>


    <div class="w3-container">
        <h2>Hoverable Table</h2>

        <table class="w3-table-all w3-hoverable">

            <tr>
                <th>ID</th>
                <td><?=$model->id?></td>
            </tr>
            <tr>
                <th>Yo`nalish Nomi</th>
                <td><?=$model->direction->name?></td>
            </tr>
            <tr>
                <th>Nomi</th>
                <td><?=$model->semester->name?></td>
            </tr>
            <tr>
                <th>Maruzachi</th>
                <td><?=$model->lecturer->fio?></td>
            </tr>
            <tr>
                <th>Amaliyotchi</th>
                <td><?=$model->practice->fio?></td>
            </tr>
            <tr>
                <th>1-Laboratoriyachi</th>
                <td><?=$model->lab1->fio?></td>
            </tr>
            <tr>
                <th>2-Laboratoriyachi</th>
                <td><?=$model->lab2->fio?></td>
            </tr>
            <tr>
                <th>Kafedra</th>
                <td><?=$model->department->name?></td>
            </tr>
            <tr>
                <th>Maruza soati</th>
                <td><?=$model->lecture_hour?></td>
            </tr>
            <tr>
                <th>Amaliyot soati</th>
                <td><?=$model->practice_hour?></td>
            </tr>
            <tr>
                <th>Tajriba soati</th>
                <td><?=$model->lab_hour?></td>
            </tr>
            <tr>
                <th>Mustaqil soat</th>
                <td><?=$model->independent_hour?></td>
            </tr>
        </table>
    </div>

</div>
<br>
<?= Html::button('Create Materials', ['value'=>Url::to('materials/create'),'class' => 'btn btn-success','id'=>'modalButton']) ?>
<div class="container">
    <ul class="nav nav-tabs">
        <li><a data-toggle="tab" href="#menu1">Maruza</a></li>
        <li><a data-toggle="tab" href="#menu2">Amaliyot</a></li>
        <li><a data-toggle="tab" href="#menu3">Laboratoriya</a></li>
    </ul>
    <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
<?php

Modal::begin([
    'header'=>"<h4>Yangi material qo'shish</h4>",
    'id'=>'modal',
    'size'=>'modal-lg',
]); ?>

<div class="materials-form">

    <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($material, 'subject_id')->textInput() ?>

            <?= $form->field($material, 'studies_kind')->dropDownList([ 'lecture' => 'Leksiya', 'laboratory' => 'Laboratoriya', 'practice' => 'Amaliyot', ], ['prompt' => '']) ?>

            <?= $form->field($material, 'topic')->textInput(['maxlength' => true]) ?>

            <?= $form->field($material, 'planned_hour')->textInput(['maxlength' => true]) ?>

            <div class="form-group">
                <?= Html::submitButton($material->isNewRecord ? 'Create' : 'Update', ['class' => $material->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
            </div>

            <?php ActiveForm::end(); ?>

        </div>
<?php
Modal::end();
?>
    </div>
        <div id="menu1" class="tab-pane fade">
            <?php foreach ($lectures as $lecture):?>
            <div class="w3-container">
                <table class="w3-table-all w3-hoverable">
                    <tr>

                       <td><?=$lecture->topic;?></td>
                    </tr>
                    <p></p>
                   </table>

            </div>

            <?php endforeach;?>

        </div>
        <div id="menu2" class="tab-pane fade">
            <?php foreach ($laboratorys as $laboratory):?>
                <div class="w3-container">
                    <table class="w3-table-all w3-hoverable">
                        <tr>

                            <td><?=$laboratory->topic;?></td>
                        </tr>
                        <p></p>
                    </table>

                </div>

            <?php endforeach;?>

        </div>
        <div id="menu3" class="tab-pane fade">
            <?php foreach ($practices as $practice):?>
                <div class="w3-container">
                    <table class="w3-table-all w3-hoverable">
                        <tr>

                            <td><?=$practice->topic;?></td>
                        </tr>
                        <p></p>
                    </table>

                </div>

            <?php endforeach;?>

        </div>
    </div>
</div>

