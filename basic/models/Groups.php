<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "groups".
 *
 * @property integer $id
 * @property string $name
 * @property integer $group_head_id
 * @property integer $direction_id
 * @property integer $course
 * @property integer $faculty_id
 *
 * @property Teacher $groupHead
 * @property Direction $direction
 * @property Faculty $faculty
 */
class Groups extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'groups';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'group_head_id', 'direction_id', 'faculty_id'], 'required'],
            [['group_head_id', 'direction_id', 'course', 'faculty_id'], 'integer'],
            [['name'], 'string', 'max' => 10],
            [['group_head_id'], 'exist', 'skipOnError' => true, 'targetClass' => Teacher::className(), 'targetAttribute' => ['group_head_id' => 'id']],
            [['direction_id'], 'exist', 'skipOnError' => true, 'targetClass' => Direction::className(), 'targetAttribute' => ['direction_id' => 'id']],
            [['faculty_id'], 'exist', 'skipOnError' => true, 'targetClass' => Faculty::className(), 'targetAttribute' => ['faculty_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Nomi'),
            'group_head_id' => Yii::t('app', 'Guruh murabbiyi'),
            'direction_id' => Yii::t('app', 'Йўналиш'),
            'course' => Yii::t('app', 'Курс'),
            'faculty_id' => Yii::t('app', 'Факультет'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGroupHead()
    {
        return $this->hasOne(Teacher::className(), ['id' => 'group_head_id']);
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
    public function getFaculty()
    {
        return $this->hasOne(Faculty::className(), ['id' => 'faculty_id']);
    }
}
