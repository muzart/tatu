<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "schedule_item".
 *
 * @property int $id
 * @property int $subject_id
 * @property string $subject_type Dars turi
 * @property int $teacher_id O'qituvchi
 * @property int $room_id Xona
 * @property int $group_id Guruh
 * @property string $day Hafta kuni
 * @property string $pair Juftlik/Toqlik
 * @property int $term_id Semestr
 * @property string $week_type
 *
 * @property Groups $group
 * @property Room $room
 * @property Teacher $teacher
 * @property Term $term
 * @property Subject $subject
 */
class ScheduleItem extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'schedule_item';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['subject_id', 'subject_type', 'teacher_id', 'room_id', 'group_id', 'day', 'pair', 'term_id', 'week_type'], 'required'],
            [['subject_id', 'teacher_id', 'room_id', 'group_id', 'term_id'], 'integer'],
            [['subject_type', 'day', 'pair', 'week_type'], 'string'],
            [['group_id'], 'exist', 'skipOnError' => true, 'targetClass' => Groups::className(), 'targetAttribute' => ['group_id' => 'id']],
            [['room_id'], 'exist', 'skipOnError' => true, 'targetClass' => Room::className(), 'targetAttribute' => ['room_id' => 'id']],
            [['teacher_id'], 'exist', 'skipOnError' => true, 'targetClass' => Teacher::className(), 'targetAttribute' => ['teacher_id' => 'id']],
            [['term_id'], 'exist', 'skipOnError' => true, 'targetClass' => Term::className(), 'targetAttribute' => ['term_id' => 'id']],
            [['subject_id'], 'exist', 'skipOnError' => true, 'targetClass' => Subject::className(), 'targetAttribute' => ['subject_id' => 'id']],
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
            'subject_type' => Yii::t('app', 'Dars turi'),
            'teacher_id' => Yii::t('app', 'O\'qituvchi'),
            'room_id' => Yii::t('app', 'Xona'),
            'group_id' => Yii::t('app', 'Guruh'),
            'day' => Yii::t('app', 'Hafta kuni'),
            'pair' => Yii::t('app', 'Juftlik'),
            'term_id' => Yii::t('app', 'Semestr'),
            'week_type' => Yii::t('app', 'Week Type'),
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
    public function getRoom()
    {
        return $this->hasOne(Room::className(), ['id' => 'room_id']);
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
    public function getTerm()
    {
        return $this->hasOne(Term::className(), ['id' => 'term_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubject()
    {
        return $this->hasOne(Subject::className(), ['id' => 'subject_id']);
    }

}
