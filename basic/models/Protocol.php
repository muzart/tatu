<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "protocol".
 *
 * @property integer $id
 * @property string $participants
 * @property integer $department_id
 * @property string $schedule
 * @property string $statement
 * @property string $decision
 *
 * @property Department $department
 */
class Protocol extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'protocol';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['participants', 'schedule', 'statement', 'decision'], 'string'],
            [['department_id'], 'integer'],
            [['department_id'], 'exist', 'skipOnError' => true, 'targetClass' => Department::className(), 'targetAttribute' => ['department_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'participants' => Yii::t('app','Participants'),
            'department_id' => Yii::t('app','Department ID'),
            'schedule' => Yii::t('app','Schedule'),
            'statement' => Yii::t('app','Statement'),
            'decision' => Yii::t('app','Decision'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDepartment()
    {
        return $this->hasOne(Department::className(), ['id' => 'department_id']);
    }
}
