<?php

namespace app\modules\dekanat\controllers;

use yii\web\Controller;
use yii\web\ForbiddenHttpException;
use yii\widgets\FragmentCache;

/**
 * Default controller for the `dekanat` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {


            return $this->render('index');


    }
}
