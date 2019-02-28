<?php

namespace app\modules\marketing\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property int $id
 * @property string $yillik
 *
 * @property Months[] $months
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['yillik'], 'required'],
            [['yillik'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'yillik' => 'Yillik',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMonths()
    {
        return $this->hasMany(Months::className(), ['id_cat' => 'id']);
    }
}
