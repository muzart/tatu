<?php

namespace app\modules\dormitory\models;

use app\models\Student;
use Yii;

/**
 * This is the model class for table "student_mistakes".
 *
 * @property integer $id
 * @property integer $student_id
 * @property string $date
 * @property string $description
 *
 * @property Student $student
 */
class StudentMistakes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'student_mistakes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['student_id', 'date', 'description'], 'required'],
            [['student_id'], 'integer'],
            [['date'], 'string', 'max' => 200],
            [['description'], 'string', 'max' => 255],
            [['student_id'], 'exist', 'skipOnError' => true, 'targetClass' => Student::className(), 'targetAttribute' => ['student_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'student_id' => Yii::t('app', 'Student ID'),
            'date' => Yii::t('app', 'Date'),
            'description' => Yii::t('app', 'Description'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudent()
    {
        return $this->hasOne(Student::className(), ['id' => 'student_id']);
    }
}
