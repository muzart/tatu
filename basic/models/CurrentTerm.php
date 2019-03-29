<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "current_term".
 *
 * @property int $id
 * @property int $current_term_id
 *
 * @property Term $currentTerm
 */
class CurrentTerm extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'current_term';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['current_term_id'], 'required'],
            [['current_term_id'], 'integer'],
            [['current_term_id'], 'exist', 'skipOnError' => true, 'targetClass' => Term::className(), 'targetAttribute' => ['current_term_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'current_term_id' => Yii::t('app', 'Current Term ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCurrentTerm()
    {
        return $this->hasOne(Term::className(), ['id' => 'current_term_id']);
    }
}
