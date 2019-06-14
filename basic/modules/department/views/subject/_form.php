<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $model app\models\Subject */
/* @var $form yii\widgets\ActiveForm */
?>

    <div class="subject-form">

        <?php $form = ActiveForm::begin(); ?>

        <div class="row">
            <div class="col-md-6">
                <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
                <?= $form->field($model, 'department_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Department::find()->all(), 'id', 'name')) ?>
            </div>
            <div class="col-md-2">
                <?= $form->field($model, 'terms')->dropDownList(
                    $model->getTermsDropdown(),
                    [
                        'multiple' => 'multiple',
                        'class' => 'choosen-select input-md form-control',
                    ]
                )->label("Semetrni tanlang") ?>
            </div>

            <div class="col-md-2">
                <?= $form->field($model, 'subject_type')->dropDownList(
                    $model->getSubjectTypeDropdown(),
                    [
                        'multiple' => 'multiple',
                        'class' => 'choosen-select input-md form-control',
                    ]
                )->label("Fan turi") ?>
            </div>
        </div>


        <?= Html::submitButton($model->isNewRecord ? 'Yaratish' : 'Tahrirlash', ['class' => $model->isNewRecord ? 'w3-btn w3-green' : 'w3-btn w3-teal']) ?>

        <?php ActiveForm::end(); ?>

    </div>
