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
//var_dump($materials); exit;
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
            <?php
            $i = 0;
            foreach ($materials as $key => $the_material): $i++ ?>
                <li <?=($i==1)?"class='active'":""?>><a data-toggle="tab" href="#<?= $key ?>"><?= $key ?></a></li>
            <?php endforeach; ?>
        </ul>
        <div class="tab-content">
            <?php
            $j = 0;
            foreach ($materials as $key => $the_materials): $j++ ?>
                <div id="<?= $key ?>" class="tab-pane fade <?=($j==1) ? "active":""?> in">
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
                        foreach ($the_materials as $the_material):?>
                            <tr>
                                <td><?= ++$i ?></td>
                                <td><?=$key ?></td>
                                <td><?= $the_material->topic; ?></td>
                                <td><?= $the_material->planned_hour ?></td>
                                <td>
                                    <?php
                                    $i = 0;
                                    foreach ($the_material->materialFiles as $mf) {
                                        echo Html::a('M-' . ++$i, Yii::$app->request->getBaseUrl() . '/' . $mf->file_path) . " ";
                                    }
                                    ?>
                                </td>
                                <td>
                                    <?= Html::a('Tahrirlash', ['materials/update', 'id' => $the_material->id], ['class' => 'w3-btn w3-teal']) ?>
                                    <?= Html::a('O\'chirish', ['materials/delete', 'id' => $the_material->id], ['class' => 'w3-btn w3-red',
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
            <?php endforeach; ?>
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

        <?= $form->field($material, 'studies_kind')->dropDownList($model->getPlanSubjectTypeDropdown()) ?>

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