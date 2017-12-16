<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Student */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Students'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$baseUrl = Yii::$app->request->baseUrl;
?>
<div class="student-view">
    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary no-print']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger no-print',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>
</div>
<div class="container">
    <table class="table table-bordered">
        <tr>
            <td colspan="3">
                <h3 style="text-transform: uppercase; text-align: center">muhammad al-xorazmiy nomidagi <br>toshkent
                    axborot
                    texnologiyalari <br>universiteti urganch filiali
                    <br><br>talaba shaxsiy varaqasi</h3>
            </td>
        </tr>
        <tr>
            <td colspan="2" style="vertical-align: middle;">
                <h4>Yig`ma jild va reyting daftarchasi № <?= $model->reyting_no ?></h4>
                <h4>Mutahasislik____________________________(___)</h4>
                <h4> Ismi sharifi <?= $model->surname . " " . $model->name . " " . $model->patronymic; ?></h4>
            </td>
            <td style="vertical-align: middle">
                <img src="<?= $baseUrl ?>/uploads/groups/<?= $model->group->name . "/" . $model->photo; ?>"
                     class="img-thumbnail st-img" width="150" height="200">
            </td>
        </tr>
        </tr>
        <tr>
            <td style="width:5%">1</td>
            <td style="width:50%">Tug`ilgan sanasi</td>
            <td><?= $model->birthday ?></td>
        </tr>
        <tr>
            <td>2</td>
            <td>Tug`ilgan joyi</td>
            <td><?= $model->birthplace ?></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Millati</td>
            <td><?= $model->nationality ?></td>
        </tr>
        <tr>
            <td>4</td>
            <td>Ma'lumoti(maktab,akademik litsey,<br>KHK yoki boshqa o`quv yurti №,nomi,tugatgan yili)</td>
            <td><?= $model->education ?></td>
        </tr>
        <tr>
            <td>5</td>
            <td>O`qishga kirguncha ish joyi<br>(agar ishlagan bo`lsa)</td>
            <td><?= $model->workplace ?></td>
        </tr>
        <tr>
            <td>6</td>
            <td>Ota onasi haqida ma'lumot <br>(ismi sharfi,kaerda ,kim bo`lib <br>ishlaydi,telefoni)</td>
            <td><?= $model->father_name ?> , <?= $model->father_workplace ?> , <?= $model->father_phone ?>
                , <?= $model->mother_name ?> , <?= $model->mother_workplace ?> , <?= $model->mother_phone ?></td>
        </tr>
        <tr>
            <td>7</td>
            <td>Oilaviy ahvoli
            <td><?= $model->family_status ?></td>
        </tr>
        <tr>
            <td>8</td>
            <td>Passport seriyasi,raqami,kim tomonidan va qachon berilgan</td>
            <td><?= $model->passport_serie ?>  <?= $model->passport_number ?>  <?= $model->passport_given ?></td>
        </tr>
        <tr>
            <td>9</td>
            <td>Ota-onasining manzili ,telefoni</td>
            <td><?= $model->parents_address ?> , <?= $model->father_phone ?> , <?= $model->mother_phone ?></td>
        </tr>
        <tr>
            <td>10</td>
            <td>Uy manszili,shu jumladan ijara uy,talabalar turar joyi,telefon</td>
            <td><?= $model->address ?></td>
        </tr>
    </table>
</div>
<div class="container">
    <h6 style="margin: 10px 0px 0px 27px">«_____» ___________________________</h6>
    <h6 style="margin: -16px 0px 0px 450px ">_____________________</h6>
    <h5 style="margin: 2px 0px 0px 515px">(imzo)</h5>
</div>


