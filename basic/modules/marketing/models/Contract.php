<?php

namespace app\modules\marketing\models;

use app\models\Faculty;
use app\models\Groups;
use Yii;

/**
 * This is the model class for table "contract".
 *
 * @property integer $id
 * @property string $fio
 * @property integer $faculty_id
 * @property integer $group_id
 * @property integer $contract
 * @property integer $full_paid
 * @property integer $half_paid
 * @property integer $total_rest
 * @property integer $total_real
 * @property integer $total_plan
 *
 * @property Faculty $faculty
 * @property Groups[] $group
 * "property  Months[] $months
 */
class Contract extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contract';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fio', 'faculty_id', 'group_id', 'contract', 'full_paid', 'half_paid', 'total_plan'], 'required'],
            [['faculty_id', 'group_id', 'contract', 'full_paid', 'half_paid', 'total_rest', 'total_plan'], 'integer'],
            [['fio'], 'string', 'max' => 100],
            [['faculty_id'], 'exist', 'skipOnError' => true, 'targetClass' => Faculty::className(), 'targetAttribute' => ['faculty_id' => 'id']],
            [['group_id'], 'exist', 'skipOnError' => true, 'targetClass' => Groups::className(), 'targetAttribute' => ['group_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fio' => Yii::t('app','fio'),
            'faculty_id' =>Yii::t('app','faculty_id'),
            'group_id' => Yii::t('app','group_id'),
            'contract' => Yii::t('app','contract'),
            'full_paid' => Yii::t('app','full_paid'),
            'half_paid' => Yii::t("app",'half_paid'),
            'total_rest' => Yii::t("app",'total_rest'),
            'total_plan' => Yii::t('app','total_plan'),

        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFaculty()
    {
        return $this->hasOne(Faculty::className(), ['id' => 'faculty_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGroup()
    {
        return $this->hasOne(Groups::className(), ['id' => 'group_id']);
    }
    public function getMonths()
    {
        return $this->hasOne(Months::className(), ['id' => 'month_id']);
    }
}
