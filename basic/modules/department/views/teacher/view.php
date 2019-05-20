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
    <p class="no-print">
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ])
        ?>
        <button class="btn btn-default" onclick="javascript: window.print()"><i class="fa fa-print"></i> Print</button>
    <?= Html::a(Yii::t('app', 'Ko`rish'), ['yuklama', 'id' => $model->id], ['class' => 'btn btn-primary no-print']) ?>
    </p>
    <div class="containter">
        <div class="row">
            <div class="col-md-12">
                <table>
                    <tr>
                        <td>
                            <table class="table" border="0">
                                <tr>
                                    <td colspan="3">
                                        <h3 class="text-center text-bold" style="text-transform: capitalize">MA'LUMOTNOMA</h3>
                                        <h4 style="text-align: center"><?= $model->fio ?></h4>
                                        <h5 style="text-align: left"><?= $model->started_work ?></h5>
                                        <h5 style="text-align: left">
                                            Toshkent axborot texnologiyalari universiteti Urganch filiali<br>
                                            <?= $model->department->name ?> kafedrasida o'qituvchi lavozimida ishlaydi.
                                        </h5>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="1" style="vertical-align: middle;">
                                        <b>Tugilgan yili:</b>
                                        <?= $model->birthday ?>
                                    </td>
                                    <td colspan="2">
                                        <b> Tugilgan joyi:</b> <?= $model->birthplace ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>Millati:</b> <?= $model->nationality ?></td>
                                    <td colspan="2"><b>Partiyaviyligi:</b><?= $model->deputy ?></td>
                                </tr>
                                <tr>
                                    <td><b>Ma'lumoti: </b><?= $model->degree ?></td>
                                    <td colspan="2"><b>Tamomlagan:</b><?= $model->ended ?></td>
                                </tr>
                                <tr>
                                    <td><b>Ma'lumoti bo'yicha mutahasisligi: </b><?= $model->specialization ?></td>
                                    <td colspan="2"><b>Ilmiy unvoni:</b> <?= $model->science_title ?></td>
                                </tr>
                                <tr>
                                    <td>
                                        <b> Qaysi chet tillarni biladi:</b> <?= $model->foreign_langs ?>
                                    </td>
                                    <td colspan="2"><b>Davlat mukofotlari bilan tagdirlanganmi:</b><?= $model->gov_awards ?></td>
                                </tr>
                                <tr>
                                    <td colspan="3"><b>Xalq deputatlari,respuplika,viloyat,shahar va tuman Kengashi deputatimi yoki boshqa saylanadigan
                                            organlarning a'zosimi(to'liq korsatilishi lozim):</b><?= $model->deputy ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <h3 style="text-align: center"><b>Mexnat faoliyati</b></h3>
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td style="vertical-align: top" width="20%">
                            <img src="<?= $baseUrl ?>/uploads/departments/<?= strtolower(str_replace(" ", "_", $model->department->name)) . "/" . $model->img; ?>"
                                 class="img-thumbnail st-img">
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

</div>