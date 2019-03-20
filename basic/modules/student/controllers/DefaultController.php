<?php

namespace app\modules\student\controllers;

use app\models\ScheduleItem;
use app\models\Student;
use app\modules\admin\models\Announcements;
use app\modules\contract\models\ContractAmounts;
use app\modules\contract\models\ContractPayments;
use yii\web\Controller;

/**
 * Default controller for the `student` module
 */
class   DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $user_id = \Yii::$app->user->id;
        $student_id = Student::find()->where(["user_id" => $user_id])->one()->id;
        $model = ContractPayments::find()->where(["student_id" => $student_id])->one();
        return $this->render('index', [
            'model' => $model,
        ]);

    }

    public function actionContract()
    {
        $user_id = \Yii::$app->user->id;
        $student_id = Student::find()->where(["user_id" => $user_id])->one()->id;
        $model = ContractPayments::find()->where(["student_id" => $student_id])->one();


        $payment = \app\modules\contract\models\ContractPayments::findAll(['student_id' => $model->student->id]);
        $contract_amount = ContractAmounts::findAll(['direction_id' => $model->student->direction_id]);

        return $this->render('contract', [
            'model' => $model,
            'payment' => $payment,
            'contract_amount' => $contract_amount,

        ]);

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

    public function actionSchedule()
    {
        $user_id = \Yii::$app->user->id;
        $group_id = Student::find()->where(['user_id' => $user_id])->one()->group->id;
        $first_day = ScheduleItem::find()->where(['group_id' => $group_id, 'day' => '1-kun'])->orderBy(['pair' => 4])->all();
        $second_day = ScheduleItem::find()->where(['group_id' => $group_id, 'day' => '2-kun'])->orderBy(['pair' => 4])->all();
        $third_day = ScheduleItem::find()->where(['group_id' => $group_id, 'day' => '3-kun'])->orderBy(['pair' => 4])->all();
        $forth_day = ScheduleItem::find()->where(['group_id' => $group_id, 'day' => '4-kun'])->orderBy(['pair' => 4])->all();
        $fifth_day = ScheduleItem::find()->where(['group_id' => $group_id, 'day' => '5-kun'])->orderBy(['pair' => 4])->all();
        $sixth_day = ScheduleItem::find()->where(['group_id' => $group_id, 'day' => '6-kun'])->orderBy(['pair' => 4])->all();
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
