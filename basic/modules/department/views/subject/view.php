<?php

use kartik\file\FileInput;
use yii\bootstrap\Modal;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;


/* @var $this yii\web\View */
/* @var $model app\models\Subject */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Subjects'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

    <div class="subject-view">


        <p>
            <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'w3-btn w3-teal']) ?>
            <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
                'class' => 'w3-btn w3-red',
                'data' => [
                    'confirm' => Yii::t('app', 'Shu fanni o\'chirishga aminmisiz ?'),
                    'method' => 'post',
                ],
            ]) ?>
        </p>
        <div class="w3-container">
            <table class="w3-table-all w3-hoverable">

                <tr>
                    <th>Fan nomi</th>
                    <td><?= $model->name; ?></td>
                </tr>
                <tr>
                    <th>Kafedra</th>
                    <td><?= $model->department->name ?></td>
                </tr>

            </table>
        </div>

    </div>
    <br>
<?= Html::button('Material yaratish', ['value' => Url::to('materials/create'), 'class' => 'w3-btn w3-green', 'id' => 'modalButton']) ?>
    <br><br>
    <div class="">
        <ul class="nav nav-pills">
            <li class="active"><a data-toggle="tab" href="#menu1">Maruza</a></li>
            <li><a data-toggle="tab" href="#menu2">Amaliyot</a></li>
            <li><a data-toggle="tab" href="#menu3">Laboratoriya</a></li>
        </ul>
        <div class="tab-content">

            <div id="menu1" class="tab-pane fade active in">

                <table class="w3-table-all w3-hoverable">
                    <tr>
                        <th>#</th>
                        <th>Mashg'ulot turi</th>
                        <th>Mavzu</th>
                        <th>Ajratilgan soat</th>
                        <th>Materiallar</th>
                        <th>Amallar</th>
                    </tr>
                    <?php $i = 0;
                    foreach ($lectures as $lecture):?>
                        <tr>
                            <td><?= ++$i ?></td>
                            <td>Ma'ruza</td>
                            <td><?= $lecture->topic; ?></td>
                            <td><?= $lecture->planned_hour ?></td>
                            <td>
                                <?php
                                $i = 0;
                                foreach ($lecture->materialFiles as $mf) {
                                    echo Html::a('M-' . ++$i, Yii::$app->request->getBaseUrl() . '/' . $mf->file_path) . " ";
                                }
                                ?>
                            </td>
                            <td>
                                <?= Html::a('Tahrirlash', ['materials/update', 'id' => $lecture->id], ['class' => 'w3-btn w3-teal']) ?>
                                <?= Html::a('O\'chirish', ['materials/delete', 'id' => $lecture->id], ['class' => 'w3-btn w3-red',
                                    'data' => [
                                        'confirm' => Yii::t('app', 'Shu fanni o\'chirishga aminmisiz ?'),
                                        'method' => 'post',
                                    ],
                                ]) ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>


            </div>
            <div id="menu2" class="tab-pane fade">

                <table class="w3-table-all w3-hoverable">
                    <tr>
                        <th>#</th>
                        <th>Mashg'ulot turi</th>
                        <th>Mavzu</th>
                        <th>Ajratilgan soat</th>
                        <th>Materiallar</th>
                        <th>Amallar</th>
                    </tr>
                    <?php $j = 0;
                    foreach ($practices as $practice):?>
                        <tr>
                            <td><?= ++$j ?></td>
                            <td>Amaliyot</td>
                            <td><?= $practice->topic; ?></td>
                            <td><?= $practice->planned_hour; ?></td>
                            <td>
                                <?php
                                $i = 0;
                                foreach ($practice->materialFiles as $mf) {
                                    echo Html::a('M-' . ++$i, Yii::$app->request->getBaseUrl() . '/' . $mf->file_path) . " ";
                                }
                                ?>
                            </td>
                            <td>
                                <?= Html::a('Tahrirlash', ['materials/update', 'id' => $practice->id], ['class' => 'w3-btn w3-teal']) ?>
                                <?= Html::a('O\'chirish', ['materials/delete', 'id' => $practice->id], ['class' => 'w3-btn w3-red',
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
            <div id="menu3" class="tab-pane fade">

                <table class="w3-table-all w3-hoverable">
                    <tr>
                        <th>#</th>
                        <th>Mashg'ulot turi</th>
                        <th>Mavzu</th>
                        <th>Ajratilgan soat</th>
                        <th>Materiallar</th>
                        <th>Amallar</th>
                    </tr>
                    <?php $j = 0;
                    foreach ($laboratorys as $laboratory):?>
                        <tr>
                            <td><?= ++$j ?></td>
                            <td>Tajriba ishi</td>
                            <td><?= $laboratory->topic; ?></td>
                            <td><?= $laboratory->planned_hour ?></td>
                            <td>
                                <?php
                                $i = 0;
                                foreach ($laboratory->materialFiles as $mf) {
                                    echo Html::a('M-' . ++$i, Yii::$app->request->getBaseUrl() . '/' . $mf->file_path) . " ";
                                }
                                ?>
                            </td>
                            <td>
                                <?= Html::a('Tahrirlash', ['materials/update', 'id' => $laboratory->id], ['class' => 'w3-btn w3-teal']) ?>
                                <?= Html::a('O\'chirish', ['materials/delete', 'id' => $laboratory->id], ['class' => 'w3-btn w3-red',
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

<?php

Modal::begin([
    'header' => "<h4>Yangi material qo'shish</h4>",
    'id' => 'modal',
    'size' => 'modal-lg',
]); ?>

    <div class="materials-form">

        <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

        <?= $form->field($material, 'subject_id')->dropDownList(\yii\helpers\ArrayHelper::map(
            \app\models\Subject::find()->all(),
            'id',
            'name'
        ), ['prompt' => ' - Fanni tanlang - ', 'disabled' => 'disabled']) ?>

        <?= $form->field($material, 'studies_kind')->dropDownList(['lecture' => 'Leksiya', 'laboratory' => 'Laboratoriya', 'practice' => 'Amaliyot',], ['prompt' => ' - Mashg\'ulot turini tanlang - ']) ?>

        <?= $form->field($material, 'topic')->textInput(['maxlength' => true]) ?>

        <?= $form->field($material, 'planned_hour')->textInput(['maxlength' => true]) ?>

        <?= $form->field($material, 'file[]')->widget(FileInput::classname(), [
            'options' => ['multiple' => true],
            'pluginOptions' => ['previewFileType' => 'any']
        ]);
        ?>

        <div class="form-group">
            <?= Html::submitButton($material->isNewRecord ? 'Yaratish' : 'Update', ['class' => $material->isNewRecord ? 'w3-btn w3-green' : 'btn btn-primary']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
<?php
Modal::end();
?>