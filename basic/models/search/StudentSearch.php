<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Student;

/**
 * StudentSearch represents the model behind the search form about `app\models\Student`.
 */
class StudentSearch extends Student
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'direction_id', 'created', 'updated', 'user_id'], 'integer'],
            [['reyting_no', 'surname', 'name', 'patronymic', 'birthday', 'birthplace', 'education', 'workplace', 'father_name', 'father_workplace', 'father_phone', 'mother_name', 'mother_workplace', 'mother_phone', 'family_status', 'passport_serie', 'passport_number', 'passport_given', 'parents_address', 'address', 'living_type', 'nationality', 'photo'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Student::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'direction_id' => $this->direction_id,
            'created' => $this->created,
            'updated' => $this->updated,
            'user_id' => $this->user_id,
        ]);

        $query->andFilterWhere(['like', 'reyting_no', $this->reyting_no])
            ->andFilterWhere(['like', 'surname', $this->surname])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'patronymic', $this->patronymic])
            ->andFilterWhere(['like', 'birthday', $this->birthday])
            ->andFilterWhere(['like', 'birthplace', $this->birthplace])
            ->andFilterWhere(['like', 'education', $this->education])
            ->andFilterWhere(['like', 'workplace', $this->workplace])
            ->andFilterWhere(['like', 'father_name', $this->father_name])
            ->andFilterWhere(['like', 'father_workplace', $this->father_workplace])
            ->andFilterWhere(['like', 'father_phone', $this->father_phone])
            ->andFilterWhere(['like', 'mother_name', $this->mother_name])
            ->andFilterWhere(['like', 'mother_workplace', $this->mother_workplace])
            ->andFilterWhere(['like', 'mother_phone', $this->mother_phone])
            ->andFilterWhere(['like', 'family_status', $this->family_status])
            ->andFilterWhere(['like', 'passport_serie', $this->passport_serie])
            ->andFilterWhere(['like', 'passport_number', $this->passport_number])
            ->andFilterWhere(['like', 'passport_given', $this->passport_given])
            ->andFilterWhere(['like', 'parents_address', $this->parents_address])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'living_type', $this->living_type])
            ->andFilterWhere(['like', 'nationality', $this->nationality])
            ->andFilterWhere(['like', 'photo', $this->photo]);

        return $dataProvider;
    }
}
