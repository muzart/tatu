<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "marks".
 *
 * @property integer $id
 * @property integer $group_id
 * @property integer $student_id
 * @property integer $subject_id
 * @property integer $lesson_type_id
 * @property double $mark
 *
 * @property Groups $group
 * @property LessonType $lessonType
 * @property Student $student
 * @property Subject $subject
 */
class Marks extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'marks';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['group_id', 'student_id', 'subject_id', 'lesson_type_id', 'mark'], 'required'],
            [['group_id', 'student_id', 'subject_id', 'lesson_type_id'], 'integer'],
            [['mark'], 'number'],
            [['group_id'], 'exist', 'skipOnError' => true, 'targetClass' => Groups::className(), 'targetAttribute' => ['group_id' => 'id']],
            [['lesson_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => LessonType::className(), 'targetAttribute' => ['lesson_type_id' => 'id']],
            [['student_id'], 'exist', 'skipOnError' => true, 'targetClass' => Student::className(), 'targetAttribute' => ['student_id' => 'id']],
            [['subject_id'], 'exist', 'skipOnError' => true, 'targetClass' => Subject::className(), 'targetAttribute' => ['subject_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'group_id' => 'Group ID',
            'student_id' => 'Student ID',
            'subject_id' => 'Subject ID',
            'lesson_type_id' => 'Lesson Type ID',
            'mark' => 'Mark',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGroup()
    {
        return $this->hasOne(Groups::className(), ['id' => 'group_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLessonType()
    {
        return $this->hasOne(LessonType::className(), ['id' => 'lesson_type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudent()
    {
        return $this->hasOne(Student::className(), ['id' => 'student_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubject()
    {
        return $this->hasOne(Subject::className(), ['id' => 'subject_id']);
    }
}
