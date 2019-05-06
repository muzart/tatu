<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "subject".
 *
 * @property int $id
 * @property string $name
 * @property int $department_id
 * @property array $terms
 * @property array $directions
 * @property array $subject_type
 *
 * @property LessonType[] $lessonTypes
 * @property Marks[] $marks
 * @property Materials[] $materials
 * @property PlanSubjectTeacher[] $planSubjectTeachers
 * @property PlanSubjectType[] $planSubjectTypes
 * @property ScheduleItem[] $scheduleItems
 * @property Department $department
 * @property SubjectDirection[] $subjectDirections
 * @property SubjectTerm[] $subjectTerms
 */
class Subject extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */

    public $terms = array();
    public $directions = array();
    public $subject_type = array();

    public static function tableName()
    {
        return 'subject';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'department_id', 'terms','directions','subject_type'], 'required'],
            [['department_id'], 'integer'],
            [['name'], 'string', 'max' => 100],
            [['department_id'], 'exist', 'skipOnError' => true, 'targetClass' => Department::className(), 'targetAttribute' => ['department_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'department_id' => Yii::t('app', 'Department ID'),
            'terms' => Yii::t('app', 'Terms'),
            'directions' => Yii::t('app', 'Directions'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLessonTypes()
    {
        return $this->hasMany(LessonType::className(), ['subject_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMarks()
    {
        return $this->hasMany(Marks::className(), ['subject_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMaterials()
    {
        return $this->hasMany(Materials::className(), ['subject_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlanSubjectTeachers()
    {
        return $this->hasMany(PlanSubjectTeacher::className(), ['subject_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlanSubjectTypes()
    {
        return $this->hasMany(PlanSubjectType::className(), ['subject_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getScheduleItems()
    {
        return $this->hasMany(ScheduleItem::className(), ['subject_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDepartment()
    {
        return $this->hasOne(Department::className(), ['id' => 'department_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubjectDirections()
    {
        return $this->hasMany(SubjectDirection::className(), ['subject_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubjectTerms()
    {
        return $this->hasMany(SubjectTerm::className(), ['subject_id' => 'id']);
    }


    public function afterSave($insert, $changedAttributes)
    {

        $terms = $this->terms;

        foreach ($terms as $term){
            if(is_array($term)){
                foreach ($term['directions'] as $direction){
                    foreach ($direction['subject_type'] as $id => $hour){
                        $plan = new PlanSubjectType();
                        $plan->hour = $hour;
                        $plan->subject_type_id = $id;
                        $plan->subject_id = $this->id;
                        $plan->save();
                        $plan->validate(false);
                    }
                }
            }
        }
        foreach ($this->terms as $term) {
            $SubjectTermModel = new SubjectTerm();
            //print_r($term);
            $SubjectTermModel->term_id = $term;
            $SubjectTermModel->subject_id = $this->id;
            $SubjectTermModel->save(false);
        }
        //die();
        foreach ($this->directions as $direction) {
            $SubjectDirectionModel = new SubjectDirection();
            $SubjectDirectionModel->direction_id = $direction;
            $SubjectDirectionModel->subject_id = $this->id;
            $SubjectDirectionModel->save(false);

        }
        foreach ($this->subject_type as $item) {
            $SubjectType = new PlanSubjectType();
            $SubjectType->subject_type_id = $item;
            //$SubjectDirectionModel->subject_id = $this->id;
            $SubjectDirectionModel->save(false);

        }

        parent::afterSave($insert, $changedAttributes); // TODO: Change the autogenerated stub
    }

    public function getTermsDropdown()
    {
        $listTerms = Term::find()->select('id,name')->all();
        $list = ArrayHelper::map($listTerms, 'id', 'name');
        return $list;
    }

    public function getDirectionDropdown()
    {
        $listTerms = Direction::find()->select('id,name')->all();
        $list = ArrayHelper::map($listTerms, 'id', 'name');
        return $list;
    }
    public function getSubjectTypeDropdown()
    {
        $listTerms = SubjectType::find()->select('id,name')->all();
        $list = ArrayHelper::map($listTerms, 'id', 'name');
        return $list;
    }

}
