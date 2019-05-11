<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 07.05.2019
 * Time: 21:43
 */

namespace app\helpers;


use app\models\Student;
use app\models\Teacher;
use app\models\User;

class NameUsers
{
    public static function getInfoUserName()
    {
        $user_id = \Yii::$app->user->id;
        $Tuser_role = User::findOne(['id' => $user_id])->role;
        $Suser_role = User::findOne(['id' => $user_id])->role;

        if ($Tuser_role == User::ROLE_TEACHER) {
            return $Tfio = Teacher::findOne(['user_id' => $user_id])->fio;

        } elseif ($Suser_role == User::ROLE_STUDENT) {
            $Ssurname = Student::findOne(['user_id' => $user_id])->surname;
            $Sname = Student::findOne(['user_id' => $user_id])->name;
            return $Ssurname . ' ' . $Sname;
        }

    }

}