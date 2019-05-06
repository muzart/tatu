<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "subject_direction".
 *
 * @property int $id
 * @property int $subject_id
 * @property int $direction_id
 *
 * @property Direction $direction
 * @property Subject $subject
 */
class SubjectDirection extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'subject_direction';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['subject_id', 'direction_id'], 'required'],
            [['subject_id', 'direction_id'], 'integer'],
            [['direction_id'], 'exist', 'skipOnError' => true, 'targetClass' => Direction::className(), 'targetAttribute' => ['direction_id' => 'id']],
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
            'direction_id' => Yii::t('app', 'Direction ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDirection()
    {
        return $this->hasOne(Direction::className(), ['id' => 'direction_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubject()
    {
        return $this->hasOne(Subject::className(), ['id' => 'subject_id']);
    }
}
