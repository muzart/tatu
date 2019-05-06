<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 02.04.2019
 * Time: 23:12
 */

namespace app\helpers;


use app\models\Groups;
use app\models\Student;
use Yii;
use yii\helpers\Json;

class StudentNumberHelper
{


    /**
     * @return Groups[]|Student[]|\app\models\Subject[]|\app\models\Teacher[]|array|\yii\db\ActiveRecord[]
     */

    public static function getStudentNumberByGroup()// umitniki
    {
        $groupIds = Groups::getIdGroup();
        $count = array();
        foreach ($groupIds as $groupId) {
            $count[$groupId] = Yii::$app->db->createCommand('select count(s.id) from student s where s.group_id = ' . intval($groupId))->queryScalar();
        }
        return $count;
    }
    public static function getNumber()//mani qodim
    {
        $groupIds = Groups::getIdGroup();
        $number= array();
        foreach ($groupIds as $groupId)
        {
            $number[]=Student::find()->where(['group_id'=> $groupId])->count();
        }

        return $number;

    }



}