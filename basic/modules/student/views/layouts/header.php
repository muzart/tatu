<?php
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */
$unread_cnt=\app\modules\admin\models\Announcements::find()->where(['status'=>'active','user_id'=>Yii::$app->user->id])->count();
$unread_messages=\app\modules\admin\models\Announcements::find()->where(['status'=>'active','user_id'=>Yii::$app->user->id])->all();

?>

<header class="main-header">

    <?= Html::a('<span class="logo-mini">TUIT</span><span class="logo-lg">' . Yii::$app->name . '</span>', Yii::$app->homeUrl, ['class' => 'logo']) ?>

    <nav class="navbar navbar-static-top" role="navigation">

        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">

            <ul class="nav navbar-nav">
                <li class="dropdown messages-menu">
                    <?php
                    if($unread_cnt != 0) :?>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-envelope-o"></i>
                            <span class="label label-success"><?php echo $unread_cnt;?></span>
                        </a>
                    <?php endif;?>
                    <ul class="dropdown-menu">
                        <li class="header">Sizga yangi <?php echo $unread_cnt;?> ta xabar bor</li>
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class="menu">
                                <?php foreach ($unread_messages as $message):?>
                                    <li><!-- start message -->
                                        <a href=<?php echo Yii::getAlias('@web/student/default/message?id='.$message->id)?> >
                                            <div class="pull-left">
                                                <img src="<?= $directoryAsset ?>/" class="img-circle"
                                                     alt="User Image"/>
                                            </div>
                                            <h4>
                                                <?php
                                                $user_sender = \app\models\User::findOne($message->user_id);
                                                echo $user_sender->username;
                                                ?>
                                            </h4>
                                            <p><?php echo $message->tittle?></p>
                                        </a>
                                    </li>
                                <?php endforeach;?>
                            </ul>
                        </li>

                    </ul>
                </li>

                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="user-image" alt="User Image"/>
                        <span class="hidden-xs"><?=Yii::$app->user->identity->username?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle"
                                 alt="User Image"/>
                        </li>
                        <li class="user-footer">
                            <div class="pull-right">
                                <?= Html::a(
                                    'Chiqish',
                                    ['/site/logout'],
                                    ['data-method' => 'post', 'class' => 'btn btn-default btn-flat']
                                ) ?>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
