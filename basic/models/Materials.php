<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "materials".
 *
 * @property integer $id
 * @property integer $subject_id
 * @property string $studies_kind
 * @property string $topic
 * @property string $planned_hour
 * @property Subject $subject
 */
class Materials extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $file;

    public static function tableName()
    {
        return 'materials';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['subject_id', 'studies_kind', 'topic', 'planned_hour'], 'required'],
            [['subject_id'], 'integer'],
            [['studies_kind'], 'string'],
            [['topic'], 'string', 'max' => 255],
            [['planned_hour'], 'string', 'max' => 10],
            //[['file'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg', 'maxFiles' => 4],
            [['subject_id'], 'exist', 'skipOnError' => true, 'targetClass' => Subject::className(), 'targetAttribute' => ['subject_id' => 'id']],

        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'subject_id' => Yii::t('app', 'Fan Id'),
            'studies_kind' => Yii::t('app', 'Fan turi'),
            'topic' => Yii::t('app', 'Mavzu'),
            'planned_hour' => Yii::t('app', 'Ajratilgan soat'),
            'file' => Yii::t('app', 'file')
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
    public function getMaterialFiles()
    {
        return $this->hasMany(MaterialFiles::className(), ['material_id' => 'id']);
    }

    public function getFileUrl()
    {
        return 'uploads/materials/' . $this->getMaterialDir() . '/' . strtolower(str_replace(' ', '_', $this->file));
    }

    protected function getMaterialDir()
    {
        return strtolower(str_replace(' ', '_', $this->subject->name));
    }

    protected function fileUpload()
    {
        $files = UploadedFile::getInstances($this, 'file');
        if ($files) {
            foreach ($files as $file) {
                $path = 'uploads/materials/' . strtolower(str_replace(" ", "_", $this->subject->name));
                if (!file_exists($path)) {
                    mkdir($path);
                }
                $dir = strtolower(str_replace(" ", "_", $this->topic . "_" . $file->name)) . rand(1, 100) . "." . $file->extension;
                $file_path = 'uploads/materials/' . strtolower(str_replace(" ", "_", $this->subject->name)) . '/' . $dir;
                if ($file->saveAs($file_path)) {
                    $materialFile = new MaterialFiles();
                    $materialFile->material_id = $this->id;
                    $materialFile->file_path = $file_path;
                    $materialFile->save(false);
                }
            }
        }
    }

    public function beforeDelete()
    {
        $files = $this->materialFiles;
        foreach ($files as $file) {
            try {
                unlink($file->file_path);
            } catch (\Exception $e) {
                print $e->getMessage();
            }
        }
        return parent::beforeDelete();
    }

    public function afterSave($insert, $changedAttributes)
    {
        $this->fileUpload();
        return true;
    }

    public function beforeSave($insert)
    {
        return parent::beforeSave($insert);
    }
}

