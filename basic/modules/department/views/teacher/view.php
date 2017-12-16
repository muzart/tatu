<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Teacher */

$this->title = $model->fio;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Teachers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$baseUrl = Yii::$app->request->baseUrl;
?>
<div class="teacher-view">

    <h1><?= Html::encode($this->title) ?></h1>

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
    <div class="containter">
        <table class="table table-bordered">
            <tr>
                <td colspan="1">
                    <br><br>
                    <h3 style="text-align: center"><b>Ma'lumotnoma</b></h3>
                    <h4 style="text-align: center"><?= $model->fio ?></h4>
                    <h5 style="text-align: left"><?= $model->started_work ?></h5>
                    <h5 style="text-align: left"><b>Toshkent axborot texnologiyalari universiteti Urganch
                            filiali<br> <?= $model->department->name ?> kafedrasi <?= $model->science_degree ?>
                            o'qituvchi
                        </b></h5>

                </td>

                <td style="vertical-align: middle">
                    <img src="<?= $baseUrl ?>/uploads/departments/<?= strtolower(str_replace(" ", "_", $model->department->name)) . "/" . $model->img; ?>"
                         class="img-thumbnail st-img" width="150" height="200">
                </td>
            </tr>
            <tr>
                <td colspan="1" style="vertical-align: middle;">
                    <b>Tugilgan yili:</b>
                    <?= $model->birthday ?>

                </td>
                <td style="">
                    <b> Tugilgan joyi:</b> <?= $model->birthplace ?>
                </td>
            </tr>
            <tr>
                <td><b>Millati:</b> <?= $model->nationality ?></td>
                <td><b>Partiyaviyligi:</b><?= $model->deputy ?></td>
            </tr>
            <tr>
                <td><b>Ma'lumoti: </b><?= $model->degree ?></td>
                <td><b>Tamomlagan:</b><?= $model->ended ?></td>
            </tr>
            <tr>
                <td><b>Ma'lumoti bo'yicha mutahasisligi: </b><?= $model->specialization ?></td>
                <td><b>Ilmiy unvoni:</b> <?= $model->science_title ?></td>
            </tr>
            <tr>
                <td>
                    <b> Qaysi chet tillarni biladi:</b> <?= $model->foreign_langs ?>
                </td>
                <td><b>Davlat mukofotlari bilan tagdirlanganmi:</b><?= $model->gov_awards ?></td>
            </tr>
            <tr>
                <td><b>Xalq deputatlari,respuplika,viloyat,shahar va tuman Kengashi deputatimi yoki boshqa saylanadigan
                        organlarning a'zosimi(to'liq korsatilishi lozim):</b><?= $model->deputy ?>
                </td>
                <td></td>
            </tr>
        </table>
    </div>
    <h3 style="text-align: center"><b>Mexnat faoliyati</b></h3>

</div>
