<?php

namespace app\modules\contract\models;

use app\models\Student;
use app\models\Term;
use Yii;

/**
 * This is the model class for table "contract_payments".
 *
 * @property int $id
 * @property int $student_id Talaba
 * @property int $term_id Semestr
 * @property string $payment_date To'langan vaqti
 * @property int $payment_amount To'langan summa
 *
 * @property Student $student
 * @property Term $term
 */
class ContractPayments extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contract_payments';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['student_id', 'term_id', 'payment_date', 'payment_amount'], 'required'],
            [['student_id', 'term_id', 'payment_amount'], 'integer'],
            [['payment_date'], 'string', 'max' => 20],
            [['student_id'], 'exist', 'skipOnError' => true, 'targetClass' => Student::className(), 'targetAttribute' => ['student_id' => 'id']],
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
            'student_id' => Yii::t('app', 'Talaba'),
            'term_id' => Yii::t('app', 'Semestr'),
            'payment_date' => Yii::t('app', 'To\'langan vaqti'),
            'payment_amount' => Yii::t('app', 'To\'langan summa'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudent()
    {
        return $this->hasOne(Student::className(), ['id' => 'student_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTerm()
    {
        return $this->hasOne(Term::className(), ['id' => 'term_id']);
    }

    public function getSumma()
    {
        $summa = 0;
        $totals = ContractPayments::findAll(['student_id' => $this->student->id, 'term_id' => $this->term->id]);
        foreach ($totals as $total) {
            $summa += $total->payment_amount;
        }
        return $summa;
    }

    public function getTotal()
    {
        $total = ContractAmounts::find()->where(['direction_id' => $this->student->direction_id, 'term_id' => $this->term_id])->one()->total_amount;
        return $total;
    }

    public function restMoney()
    {
        $summa = 0;

//        $totalstudentspayment = ContractAmounts::find()->where(['direction_id' => $this->student->direction_id])->one()->total_amount;
        $totalstudentspayment = ContractAmounts::findOne(['direction_id' => $this->student->direction_id, 'term_id' => $this->term->id])->total_amount;
        $rest = $this->getTotal() - $summa;
        return $rest;
    }



}
