<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Protocol */

//$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Protocols', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="protocol-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary no-print']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger no-print',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <button class="btn btn-default no-print" onclick="printDiv('printableArea')"<i class="fa fa-print" aria-hidden="true" style="font-size: 17px;"></i>Chop qilish</button>
    </p>
<center style="font-size: 20px ">
    Muhammad al-Xorazmiy nomidagi <br>
    Toshkent axborot texnologiyalari universiteti <br>
    Urganch filiali <br>
    "Kompyuter injineringi fakulteti" <br>
    "Dasturiy injiniring" kafedra yig'ilishi
    <br>
    BAYONNOMASI №
</center>


<?=$model->participants;
echo $model->schedule;
echo $model->statement;
echo $model->decision;


?>


<h4 style="text-align: left">
Dasturiy injiniring <br>
kafedrasi mudiri :<br>
Kotib:
</h4>
    <h4 style="text-align: right;margin-top: -70px">
t.f.n F.Yusupov <br>
Xo'jamuratov B.
    </h4>
</div>
<script>
    function printDiv(divName) {

        window.print();

    }
</script>