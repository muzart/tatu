<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\dormitory\models\Sections */

$this->title = 'Create Sections';
$this->params['breadcrumbs'][] = ['label' => 'Sections', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sections-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
