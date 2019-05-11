<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?= Yii::$app->user->isGuest ? "Mehmon" : Yii::$app->user->identity->username ?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>


        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget' => 'tree'],
                'items' => [
                    ['label' => 'Menu','icon'=>'dashboard', 'options' => ['class' => 'header']],
                    ['label' => 'O\'qituvchilar','icon'=>'user', 'url' => ['teacher/index']],
                    ['label' => 'Fanlar','icon'=>'book', 'url' => ['subject/index']],
                    ['label' => 'Protocollar','icon'=>'file-text-o', 'url' => ['protocol/index']],



                ],

            ]
        ) ?>

    </section>

</aside>
