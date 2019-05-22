<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 20.03.2019
 * Time: 5:21
 */

namespace app\helpers;

use app\models\CurrentTerm;
use app\models\ScheduleItem;

class ScheduleHelper
{

    /**
     * Bu funksiya guruhning dars jadvalini qaytaradi
     * @param $group_id
     * @return array
     */
    public static function getScheduleByGroup($group_id){
        $current_term=CurrentTerm::findOne(['id'=>1]);
        $days = ["1-kun","2-kun","3-kun","4-kun","5-kun","6-kun"];
        $result = [];
        foreach ($days as $day){
            $result[$day] = \app\models\ScheduleItem::find()->where(['group_id'=>$group_id,'day'=>$day,'term_id'=>$current_term])->orderBy('pair')->all();       }
        return $result;

    }
    public static function getCurrentTerm()
    {
        $current_term=CurrentTerm::findOne(['id'=>1])->current_term_id;
        return $current_term;
    }

    public static function deleteSchedule($id)
    {
        $schedule_item=ScheduleItem::findOne($id);
        if($schedule_item){
            $schedule_item->delete();
            return true;
        }
        return false;
    }



}