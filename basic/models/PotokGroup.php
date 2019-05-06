<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "potok_group".
 *
 * @property int $id
 * @property int $potok_id
 * @property int $group_id
 *
 * @property Potok $potok
 * @property Groups $group
 */
class PotokGroup extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'potok_group';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['potok_id', 'group_id'], 'required'],
            [['potok_id', 'group_id'], 'integer'],
            [['potok_id'], 'exist', 'skipOnError' => true, 'targetClass' => Potok::className(), 'targetAttribute' => ['potok_id' => 'id']],
            [['group_id'], 'exist', 'skipOnError' => true, 'targetClass' => Groups::className(), 'targetAttribute' => ['group_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'potok_id' => Yii::t('app', 'Potok ID'),
            'group_id' => Yii::t('app', 'Group ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPotok()
    {
        return $this->hasOne(Potok::className(), ['id' => 'potok_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGroup()
    {
        return $this->hasOne(Groups::className(), ['id' => 'group_id']);
    }
}
