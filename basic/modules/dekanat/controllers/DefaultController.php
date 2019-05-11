<?php

namespace app\modules\dekanat\controllers;

use app\modules\dekanat\models\Announcements;
use app\modules\dekanat\models\AnnouncementsSearch;
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
    public function actionMessage($id)
    {
        Announcements::updateAll(['status' => 'inactive'], ['id' => $id]);
        $announcement = Announcements::findOne(['id' => $id]);
        return $this->render('message',
            [
                'model' => $announcement,
            ]);
    }
    public function actionList()
    {
        $searchModel = new AnnouncementsSearch();
        $dataProvider = $searchModel->search(\Yii::$app->request->queryParams);

        return $this->render('list', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionView($id)
    {
        $announcement = Announcements::findOne(['id' => $id]);

        return $this->render('view', [

            'model' => $announcement,
        ]);
    }

}
