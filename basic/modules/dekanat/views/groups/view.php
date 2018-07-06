<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Groups */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Groups'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="groups-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'groupHead.fio',
            'direction.name',
            'course',
            'faculty.name',
        ],
    ]) ?>

</div>

<?php

$summa = 0;
if (count($student)):?>
    <table class="w3-table-all ">
        <tr>
            <td style="width: 3%">#</td>
            <td style="text-align: center">FIO</td>
            <td></td>
        </tr>
        <?php
        $a = 0;
        foreach ($student as $item): $a++ ?>
            <tr>
                <td style="width: 3%"><?= $a ?></td>
                <td><?= $item->name ?></td>
                <td style="width: 15%;text-align: center    "><?= Html::a(Yii::t('app', 'Ko`rish'), ['student/view', 'id' => $item->id], ['class' => 'w3-btn w3-green']) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>



