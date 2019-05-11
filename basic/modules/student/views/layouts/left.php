<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <?php
                 $t = \app\helpers\NameUsers::getInfoUserName();
                                    ?>
                    <p><?= Yii::$app->user->isGuest ? "Mehmon" : $t ?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <?php
        $id = \app\modules\student\controllers\DefaultController::findGroupId(); ?>

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget' => 'tree'],
                'items' => [
                    ['label' => 'Menu', 'options' => ['class' => 'header']],
                    ['label' => 'Shartnoma qaydlari', 'url' => ['default/contract']],

                    ['label' => 'Dars jadvali', 'url' => ['default/schedule', 'id' => $id]],
                    ['label' => 'Ariza yuborish', 'url' => ['announcements/create']],


                ],
            ]
        ) ?>

    </section>

</aside>
