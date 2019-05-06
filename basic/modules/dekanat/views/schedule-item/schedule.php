<?php
?>
<nav class="w3-sidenav w3-transparent w3-card-2" style="margin-left: -120px;  margin-top:-30px  ">
    <div class="w3-container">
    </div>
    <h6 style=" margin-left: 100px"><a href="javascript:void(0)" class="tablink"
                                       onclick="openLink(event, '1')">1-kurs</a></h6>
    <h6 style=" margin-left: 100px"><a href="javascript:void(0)" class="tablink"
                                       onclick="openLink(event, '2')">2-kurs</a></h6>
    <h6 style=" margin-left: 100px"><a href="javascript:void(0)" class="tablink"
                                       onclick="openLink(event, '3')">3-kurs</a></h6>
    <h6 style=" margin-left: 100px"><a href="javascript:void(0)" class="tablink"
                                       onclick="openLink(event, '4')">4-kurs</a></h6>

</nav>

<div style="margin-left:80px">


    <div id="1" class="w3-container city w3-animate-opacity" style="">
        <?php
        foreach (\app\models\Groups::getIdGroupByDirection(1) as $item) {
            echo \yii\helpers\Html::a(Yii::t('app', \app\models\Groups::findOne(['id' => $item])->name), ['groups/schedule', 'id' => $item], ['class' => 'w3-btn w3-blue']) . " ";
        }
        ?>
    </div>
    <div id="2" class="w3-container city w3-animate-opacity" style="display:none">
        <?php
        foreach (\app\models\Groups::getIdGroupByDirection(2) as $item) {
            echo \yii\helpers\Html::a(Yii::t('app', \app\models\Groups::findOne(['id' => $item])->name), ['groups/schedule', 'id' => $item], ['class' => 'w3-btn w3-blue']) . " ";
        }
        ?>
    </div>
    <div id="3" class="w3-container city w3-animate-opacity" style="display:none">
        <?php
        foreach (\app\models\Groups::getIdGroupByDirection(3) as $item) {
            echo \yii\helpers\Html::a(Yii::t('app', \app\models\Groups::findOne(['id' => $item])->name), ['groups/schedule', 'id' => $item], ['class' => 'w3-btn w3-blue']) . " ";
        }
        ?>
    </div>
    <div id="4" class="w3-container city w3-animate-opacity" style="display:none">
        <?php
        foreach (\app\models\Groups::getIdGroupByDirection(4) as $item) {
            echo \yii\helpers\Html::a(Yii::t('app', \app\models\Groups::findOne(['id' => $item])->name), ['groups/schedule', 'id' => $item], ['class' => 'w3-btn w3-blue']) . " ";
        }
        ?>
    </div>


</div>

<script>
    function openLink(evt, animName) {
        var i, x, tablinks;
        x = document.getElementsByClassName("city");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablink");
        for (i = 0; i < x.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" w3-blue", "");
        }
        document.getElementById(animName).style.display = "block";
        evt.currentTarget.className += " w3-blue  ";
    }
</script>