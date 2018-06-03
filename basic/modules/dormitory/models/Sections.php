<?php

namespace app\modules\dormitory\models;

use Yii;

/**
 * This is the model class for table "sections".
 *
 * @property integer $id
 * @property string $number
 * @property string $floor
 *
 * @property TtjRoom[] $ttjRooms
 * @property TtjStudents[] $ttjStudents
 */
class Sections extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sections';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['number', 'floor'], 'required'],
            [['number', 'floor'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'number' => Yii::t('app', 'Number'),
            'floor' => Yii::t('app', 'Floor'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTtjRooms()
    {
        return $this->hasMany(TtjRoom::className(), ['section_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTtjStudents()
    {
        return $this->hasMany(TtjStudents::className(), ['section_id' => 'id']);
    }
}
