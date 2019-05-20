<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Protocol */

//$this->title = $model->id;

?>
<div class="protocol-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p class="no-print">
        <?= Html::a('Tahrirlash', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('O\'chirish', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Haqiqatda o\'chirishni xohlaysizmi?',
                'method' => 'post',
            ],
        ]) ?>
        <span class="btn btn-default" onclick="javascript: window.print();"
        <i class="fa fa-print" aria-hidden="true" style="font-size: 17px;"></i> Chop qilish</span>
    </p>
    <p style="font-size: 20px; text-align: center">
        Muhammad al-Xorazmiy nomidagi <br>
        Toshkent axborot texnologiyalari universiteti <br>
        Urganch filiali <br>
        "Kompyuter injineringi fakulteti" <br>
        "Dasturiy injiniring" kafedra yig'ilishi
        <br>
        BAYONNOMASI №____
    </p>
    <table width="100%">
        <tr>
            <td style="vertical-align: top">
                <p><strong>Qatnashishdi:</strong>
                    <?= $model->participants; ?>
                </p>
            </td>
            <td style="vertical-align: top">
                <p class="text-right"><strong>Urganch,</strong>
                    <?= date('d.m.Y') ?>
                </p>
            </td>
        </tr>
    </table>
    <h3 class="text-center">Kun tartibidagi masalalar</h3>
    <?= $model->schedule; ?>
    <?= $model->statement; ?>
    <h3 class="text-center">Qabul qilingan qaror</h3>
    <?= $model->decision; ?>
    <table width="100%">
        <tr>
            <th>Dasturiy injiniring kafedrasi mudiri:</th>
            <td>___________________________</td>
        </tr>
        <tr>
            <th>Kotib:</th>
            <td>___________________________</td>
        </tr>
    </table>
</div>