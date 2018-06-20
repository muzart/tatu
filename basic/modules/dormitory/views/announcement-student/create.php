<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\dormitory\models\AnnouncementStudent */

$this->title = 'Create Announcement Student';
$this->params['breadcrumbs'][] = ['label' => 'Announcement Students', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="announcement-student-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
