<div class="department-default-index">
    <div class="dekanat-default-index">
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-blue">
                <div class="inner">
                    <h3><?= \app\models\Teacher::find()->count()?></h3>

                    <p>O'qituvchilar</p>
                </div>
                <div class="icon">
                    <i class="fa fa-retweet"></i>
                </div>
                <a href="<?= \yii\helpers\Url::to('department/teacher/') ?>" class="small-box-footer">
                    Kirish <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-maroon-active">
                <div class="inner">
                    <h3><?=\app\models\Subject::find()->count()?></h3>

                    <p>Fanlar</p>
                </div>
                <div class="icon">
                    <i class="fa fa-retweet"></i>
                </div>
                <a href="<?= \yii\helpers\Url::toRoute('/department/subject/') ?>" class="small-box-footer">
                    Kirish <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-olive">
                <div class="inner">
                    <h3><?=\app\models\Protocol::find()->count()?></h3>

                    <p>Protocollar</p>
                </div>
                <div class="icon">
                    <i class="fa fa-retweet"></i>
                </div>
                <a href="<?= \yii\helpers\Url::to('department/protocol/') ?>" class="small-box-footer">
                    Kirish <i class="fa fa-arrow-circle-right"></i>
                </a>

            </div>
        </div>

    </div>




</div>
