<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "student".
 *
 * @property integer $id
 * @property string $reyting_no
 * @property integer $direction_id
 * @property string $surname
 * @property string $name
 * @property string $patronymic
 * @property string $birthday
 * @property string $birthplace
 * @property string $education
 * @property string $workplace
 * @property string $father_name
 * @property string $father_workplace
 * @property string $father_phone
 * @property string $mother_name
 * @property string $mother_workplace
 * @property string $mother_phone
 * @property string $family_status
 * @property string $passport_serie
 * @property string $passport_number
 * @property string $passport_given
 * @property string $parents_address
 * @property string $address
 * @property string $living_type
 * @property integer $created
 * @property integer $updated
 * @property string $nationality
 * @property string $photo
 * @property integer $user_id
 * @property integer $group_id
 *
 * @property Direction $direction
 * @property User $user
 * @property Groups $group
 */
class Student extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'student';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['reyting_no', 'direction_id', 'surname', 'name', 'living_type', 'nationality'], 'required'],
            [['direction_id', 'created', 'updated', 'group_id'], 'integer'],
            [['living_type'], 'string'],
            [['reyting_no'], 'string', 'max' => 10],
            [['surname', 'name', 'patronymic'], 'string', 'max' => 24],
            [['birthday'], 'string', 'max' => 12],
            [['birthplace', 'father_name', 'mother_name', 'passport_given'], 'string', 'max' => 64],
            [['education', 'workplace', 'father_workplace', 'mother_workplace', 'family_status'], 'string', 'max' => 100],
            [['father_phone', 'mother_phone'], 'string', 'max' => 20],
            [['passport_serie'], 'string', 'max' => 3],
            [['passport_number'], 'string', 'max' => 8],
            [['parents_address', 'address'], 'string', 'max' => 128],
            [['nationality'], 'string', 'max' => 16],
//            [['photo'], 'string', 'max' => 255],
            [['reyting_no'], 'unique'],
            [['direction_id'], 'exist', 'skipOnError' => true, 'targetClass' => Direction::className(), 'targetAttribute' => ['direction_id' => 'id']],
//            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['group_id'], 'exist', 'skipOnError' => true, 'targetClass' => Groups::className(), 'targetAttribute' => ['group_id' => 'id']],
        ];
    }

    /**
     *     [2] => Cannot add or update a child row: a foreign key constraint fails (`talaba`.`student`, CONSTRAINT `student_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON UPDATE CASCADE)
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'reyting_no' => Yii::t('app', 'Рейтинг дафтарчаси номери'),
            'direction_id' => Yii::t('app', 'Мутахассислик'),
            'surname' => Yii::t('app', 'Фамилия'),
            'name' => Yii::t('app', 'Исм'),
            'patronymic' => Yii::t('app', 'Шариф'),
            'birthday' => Yii::t('app', 'Туғилган санаси'),
            'birthplace' => Yii::t('app', 'Туғилган жойи'),
            'education' => Yii::t('app', 'Маълумоти'),
            'workplace' => Yii::t('app', 'Ўқишга  киргунга қадар иш жойи '),
            'father_name' => Yii::t('app', 'Otasining F.I.Sh.'),
            'father_workplace' => Yii::t('app', 'Father Workplace'),
            'father_phone' => Yii::t('app', 'Father Phone'),
            'mother_name' => Yii::t('app', 'Onasining F.I.Sh.'),
            'mother_workplace' => Yii::t('app', 'Mother Workplace'),
            'mother_phone' => Yii::t('app', 'Mother Phone'),
            'family_status' => Yii::t('app', 'Оилавий аҳволи'),
            'passport_serie' => Yii::t('app', 'Паспорт серияси'),
            'passport_number' => Yii::t('app', 'Паспорт рақами'),
            'passport_given' => Yii::t('app', 'ким томонидан ва қачон берилган'),
            'parents_address' => Yii::t('app', 'Ота-онасининг манзили, телефони'),
            'address' => Yii::t('app', 'Уй манзили, шу жумладан ижара уй, талабалар турар жойи, телефон'),
            'living_type' => Yii::t('app', 'Яшаш тури'),
            'created' => Yii::t('app', 'Яратилган вакти'),
            'updated' => Yii::t('app', 'Тахрирланган вакти'),
            'nationality' => Yii::t('app', 'Миллати'),
            'photo' => Yii::t('app', 'Photo'),
            'user_id' => Yii::t('app', 'User ID'),
            'group_id' => Yii::t('app', 'Group ID'),
        ];
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
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGroup()
    {
        return $this->hasOne(Groups::className(), ['id' => 'group_id']);
    }

    protected function imgUpload()
    {
        $image = UploadedFile::getInstance($this, 'photo');
        if ($image) {
            $path = 'uploads/groups/' . $this->group->name;
            if (!file_exists($path)) {
                mkdir($path);
            }
            $file_name = strtolower($this->name . "_" . $this->surname . ".") . $image->extension;
            $file_path = 'uploads/groups/' . $this->group->name . '/' . $file_name;
            $image->saveAs($file_path);
            $this->photo = $file_name;
        }
    }

    public function beforeValidate()
    {
        $this->imgUpload();
        return true;
    }


    public function beforeSave($insert)
    {
        $user = new \app\models\User();
        if ($user->load(Yii::$app->request->post())) {
            $user->save();
        }
        return parent::beforeSave($insert);
    }

}
