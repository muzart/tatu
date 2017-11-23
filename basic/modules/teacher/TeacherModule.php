<?php

namespace app\modules\teacher;

/**
 * teacher module definition class
 */
class TeacherModule extends \yii\base\Module
{
    public $layout='main';
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'app\modules\teacher\controllers';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
}
