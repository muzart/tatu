<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Marks */

$this->title = 'Create Marks';
$this->params['breadcrumbs'][] = ['label' => 'Marks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="marks-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
