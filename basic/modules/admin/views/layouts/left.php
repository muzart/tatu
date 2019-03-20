<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p> <?php echo Yii::$app->user->isGuest ? "Mehmon" : Yii::$app->user->identity->username ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>



        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget' => 'tree'],
                'items' => [
                    ['label' => 'Menu Yii2', 'options' => ['class' => 'header']],
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    [
                        'label' => 'Tools',
                        'icon' => 'share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii'],],
                            ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug'],],
                        ],

                    ],

                    [
                        'label' => 'Bo\'limlar',
                        'icon' => 'share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Shartnoma', 'icon' => 'file-code-o', 'url' => ['/contract'],],
                            ['label' => 'Dekanat', 'icon' => 'dashboard', 'url' => ['/dekanat'],],
                            ['label' => 'Kafedra', 'icon' => 'dashboard', 'url' => ['/department'],],
                            ['label' => 'TTJ', 'icon' => 'dashboard', 'url' => ['/dormitory'],],
                            ['label' => 'Talaba', 'icon' => 'dashboard', 'url' => ['/student'],],
                            ['label' => 'Fanlar', 'icon' => 'dashboard', 'url' => ['/subject'],],
                            ['label' => 'O\'qituvchi', 'icon' => 'dashboard', 'url' => ['/teacher'],],
                            ['label' => 'Universitet', 'icon' => 'dashboard', 'url' => ['/university'],],
                        ],

                    ],

                ],
            ]
        ) ?>

    </section>

</aside>
