<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "settings".
 *
 * @property integer $id
 * @property string $university
 * @property string $address
 * @property string $tel
 * @property string $logo
 */
class Settings extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['university', 'address', 'tel'], 'required'],
            [['university', 'address', 'tel'], 'string', 'max' => 64],
            [['logo'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'university' => Yii::t('app', 'Университет'),
            'address' => Yii::t('app', 'Манзил'),
            'tel' => Yii::t('app', 'Тел'),
            'logo' => Yii::t('app', 'Логотип'),
        ];
    }
}
