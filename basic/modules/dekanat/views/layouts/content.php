<?php

use yii\widgets\Breadcrumbs;
use dmstr\widgets\Alert;

?>
<div class="content-wrapper">
    <section class="content-header">
        <?php
        /*echo \sintret\chat\ChatRoom::widget([
            'url' =>\yii\helpers\Url::to(['/chat/send-chat']),
            'userModel' => \app\models\User::className(),
            'userField' => 'avatarImage'
        ]);*/
        ?>



        <?php if (isset($this->blocks['content-header'])) { ?>
            <h1><?= $this->blocks['content-header'] ?></h1>
        <?php } else { ?>
            <h1>
<!--                --><?php
//                if ($this->title !== null) {
//                    echo \yii\helpers\Html::encode($this->title);
//                } else {
//                    echo \yii\helpers\Inflector::camel2words(
//                        \yii\helpers\Inflector::id2camel($this->context->module->id)
//                    );
//                    echo ($this->context->module->id !== \Yii::$app->id) ? '<small>Module</small>' : '';
//                } ?>
            </h1>
        <?php } ?>

        <?=
        Breadcrumbs::widget(
            [
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]
        ) ?>
    </section>

    <section class="content">
        <?= Alert::widget() ?>
        <?= $content ?>
    </section>
</div>

<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; 2018 <a href="https://ubtuit.uz">TUIT UB</a>.</strong>
</footer>