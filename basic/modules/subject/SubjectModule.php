<?php

namespace app\modules\subject;

/**
 * subject module definition class
 */
class SubjectModule extends \yii\base\Module
{
    public $layout = 'main';
    /**
     * @inheritdoc
     */

    public $controllerNamespace = 'app\modules\subject\controllers';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
}
