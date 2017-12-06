<?php

namespace app\modules\department;

/**
 * department module definition class
 */
class DepartmentModule extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'app\modules\department\controllers';
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
