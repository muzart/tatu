<div class="dekanat-default-index">
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-blue">
            <div class="inner">
                <h3><?= \app\models\Term::find()->count()?></h3>

                <p>Semerstrlar</p>
            </div>
            <div class="icon">
                <i class="fa fa-retweet"></i>
            </div>
            <a href="<?= \yii\helpers\Url::to('dekanat/term') ?>" class="small-box-footer">
                Kirish <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-maroon-active">
            <div class="inner">
                <h3><?=\app\models\Groups::find()->count()?></h3>

                <p>Guruhlar</p>
            </div>
            <div class="icon">
                <i class="fa fa-retweet"></i>
            </div>
            <a href="<?= \yii\helpers\Url::toRoute('/dekanat/groups/') ?>" class="small-box-footer">
                Kirish <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-purple-gradient">
            <div class="inner">
                <h3><?=\app\models\Student::find()->count()?></h3>
                <p>Talabalar</p>
            </div>
            <div class="icon">
                <i class="fa fa-retweet"></i>
            </div>
            <a href="<?= \yii\helpers\Url::to('dekanat/student') ?>" class="small-box-footer">
                Kirish <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-olive">
            <div class="inner">
                <h3><?=\app\models\ScheduleItem::find()->count()?></h3>

                <p>Dars jadvali</p>
            </div>
            <div class="icon">
                <i class="fa fa-retweet"></i>
            </div>
            <a href="<?= \yii\helpers\Url::to('dekanat/schedule-item/') ?>" class="small-box-footer">
                Kirish <i class="fa fa-arrow-circle-right"></i>
            </a>

        </div>
    </div>

</div>



