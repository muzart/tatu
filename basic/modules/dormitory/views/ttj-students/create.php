<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\dormitory\models\TtjStudents */

$this->title = 'Create Ttj Students';
$this->params['breadcrumbs'][] = ['label' => 'Ttj Students', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ttj-students-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
