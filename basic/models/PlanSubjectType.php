<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "plan_subject_type".
 *
 * @property int $id
 * @property int $subject_id
 * @property int $subject_type_id

 *
 * @property Subject $subject
 * @property SubjectType $subjectType
 */
class PlanSubjectType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'plan_subject_type';
    }





    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['subject_id', 'subject_type_id'], 'required'],
            [['subject_id', 'subject_type_id'], 'integer'],

            [['subject_id'], 'exist', 'skipOnError' => true, 'targetClass' => Subject::className(), 'targetAttribute' => ['subject_id' => 'id']],
            [['subject_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => SubjectType::className(), 'targetAttribute' => ['subject_type_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'subject_id' => Yii::t('app', 'Subject ID'),
            'subject_type_id' => Yii::t('app', 'Subject Type ID'),

        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubject()
    {
        return $this->hasOne(Subject::className(), ['id' => 'subject_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubjectType()
    {
        return $this->hasOne(SubjectType::className(), ['id' => 'subject_type_id']);
    }


}

