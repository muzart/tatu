<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "subject_type".
 *
 * @property int $id
 * @property string $name Fan turi
 *
 * @property PlanSubjectTeacher[] $planSubjectTeachers
 * @property PlanSubjectType[] $planSubjectTypes
 */
class SubjectType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'subject_type';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Fan turi'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlanSubjectTeachers()
    {
        return $this->hasMany(PlanSubjectTeacher::className(), ['subject_type_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlanSubjectTypes()
    {
        return $this->hasMany(PlanSubjectType::className(), ['subject_type_id' => 'id']);
    }
}
