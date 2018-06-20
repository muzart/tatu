<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\dormitory\models\TtjRoom */

$this->title = 'Create Ttj Room';
$this->params['breadcrumbs'][] = ['label' => 'Ttj Rooms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ttj-room-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
