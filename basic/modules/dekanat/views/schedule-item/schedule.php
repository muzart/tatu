<div class="row">

<div class="col-md-6">
    <div class="box">
    <div class="box-header text-center" >
        <h3 class="box-title">1-kurs</h3>
    </div>
    <div class="box-body">
        <?php
        foreach (\app\models\Groups::getIdGroupByDirection(1) as $item) {
            echo \yii\helpers\Html::a(Yii::t('app', \app\models\Groups::findOne(['id' => $item])->name), ['groups/schedule', 'id' => $item], ['class' => 'w3-btn w3-blue']) . " ";
        }
        ?>
    </div>
</div>
</div>
    <div class="col-md-6">
        <div class="box">
            <div class="box-header text-center" >
                <h3 class="box-title">2-kurs</h3>
            </div>
            <div class="box-body">
                <?php
                foreach (\app\models\Groups::getIdGroupByDirection(2) as $item) {
                    echo \yii\helpers\Html::a(Yii::t('app', \app\models\Groups::findOne(['id' => $item])->name), ['groups/schedule', 'id' => $item], ['class' => 'w3-btn w3-blue']) . " ";
                }
                ?>
            </div>
        </div>
    </div>
</div>
<div class="row">

    <div class="col-md-6">
        <div class="box">
            <div class="box-header text-center" >
                <h3 class="box-title">1-kurs</h3>
            </div>
            <div class="box-body">
                <?php
                foreach (\app\models\Groups::getIdGroupByDirection(3) as $item) {
                    echo \yii\helpers\Html::a(Yii::t('app', \app\models\Groups::findOne(['id' => $item])->name), ['groups/schedule', 'id' => $item], ['class' => 'w3-btn w3-blue']) . " ";
                }
                ?>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="box">
            <div class="box-header text-center" >
                <h3 class="box-title">4-kurs</h3>
            </div>
            <div class="box-body">
                <?php
                foreach (\app\models\Groups::getIdGroupByDirection(4) as $item) {
                    echo \yii\helpers\Html::a(Yii::t('app', \app\models\Groups::findOne(['id' => $item])->name), ['groups/schedule', 'id' => $item], ['class' => 'w3-btn w3-blue']) . " ";
                }
                ?>
            </div>
        </div>
    </div>
</div>



