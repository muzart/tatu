<?php

namespace app\modules\marketing\models;

use Yii;

/**
 * This is the model class for table "months".
 *
 * @property int $id
 * @property int $id_cat
 * @property string $month
 *
 * @property Category[] $cat
 * "property ContractTwo[]  $contract
 */
class Months extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'months';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_cat', 'month'], 'required'],
            [['id_cat'], 'integer'],
            [['month'], 'string'],
            [['id_cat'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['id_cat' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_cat' => 'Id Cat',
            'month' => 'Month',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCat()
    {
        return $this->hasOne(Category::className(), ['id' => 'id_cat']);
    }

//    public function  getContract(){
//        return $this->hasOne(ContractTwo::className(),['month_id'=>'id']);
//    }

}
