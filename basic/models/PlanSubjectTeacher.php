<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "plan_subject_teacher".
 *
 * @property int $id
 * @property int $teacher_id
 * @property int $subject_id
 * @property int $subject_type_id
 * @property int $term_id
 * @property int $potok_id
 *
 * @property Teacher $teacher
 * @property Subject $subject
 * @property SubjectType $subjectType
 * @property Term $term
 * @property Potok $potok
 */
class PlanSubjectTeacher extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'plan_subject_teacher';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['teacher_id', 'subject_id', 'subject_type_id', 'term_id', 'potok_id'], 'required'],
            [['teacher_id', 'subject_id', 'subject_type_id', 'term_id', 'potok_id'], 'integer'],
            [['teacher_id'], 'exist', 'skipOnError' => true, 'targetClass' => Teacher::className(), 'targetAttribute' => ['teacher_id' => 'id']],
            [['subject_id'], 'exist', 'skipOnError' => true, 'targetClass' => Subject::className(), 'targetAttribute' => ['subject_id' => 'id']],
            [['subject_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => SubjectType::className(), 'targetAttribute' => ['subject_type_id' => 'id']],
            [['term_id'], 'exist', 'skipOnError' => true, 'targetClass' => Term::className(), 'targetAttribute' => ['term_id' => 'id']],
            [['potok_id'], 'exist', 'skipOnError' => true, 'targetClass' => Potok::className(), 'targetAttribute' => ['potok_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'teacher_id' => Yii::t('app', 'Teacher ID'),
            'subject_id' => Yii::t('app', 'Subject ID'),
            'subject_type_id' => Yii::t('app', 'Subject Type ID'),
            'term_id' => Yii::t('app', 'Term ID'),
            'potok_id' => Yii::t('app', 'Potok ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeacher()
    {
        return $this->hasOne(Teacher::className(), ['id' => 'teacher_id']);
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTerm()
    {
        return $this->hasOne(Term::className(), ['id' => 'term_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPotok()
    {
        return $this->hasOne(Potok::className(), ['id' => 'potok_id']);
    }
}
