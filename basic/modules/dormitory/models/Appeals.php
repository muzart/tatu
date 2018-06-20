<?php

namespace app\modules\dormitory\models;

use app\models\Student;
use app\models\Term;
use Yii;

/**
 * This is the model class for table "appeals".
 *
 * @property integer $id
 * @property integer $term_id
 * @property string $student_fio
 * @property integer $student_id
 * @property string $region
 * @property string $address
 * @property string $phone
 * @property string $date
 * @property string $status
 *
 * @property Student $student
 * @property Term $term
 */
class Appeals extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'appeals';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['term_id', 'student_fio', 'student_id', 'region', 'address', 'phone', 'date', 'status'], 'required'],
            [['term_id', 'student_id'], 'integer'],
            [['student_fio', 'region', 'address', 'status'], 'string', 'max' => 255],
            [['phone', 'date'], 'string', 'max' => 100],
            [['student_id'], 'exist', 'skipOnError' => true, 'targetClass' => Student::className(), 'targetAttribute' => ['student_id' => 'id']],
            [['term_id'], 'exist', 'skipOnError' => true, 'targetClass' => Term::className(), 'targetAttribute' => ['term_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'term_id' => Yii::t('app', 'Term ID'),
            'student_fio' => Yii::t('app', 'Student Fio'),
            'student_id' => Yii::t('app', 'Student ID'),
            'region' => Yii::t('app', 'Region'),
            'address' => Yii::t('app', 'Address'),
            'phone' => Yii::t('app', 'Phone'),
            'date' => Yii::t('app', 'Date'),
            'status' => Yii::t('app', 'Status'),
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
}
