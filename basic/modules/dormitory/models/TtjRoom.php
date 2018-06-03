<?php

namespace app\modules\dormitory\models;

use Yii;

/**
 * This is the model class for table "ttj_room".
 *
 * @property integer $id
 * @property integer $section_id
 * @property string $number
 *
 * @property Sections $section
 * @property TtjStudents[] $ttjStudents
 */
class TtjRoom extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ttj_room';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['section_id', 'number'], 'required'],
            [['section_id'], 'integer'],
            [['number'], 'string', 'max' => 100],
            [['section_id'], 'exist', 'skipOnError' => true, 'targetClass' => Sections::className(), 'targetAttribute' => ['section_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'section_id' => Yii::t('app', 'Section ID'),
            'number' => Yii::t('app', 'Number'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSection()
    {
        return $this->hasOne(Sections::className(), ['id' => 'section_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTtjStudents()
    {
        return $this->hasMany(TtjStudents::className(), ['room_id' => 'id']);
    }
}
