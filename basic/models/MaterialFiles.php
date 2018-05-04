<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "material_files".
 *
 * @property integer $id
 * @property integer $material_id
 * @property string $file_path
 *
 * @property Materials $material
 */
class MaterialFiles extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'material_files';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['material_id', 'file_path'], 'required'],
            [['material_id'], 'integer'],
            [['file_path'], 'string', 'max' => 255],
            [['material_id'], 'exist', 'skipOnError' => true, 'targetClass' => Materials::className(), 'targetAttribute' => ['material_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'material_id' => Yii::t('app', 'Material ID'),
            'file_path' => Yii::t('app', 'File Path'),
        ];
    }


    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMaterial()
    {
        return $this->hasMany(Materials::className(), ['material_id' => 'id']);
    }

}
