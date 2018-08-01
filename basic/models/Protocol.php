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
            'participants' => 'Participants',
            'department_id' => 'Department ID',
            'schedule' => 'Schedule',
            'statement' => 'Statement',
            'decision' => 'Decision',
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
