<?php

namespace app\modules\dormitory\models;

use app\models\Student;
use Yii;

/**
 * This is the model class for table "payments".
 *
 * @property integer $id
 * @property string $month
 * @property string $year
 * @property string $payed
 * @property integer $student_id
 *
 * @property Student $student
 */
class Payments extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'payments';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['month', 'year', 'payed', 'student_id'], 'required'],
            [['student_id'], 'integer'],
            [['month', 'year', 'payed'], 'string', 'max' => 100],
            [['student_id'], 'exist', 'skipOnError' => true, 'targetClass' => Student::className(), 'targetAttribute' => ['student_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'month' => Yii::t('app', 'Month'),
            'year' => Yii::t('app', 'Year'),
            'payed' => Yii::t('app', 'Payed'),
            'student_id' => Yii::t('app', 'Student ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudent()
    {
        return $this->hasOne(Student::className(), ['id' => 'student_id']);
    }
}
