<?php

namespace app\modules\teacher\controllers;

use app\models\ScheduleItem;
use app\models\Teacher;
use yii\web\Controller;

/**
 * Default controller for the `teacher` module
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

    public function actionSchedule()
    {
        $user_id = \Yii::$app->user->id;
        $teacher_id = Teacher::find()->where(['user_id' => $user_id])->one()->id;
        $first_day = ScheduleItem::find()->where(['teacher_id' => $teacher_id, 'day' => '1-kun'])->orderBy(['pair'=> 4])->all();
        $second_day = ScheduleItem::find()->where(['teacher_id' => $teacher_id, 'day' => '2-kun'])->orderBy(['pair'=> 4])->all();
        $third_day = ScheduleItem::find()->where(['teacher_id' => $teacher_id, 'day' => '3-kun'])->orderBy(['pair'=> 4])->all();
        $forth_day = ScheduleItem::find()->where(['teacher_id' => $teacher_id, 'day' => '4-kun'])->orderBy(['pair'=> 4])->all();
        $fifth_day = ScheduleItem::find()->where(['teacher_id' => $teacher_id, 'day' => '5-kun'])->orderBy(['pair'=> 4])->all();
        $sixth_day = ScheduleItem::find()->where(['teacher_id' => $teacher_id, 'day' => '6-kun'])->orderBy(['pair'=> 4])->all();
        return $this->render('schedule', [
            'first_day' => $first_day,
            'second_day' => $second_day,
            'third_day' => $third_day,
            'forth_day' => $forth_day,
            'fifth_day' => $fifth_day,
            'sixth_day' => $sixth_day,

        ]);
    }

}
