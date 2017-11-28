<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "materials".
 *
 * @property integer $id
 * @property integer $subject_id
 * @property string $studies_kind
 * @property string $topic
 * @property string $planned_hour
 *
 * @property Subject $subject
 */
class Materials extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'materials';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['subject_id', 'studies_kind', 'topic', 'planned_hour'], 'required'],
            [['subject_id'], 'integer'],
            [['studies_kind'], 'string'],
            [['topic'], 'string', 'max' => 255],
            [['planned_hour'], 'string', 'max' => 10],
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
            'subject_id' => 'Subject ID',
            'studies_kind' => 'Studies Kind',
            'topic' => 'Topic',
            'planned_hour' => 'Planned Hour',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubject()
    {
        return $this->hasOne(Subject::className(), ['id' => 'subject_id']);
    }
}
