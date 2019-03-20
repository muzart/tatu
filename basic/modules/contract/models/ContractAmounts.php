<?php

namespace app\modules\contract\models;

use app\models\Direction;
use app\models\Term;
use app\models\Student;
use Yii;

/**
 * This is the model class for table "contract_amounts".
 *
 * @property int $id
 * @property int $total_amount To'lanishi kerak bo'lgan umumiy summa
 * @property int $term_id Semestr
 * @property int $direction_id Yo'nalish
 * @property string $deadline Ohirgi muddat
 *
 * @property Direction $direction
 * @property Term $term
 */
class ContractAmounts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contract_amounts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['total_amount', 'term_id', 'direction_id', 'deadline'], 'required'],
            [['total_amount', 'term_id', 'direction_id'], 'integer'],
            [['deadline'], 'string', 'max' => 100],
            [['direction_id'], 'exist', 'skipOnError' => true, 'targetClass' => Direction::className(), 'targetAttribute' => ['direction_id' => 'id']],
            [['term_id'], 'exist', 'skipOnError' => true, 'targetClass' => Term::className(), 'targetAttribute' => ['term_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'total_amount' => Yii::t('app', 'To\'lanishi kerak bo\'lgan umumiy summa'),
            'term_id' => Yii::t('app', 'Semestr'),
            'direction_id' => Yii::t('app', 'Yo\'nalish'),
            'deadline' => Yii::t('app', 'Ohirgi muddat'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDirection()
    {
        return $this->hasOne(Direction::className(), ['id' => 'direction_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTerm()
    {
        return $this->hasOne(Term::className(), ['id' => 'term_id']);
    }

}
