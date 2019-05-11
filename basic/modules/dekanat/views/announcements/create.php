<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\dekanat\models\Announcements */

$this->title = Yii::t('app', 'Create Announcements');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Announcements'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="announcements-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
