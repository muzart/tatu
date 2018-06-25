<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Subject;

/**
 * SubjectSearch represents the model behind the search form about `app\models\Subject`.
 */
class SubjectSearch extends Subject
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'direction_id', 'semester_id', 'lecturer_id', 'practice_id', 'lab1_id', 'lab2_id', 'department_id', 'lecture_hour', 'practice_hour', 'lab_hour','seminar','seminar_id', 'independent_hour','s1', 's2', 's3', 's4', 's5', 's6', 's7', 's8'], 'integer'],
            [['name'], 'safe'],
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
        $query = Subject::find();

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
            'semester_id' => $this->semester_id,
            'lecturer_id' => $this->lecturer_id,
            'practice_id' => $this->practice_id,
            'lab1_id' => $this->lab1_id,
            'lab2_id' => $this->lab2_id,
            'department_id' => $this->department_id,
            'lecture_hour' => $this->lecture_hour,
            'practice_hour' => $this->practice_hour,
            'lab_hour' => $this->lab_hour,
            'seminar' => $this->seminar,
            'seminar_id' => $this->seminar_id,

            'independent_hour' => $this->independent_hour,
            's1' => $this->s1,
            's2' => $this->s2,
            's3' => $this->s3,
            's4' => $this->s4,
            's5' => $this->s5,
            's6' => $this->s6,
            's7' => $this->s7,
            's8' => $this->s8,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name]);

        return $dataProvider;
    }
}
