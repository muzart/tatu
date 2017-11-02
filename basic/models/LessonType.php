<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "lesson_type".
 *
 * @property integer $id
 * @property integer $subject_id
 * @property string $lesson_type
 *
 * @property Lesson[] $lessons
 * @property Subject $subject
 */
class LessonType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lesson_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['subject_id', 'lesson_type'], 'required'],
            [['subject_id'], 'integer'],
            [['lesson_type'], 'string'],
            [['subject_id'], 'exist', 'skipOnError' => true, 'targetClass' => Subject::className(), 'targetAttribute' => ['subject_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'subject_id' => Yii::t('app', 'Subject ID'),
            'lesson_type' => Yii::t('app', 'Lesson Type'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLessons()
    {
        return $this->hasMany(Lesson::className(), ['lesson_type_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubject()
    {
        return $this->hasOne(Subject::className(), ['id' => 'subject_id']);
    }
}
