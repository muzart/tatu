<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "absence".
 *
 * @property int $id
 * @property int $student_id
 * @property string $day
 * @property int $subject_id
 * @property string $subject_type_id
 * @property int $teacher_id
 *
 * @property Student $student
 * @property Subject $subject
 * @property Teacher $teacher
 */
class Absence extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'absence';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['student_id', 'day', 'subject_id',  'teacher_id'], 'required'],
            [['student_id', 'subject_id', 'subject_type_id', 'teacher_id'], 'integer'],
            [['day','subject_type_id'], 'string', 'max' => 100],
            [['student_id'], 'exist', 'skipOnError' => true, 'targetClass' => Student::className(), 'targetAttribute' => ['student_id' => 'id']],
            [['subject_id'], 'exist', 'skipOnError' => true, 'targetClass' => Subject::className(), 'targetAttribute' => ['subject_id' => 'id']],
            [['teacher_id'], 'exist', 'skipOnError' => true, 'targetClass' => Teacher::className(), 'targetAttribute' => ['teacher_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'student_id' => Yii::t('app', ''),
            'day' => Yii::t('app', 'Day'),
            'subject_id' => Yii::t('app', 'Subject ID'),
            'subject_type_id' => Yii::t('app', 'Subject Type ID'),
            'teacher_id' => Yii::t('app', 'Teacher ID'),
        ];
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeacher()
    {
        return $this->hasOne(Teacher::className(), ['id' => 'teacher_id']);
    }

    public static function getDatesBySubjectAndType($subject_id,$subject_type)
    {
        $days_array = [];
        $days = Absence::find()->select('day')->where(['subject_id'=>$subject_id,'subject_type_id'=>$subject_type])->distinct()->orderBy(['day' => 'SORT_DESC'])->all();
        foreach ($days as $day) {
            $days_array[] = $day->day;
        }
        return $days_array;
    }

    public static function getAbsenceByDateSubjectType($date,$subject_id,$subject_type){
        return Absence::find()->select('student_id')->where(['day'=>$date,'subject_id'=>$subject_id,'subject_type_id'=>$subject_type])->column();
    }
}