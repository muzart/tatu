<?php

namespace app\modules\dormitory;

/**
 * dormitory module definition class
 */
class DormitoryModule extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'app\modules\dormitory\controllers';
    public $layout = 'main';
    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
}
