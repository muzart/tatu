<?php

namespace app\modules\dekanat\models;

use app\modules\dormitory\models\AnnouncementStudent;
use Yii;
use app\models\User;
/**
 * This is the model class for table "announcements".
 *
 * @property int $id
 * @property int $user_id

 * @property string $tittle
 * @property string $body
 * @property string $end_date
 * @property string $status
 *
 * @property AnnouncementStudent[] $announcementStudents
 * @property User $user
 */
class Announcements extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'announcements';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id','tittle', 'body', 'end_date', 'status'], 'required'],
            [['user_id'], 'integer'],
            [['body', 'status'], 'string'],
            [['end_date'], 'string', 'max' => 200],
            [['tittle'], 'string', 'max' => 255],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'user_id' => Yii::t('app', 'User ID'),

            'tittle' => Yii::t('app', 'Ariza turi'),
            'body' => Yii::t('app', 'Ariza'),
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
