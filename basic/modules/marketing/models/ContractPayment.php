<?php

namespace app\modules\marketing\models;

use Yii;

/**
 * This is the model class for table "contract_payment".
 *
 * @property int $id
 * @property int $total_real
 * @property string $start_date
 */
class ContractPayment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contract_payment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['total_real', 'start_date'], 'required'],
            [['total_real'], 'integer'],
            [['start_date'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'total_real' => 'Total Real',
            'start_date' => 'Start Date',
        ];
    }

}
