<?php

namespace app\modules\dormitory\models;

use app\models\Student;
use app\models\Term;
use Yii;

/**
 * This is the model class for table "ttj_students".
 *
 * @property integer $id
 * @property integer $term_id
 * @property integer $room_id
 * @property integer $section_id
 * @property integer $student_id
 * @property integer $inside
 *
 * @property Term $term
 * @property TtjRoom $room
 * @property Sections $section
 * @property Student $student
 */
class TtjStudents extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ttj_students';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['term_id', 'room_id', 'section_id', 'student_id', 'inside'], 'required'],
            [['term_id', 'room_id', 'section_id', 'student_id', 'inside'], 'integer'],
            [['term_id'], 'exist', 'skipOnError' => true, 'targetClass' => Term::className(), 'targetAttribute' => ['term_id' => 'id']],
            [['room_id'], 'exist', 'skipOnError' => true, 'targetClass' => TtjRoom::className(), 'targetAttribute' => ['room_id' => 'id']],
            [['section_id'], 'exist', 'skipOnError' => true, 'targetClass' => Sections::className(), 'targetAttribute' => ['section_id' => 'id']],
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
            'term_id' => Yii::t('app', 'Term ID'),
            'room_id' => Yii::t('app', 'Room ID'),
            'section_id' => Yii::t('app', 'Section ID'),
            'student_id' => Yii::t('app', 'Student ID'),
            'inside' => Yii::t('app', 'Inside'),
        ];
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
    public function getRoom()
    {
        return $this->hasOne(TtjRoom::className(), ['id' => 'room_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSection()
    {
        return $this->hasOne(Sections::className(), ['id' => 'section_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudent()
    {
        return $this->hasOne(Student::className(), ['id' => 'student_id']);
    }
}
