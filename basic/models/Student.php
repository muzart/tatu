<?php

namespace app\models;

use Yii;

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
 *
 * @property Direction $direction
 * @property User $user
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
            [['reyting_no', 'direction_id', 'surname', 'name', 'living_type', 'nationality', 'user_id'], 'required'],
            [['direction_id', 'created', 'updated', 'user_id'], 'integer'],
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
            [['photo'], 'string', 'max' => 255],
            [['reyting_no'], 'unique'],
            [['direction_id'], 'exist', 'skipOnError' => true, 'targetClass' => Direction::className(), 'targetAttribute' => ['direction_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'reyting_no' => Yii::t('app', 'Reyting daftarchasi nomeri'),
            'direction_id' => Yii::t('app', 'Mutaxassislik'),
            'surname' => Yii::t('app', 'Familiyasi'),
            'name' => Yii::t('app', 'Ismi'),
            'patronymic' => Yii::t('app', 'Sharifi'),
            'birthday' => Yii::t('app', 'Tug\'ilgan sanasi'),
            'birthplace' => Yii::t('app', 'Tug\'ilgan joyi'),
            'education' => Yii::t('app', 'Ma\'lumoti'),
            'workplace' => Yii::t('app', 'O\'qishga kirgunga qadar ish joyi'),
            'father_name' => Yii::t('app', 'Otasi FIO'),
            'father_workplace' => Yii::t('app', 'Otasi ish-joyi'),
            'father_phone' => Yii::t('app', 'Otasi tel. no.'),
            'mother_name' => Yii::t('app', 'Onasi FIO'),
            'mother_workplace' => Yii::t('app', 'Onasi ish joyi'),
            'mother_phone' => Yii::t('app', 'Onasi tel. no.'),
            'family_status' => Yii::t('app', 'Oilaviy ahvoli'),
            'passport_serie' => Yii::t('app', 'Pasport seriyasi'),
            'passport_number' => Yii::t('app', 'Pasport raqami'),
            'passport_given' => Yii::t('app', 'Kim tomonidan va qachon berilgan'),
            'parents_address' => Yii::t('app', 'Ota-onasining manzili, telefoni'),
            'address' => Yii::t('app', 'Uy manzili, shu jumladan, ijara uy, TTJ, telefon'),
            'living_type' => Yii::t('app', 'Yashash turi'),
            'created' => Yii::t('app', 'Yaratilgan vaqti'),
            'updated' => Yii::t('app', 'Tahrirlangan vaqti'),
            'nationality' => Yii::t('app', 'Millati'),
            'photo' => Yii::t('app', 'Rasmi'),
            'user_id' => Yii::t('app', 'Foydalanuvchi ID'),
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
}
