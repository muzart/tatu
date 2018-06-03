<?php

namespace app\modules\dormitory\models;

use app\models\Student;
use Yii;

/**
 * This is the model class for table "announcement_student".
 *
 * @property integer $id
 * @property integer $announcement_id
 * @property integer $student_id
 *
 * @property Announcements $announcement
 * @property Student $student
 */
class AnnouncementStudent extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'announcement_student';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['announcement_id', 'student_id'], 'required'],
            [['announcement_id', 'student_id'], 'integer'],
            [['announcement_id'], 'exist', 'skipOnError' => true, 'targetClass' => Announcements::className(), 'targetAttribute' => ['announcement_id' => 'id']],
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
            'announcement_id' => Yii::t('app', 'Announcement ID'),
            'student_id' => Yii::t('app', 'Student ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAnnouncement()
    {
        return $this->hasOne(Announcements::className(), ['id' => 'announcement_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudent()
    {
        return $this->hasOne(Student::className(), ['id' => 'student_id']);
    }
}
