<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "teacher".
 *
 * @property integer $id
 * @property string $fio
 * @property integer $user_id
 * @property integer $department_id
 * @property string $img
 * @property string $post
 * @property string $type
 * @property string $birthday
 * @property string $birthplace
 * @property string $nationality
 * @property string $partiya
 * @property string $degree
 * @property string $ended
 * @property string $specialization
 * @property string $science_degree
 * @property string $science_title
 * @property string $foreign_langs
 * @property string $gov_awards
 * @property string $deputy
 * @property string $started_work
 * @property User $user
 * @property Department $department
 */
class Teacher extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'teacher';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fio', 'user_id', 'department_id', 'post', 'type'], 'required'],
            [['fio', 'type', 'gov_awards'], 'string'],
            [['user_id', 'department_id'], 'integer'],
            [['img'], 'string', 'max' => 255],
            [['post', 'partiya', 'specialization', 'science_degree', 'science_title', 'foreign_langs'], 'string', 'max' => 32],
            [['birthday', 'degree'], 'string', 'max' => 16],
            [['fio','birthplace', 'ended', 'deputy'], 'string', 'max' => 64],
            [['nationality'], 'string', 'max' => 20],
            [['started_work'], 'string', 'max' => 25],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['department_id'], 'exist', 'skipOnError' => true, 'targetClass' => Department::className(), 'targetAttribute' => ['department_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'fio' => Yii::t('app', 'ФИО'),
            'user_id' => Yii::t('app', 'Фойдаланувчи'),
            'department_id' => Yii::t('app', 'Кафедра'),
            'img' => Yii::t('app', 'Расм'),
            'post' => Yii::t('app', 'Лавозим'),
            'type' => Yii::t('app', 'Тури'),
            'birthday' => Yii::t('app', 'Туғилган йили'),
            'birthplace' => Yii::t('app', 'Туғилган жойи'),
            'nationality' => Yii::t('app', ' Миллати'),
            'partiya' => Yii::t('app', 'Партиявийлиги'),
            'degree' => Yii::t('app', 'Маълумоти'),
            'ended' => Yii::t('app', 'Тамомлаган'),
            'specialization' => Yii::t('app', 'Маълумоти бўйича мутахассислиги'),
            'science_degree' => Yii::t('app', 'Илмий даражаси'),
            'science_title' => Yii::t('app', 'Илмий унвони'),
            'foreign_langs' => Yii::t('app', 'Кайси чет тилларини билади'),
            'gov_awards' => Yii::t('app', 'Давлат мукофотлари билан тақдирланганми (қанақа)'),
            'deputy' => Yii::t('app', 'Халқ депутатлари, республика, вилоят, шаҳар ва туман Кенгаши депутатими ёки бошқа  сайланадиган органларнинг аъзосими (тўлиқ кўрсатилиши лозим)'),
            'started_work' => Yii::t('app', 'Started Work'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDepartment()
    {
        return $this->hasOne(Department::className(), ['id' => 'department_id']);
    }

    public function getImageUrl(){
        return 'uploads/departments/'.$this->getDepartmentDir().'/'.strtolower(str_replace(' ','_',$this->img));
    }

    protected function getDepartmentDir(){
        return strtolower(str_replace(' ','_',$this->department->name));
    }
    protected function imgUpload()
    {
        $image = UploadedFile::getInstance($this, 'img');
        if ($image) {
            $path = 'uploads/departments/' . strtolower(str_replace(" ", "_", $this->department->name));
            if (!file_exists($path)) {
                mkdir($path);

            }


            $dir = strtolower(str_replace(" ", "_", $this->fio)) . "." . $image->extension;
            $file_path = 'uploads/departments/' . strtolower(str_replace(" ", "_", $this->department->name)) . '/' . $dir;
            $image->saveAs($file_path);

            $this->img = $dir;

        }


    }

    public function beforeValidate()
    {
        $this->imgUpload();
        return true;

    }


    public function beforeSave($insert)
    {
        return parent::beforeSave($insert);

    }

}
