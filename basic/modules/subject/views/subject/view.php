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


    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'w3-btn w3-teal']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'w3-btn w3-red',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>


    <div class="w3-container">
        <table class="w3-table-all w3-hoverable">

            <tr>
                <th>ID</th>
                <td><?= $model->id ?></td>
                <th>1-Laboratoriyachi</th>
                <td><?= $model->lab1->fio ?></td>
            </tr>
            <tr>
                <th>Yo`nalish Nomi</th>
                <td><?= $model->direction->name ?></td>
                <th>2-Laboratoriyachi</th>
                <td><?= $model->lab2->fio ?></td>
            </tr>
            <tr>
                <th>Nomi</th>
                <td><?= $model->semester->name ?></td>
                <th>Maruza soati</th>
                <td><?= $model->lecture_hour ?></td>
            </tr>
            <tr>
                <th>Maruzachi</th>
                <td><?= $model->lecturer->fio ?></td>
                <th>Amaliyot soati</th>
                <td><?= $model->practice_hour ?></td>
            </tr>
            <tr>
                <th>Amaliyotchi</th>
                <td><?= $model->practice->fio ?></td>
                <th>Tajriba soati</th>
                <td><?= $model->lab_hour ?></td>
            </tr>
            <tr>
                <th>Kafedra</th>
                <td><?= $model->department->name ?></td>
                <th>Mustaqil soat</th>
                <td><?= $model->independent_hour ?></td>
            </tr>

        </table>


    </div>

</div>
<br>
<?= Html::button('Material yaratish', ['value' => Url::to('materials/create'), 'class' => 'w3-btn w3-green', 'id' => 'modalButton']) ?>
<br><br>
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
                'header' => "<h4>Yangi material qo'shish</h4>",
                'id' => 'modal',
                'size' => 'modal-lg',
            ]); ?>

            <div class="materials-form">

                <?php $form = ActiveForm::begin(); ?>

                <?= $form->field($material, 'subject_id')->textInput() ?>

                <?= $form->field($material, 'studies_kind')->dropDownList(['lecture' => 'Leksiya', 'laboratory' => 'Laboratoriya', 'practice' => 'Amaliyot',], ['prompt' => '']) ?>

                <?= $form->field($material, 'topic')->textInput(['maxlength' => true]) ?>

                <?= $form->field($material, 'planned_hour')->textInput(['maxlength' => true]) ?>

                <div class="form-group">
                    <?= Html::submitButton($material->isNewRecord ? 'Yaratish' : 'Update', ['class' => $material->isNewRecord ? 'w3-btn w3-green' : 'btn btn-primary']) ?>
                </div>

                <?php ActiveForm::end(); ?>

            </div>
            <?php
            Modal::end();
            ?>
        </div>
        <br>

        <div id="menu1" class="tab-pane fade">
            <div class="w3-container">
                <table class="w3-table-all w3-hoverable">
                    <tr>
                        <th>#</th>
                        <th>Mavzu</th>
                        <th>Amallar</th>
                    </tr>
                    <?php $i = 0;
                    foreach ($lectures as $lecture):?>
                        <tr>
                            <td><?= ++$i ?></td>
                            <td><?= $lecture->topic; ?></td>
                            <td>
                                <?= Html::a('Tahrirlash', ['materials/update', 'id' => $lecture->id], ['class' => 'btn btn-info']) ?>
                                <?= Html::a('O\'chirish', ['materials/delete', 'id' => $lecture->id], ['class' => 'btn btn-danger',
                                    'data' => [
                                        'confirm' => 'Are you sure you want to delete this item?',
                                        'method' => 'post',
                                    ],
                                ]) ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>

        </div>
        <div id="menu2" class="tab-pane fade">
            <div class="w3-container">
                <table class="w3-table-all w3-hoverable">
                    <tr>
                        <th>#</th>
                        <th>Mavzu</th>
                        <th>Amallar</th>
                    </tr>
                    <?php $j = 0;
                    foreach ($laboratorys as $laboratory):?>
                        <tr>
                            <td><?= ++$j ?></td>
                            <td><?= $laboratory->topic; ?></td>
                            <td>
                                <?= Html::a('Tahrirlash', ['materials/update', 'id' => $laboratory->id], ['class' => 'btn btn-info']) ?>
                                <?= Html::a('O\'chirish', ['materials/delete', 'id' => $laboratory->id], ['class' => 'btn btn-danger',
                                    'data' => [
                                        'confirm' => 'Are you sure you want to delete this item?',
                                        'method' => 'post',
                                    ],
                                ]) ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>

        </div>
        <div id="menu3" class="tab-pane fade">
            <div class="w3-container">
                <table class="w3-table-all w3-hoverable">
                    <tr>
                        <th>#</th>
                        <th>Mavzu</th>
                        <th>Amallar</th>
                    </tr>
                    <?php $j = 0;
                    foreach ($practices as $practice):?>
                        <tr>
                            <td><?= ++$j ?></td>
                            <td><?= $practice->topic; ?></td>
                            <td>
                                <?= Html::a('Tahrirlash', ['materials/update', 'id' => $practice->id], ['class' => 'btn btn-info']) ?>
                                <?= Html::a('O\'chirish', ['materials/delete', 'id' => $practice->id], ['class' => 'btn btn-danger',
                                    'data' => [
                                        'confirm' => 'Are you sure you want to delete this item?',
                                        'method' => 'post',
                                    ],
                                ]) ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>

        </div>
    </div>
</div>

