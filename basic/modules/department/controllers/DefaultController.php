<?php

namespace app\modules\department\controllers;

use app\helpers\StudentNumberHelper;
use app\models\CurrentTerm;
use app\models\Subject;
use app\models\Teacher;
use app\models\Term;
use yii\web\Controller;

/**
 * Default controller for the `department` module
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
