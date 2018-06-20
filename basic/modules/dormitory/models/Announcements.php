<?php

namespace app\modules\dormitory\models;

use Yii;

/**
 * This is the model class for table "announcements".
 *
 * @property integer $id
 * @property string $start_date
 * @property string $tittle
 * @property string $body
 * @property string $end_date
 * @property string $status
 *
 * @property AnnouncementStudent[] $announcementStudents
 */
class Announcements extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'announcements';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['start_date', 'tittle', 'body', 'end_date', 'status'], 'required'],
            [['body', 'status'], 'string'],
            [['start_date', 'end_date'], 'string', 'max' => 200],
            [['tittle'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'start_date' => Yii::t('app', 'Start Date'),
            'tittle' => Yii::t('app', 'Tittle'),
            'body' => Yii::t('app', 'Body'),
            'end_date' => Yii::t('app', 'End Date'),
            'status' => Yii::t('app', 'Status'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAnnouncementStudents()
    {
        return $this->hasMany(AnnouncementStudent::className(), ['announcement_id' => 'id']);
    }
}
