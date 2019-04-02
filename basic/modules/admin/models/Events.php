<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "events".
 *
 * @property int $event_id
 * @property string $event_title
 * @property string $event_detail
 * @property string $event_start_date
 * @property string $event_end_date
 * @property int $event_type
 * @property string $event_url
 * @property int $event_all_day
 * @property string $created_at
 * @property int $created_by
 * @property string $updated_at
 * @property int $updated_by
 * @property int $is_status
 */
class Events extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'events';
    }

    public static function find()
    {
        return parent::find()->andWhere(['<>', 'is_status', 2]);
    }


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['event_title', 'event_detail', 'event_start_date', 'event_end_date', 'event_type', 'created_at', 'created_by'], 'required'],
            [['event_start_date', 'event_end_date', 'created_at', 'updated_at'], 'safe'],
            [['event_type', 'event_all_day', 'created_by', 'updated_by', 'is_status'], 'integer'],
            [['event_title'], 'string', 'max' => 80],
            [['event_detail', 'event_url'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'event_id' => Yii::t('app', 'Event ID'),
            'event_title' => Yii::t('app', 'Event Title'),
            'event_detail' => Yii::t('app', 'Event Detail'),
            'event_start_date' => Yii::t('app', 'Event Start Date'),
            'event_end_date' => Yii::t('app', 'Event End Date'),
            'event_type' => Yii::t('app', 'Event Type'),
            'event_url' => Yii::t('app', 'Event Url'),
            'event_all_day' => Yii::t('app', 'Event All Day'),
            'created_at' => Yii::t('app', 'Created At'),
            'created_by' => Yii::t('app', 'Created By'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'updated_by' => Yii::t('app', 'Updated By'),
            'is_status' => Yii::t('app', 'Is Status'),
        ];
    }
}
