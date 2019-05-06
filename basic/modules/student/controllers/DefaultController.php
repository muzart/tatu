<?php

namespace app\modules\student\controllers;

use app\models\Groups;
use app\models\Student;
use app\modules\admin\models\Announcements;
use app\modules\contract\models\ContractAmounts;
use app\modules\contract\models\ContractPayments;
use yii\web\Controller;
use yii\web\ForbiddenHttpException;
use yii\web\NotFoundHttpException;

/**
 * Default controller for the `student` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     * @throws ForbiddenHttpException
     */
    public  function actionIndex()
    {
        $user_id = \Yii::$app->user->id;

        $student = Student::findOne(["user_id"=>$user_id]);
        if ($student !== null) {
            $model = Student::find()->where(['user_id'=>$user_id])->all();
            return $this->render('index', [
                'model' => $model,
            ]);
        }
        throw new ForbiddenHttpException("Siz studen emassiz, shuning uchun bu sahifaga kira olmaysiz");
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

    public function findGroupId()
    {
        $user_id = \Yii::$app->user->id;
        $group_id = Student::find()->where(['user_id' => $user_id])->one()->group->id;
        return $group_id;
    }

    public function actionSchedule($id)
    {

        $model = $this->findModel($id);

        $schedule = $model->getSchedule();

        return $this->render('schedule', [
            'schedule' => $schedule
        ]);
    }

    protected function findModel($id)
    {
        if (($model = Groups::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
public static function getInfoStudent()
{
    $user_id = \Yii::$app->user->id;

    $students = Student::find()->where(['user_id'=>$user_id])->all();

    return $students;
}

}
