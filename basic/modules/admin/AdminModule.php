<?php

namespace app\modules\admin;

use app\models\User;
use yii\web\ForbiddenHttpException;

/**
 * admin module definition class
 */
class AdminModule extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'app\modules\admin\controllers';
    public $layout = 'main';
    public static $access_roles = [User::ROLE_ADMIN];

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }

    public function beforeAction($action)
    {
        if (!\Yii::$app->user->isGuest) {
            $role = \Yii::$app->user->identity->getRole();
            if (!in_array($role, static::$access_roles))
                throw new ForbiddenHttpException("Siz bu sahifaga kirish huquqiga ega emassiz");
        } else {
            throw new ForbiddenHttpException("Siz bu sahifaga kirish huquqiga ega emassiz");
        }
        return parent::beforeAction($action); // TODO: Change the autogenerated stub
    }


}