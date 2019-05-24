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
            <?= $form->field($model, 'directions')->dropDownList(
                $model->getDirectionDropdown(),
                [
                    'multiple' => 'multiple',
                    'class' => 'choosen-select input-md form-control',
                ]
            )->label("Yo'nalishlar") ?>
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

<div class="row">
    <div class="col-md-6" id="dynamicFields"></div>
</div>
<?= Html::submitButton($model->isNewRecord ? 'Yaratish' : 'Tahrirlash', ['class' => $model->isNewRecord ? 'w3-btn w3-green' : 'w3-btn w3-teal']) ?>

<?php ActiveForm::end(); ?>

</div>
<?php
$js = <<<JS
function createDynamicFields(){
    var terms = $('#subject-terms option:selected');
    var directions = $('#subject-directions option:selected');
    var subject_types = $('#subject-subject_type option:selected');
    // alert('Hi')
    var fields = "";
    for(var i=0; i < terms.length; i++){
        for(var j = 0; j < directions.length; j++){
            for(var k = 0; k < subject_types.length; k++){
                fields += '<div class="form-group">' +
                 '  <label>'+terms[i].innerHTML+ " "+directions[j].innerHTML+ "("+ subject_types[k].innerHTML +') soat miqdori</label>' +
                 '  <input class="form-control" type="number" name="Subject[terms]['+terms[i].value+'][directions]['+directions[j].value+'][subject_type]['+subject_types[k].value+']"/> ' +
                '</div>';
            } 
        }
    }
    $('#dynamicFields').html(fields);
}
$('#subject-directions').change(function (){
    createDynamicFields()
});
$('#subject-subject_type').change(function (){
    createDynamicFields()
});
$('#subject-terms').change(function (){
    createDynamicFields()
});
JS;

$this->registerJs($js);
?>