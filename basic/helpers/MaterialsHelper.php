<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 04.06.2019
 * Time: 13:11
 */

namespace app\helpers;


use app\models\Materials;

class MaterialsHelper
{

    public static function getMaterials($subject_id, $subject_type_id)
    {
        $materials = Materials::find()->where(['subject_id' => $subject_id, 'studies_kind' => $subject_type_id])->all();
        return $materials;
    }

}