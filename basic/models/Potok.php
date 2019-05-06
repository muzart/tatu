<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "potok".
 *
 * @property int $id
 * @property string $name
 *
 * @property PlanSubjectTeacher[] $planSubjectTeachers
 * @property PotokGroup[] $potokGroups
 */
class Potok extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'potok';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlanSubjectTeachers()
    {
        return $this->hasMany(PlanSubjectTeacher::className(), ['potok_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPotokGroups()
    {
        return $this->hasMany(PotokGroup::className(), ['potok_id' => 'id']);
    }
}
