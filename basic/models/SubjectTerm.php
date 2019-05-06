<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "subject_term".
 *
 * @property int $id
 * @property int $subject_id
 * @property int $term_id
 *
 * @property Subject $subject
 * @property Term $term
 */
class SubjectTerm extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'subject_term';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['subject_id', 'term_id'], 'required'],
            [['subject_id', 'term_id'], 'integer'],
            [['subject_id'], 'exist', 'skipOnError' => true, 'targetClass' => Subject::className(), 'targetAttribute' => ['subject_id' => 'id']],
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
            'subject_id' => Yii::t('app', 'Subject ID'),
            'term_id' => Yii::t('app', 'Term ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubject()
    {
        return $this->hasOne(Subject::className(), ['id' => 'subject_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTerm()
    {
        return $this->hasOne(Term::className(), ['id' => 'term_id']);
    }
}
