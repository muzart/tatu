<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "lesson".
 *
 * @property integer $id
 * @property integer $term_id
 * @property integer $lesson_type_id
 * @property integer $group_id
 * @property integer $teacher_id
 * @property integer $day
 * @property integer $pair
 * @property integer $sana
 *
 * @property Term $term
 * @property LessonType $lessonType
 * @property Groups $group
 * @property Teacher $teacher
 */
class Lesson extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lesson';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['term_id', 'lesson_type_id', 'group_id', 'teacher_id', 'day', 'pair', 'sana'], 'required'],
            [['term_id', 'lesson_type_id', 'group_id', 'teacher_id', 'day', 'pair', 'sana'], 'integer'],
            [['term_id'], 'exist', 'skipOnError' => true, 'targetClass' => Term::className(), 'targetAttribute' => ['term_id' => 'id']],
            [['lesson_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => LessonType::className(), 'targetAttribute' => ['lesson_type_id' => 'id']],
            [['group_id'], 'exist', 'skipOnError' => true, 'targetClass' => Groups::className(), 'targetAttribute' => ['group_id' => 'id']],
            [['teacher_id'], 'exist', 'skipOnError' => true, 'targetClass' => Teacher::className(), 'targetAttribute' => ['teacher_id' => 'id']],
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
            'lesson_type_id' => Yii::t('app', 'Lesson Type ID'),
            'group_id' => Yii::t('app', 'Group ID'),
            'teacher_id' => Yii::t('app', 'Teacher ID'),
            'day' => Yii::t('app', 'Day'),
            'pair' => Yii::t('app', 'Pair'),
            'sana' => Yii::t('app', 'Sana'),
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
    public function getLessonType()
    {
        return $this->hasOne(LessonType::className(), ['id' => 'lesson_type_id']);
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
    public function getTeacher()
    {
        return $this->hasOne(Teacher::className(), ['id' => 'teacher_id']);
    }

    /**
     * @inheritdoc
     * @return LessonQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new LessonQuery(get_called_class());
    }
}
