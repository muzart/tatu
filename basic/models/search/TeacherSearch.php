<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Teacher;

/**
 * TeacherSearch represents the model behind the search form about `app\models\Teacher`.
 */
class TeacherSearch extends Teacher
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'department_id'], 'integer'],
            [['fio', 'img', 'post', 'type', 'birthday', 'birthplace', 'nationality', 'partiya', 'degree', 'ended', 'specialization', 'science_degree', 'science_title', 'foreign_langs', 'gov_awards', 'deputy'], 'safe'],
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
        $query = Teacher::find();

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
            'user_id' => $this->user_id,
            'department_id' => $this->department_id,
        ]);

        $query->andFilterWhere(['like', 'fio', $this->fio])
            ->andFilterWhere(['like', 'img', $this->img])
            ->andFilterWhere(['like', 'post', $this->post])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'birthday', $this->birthday])
            ->andFilterWhere(['like', 'birthplace', $this->birthplace])
            ->andFilterWhere(['like', 'nationality', $this->nationality])
            ->andFilterWhere(['like', 'partiya', $this->partiya])
            ->andFilterWhere(['like', 'degree', $this->degree])
            ->andFilterWhere(['like', 'ended', $this->ended])
            ->andFilterWhere(['like', 'specialization', $this->specialization])
            ->andFilterWhere(['like', 'science_degree', $this->science_degree])
            ->andFilterWhere(['like', 'science_title', $this->science_title])
            ->andFilterWhere(['like', 'foreign_langs', $this->foreign_langs])
            ->andFilterWhere(['like', 'gov_awards', $this->gov_awards])
            ->andFilterWhere(['like', 'deputy', $this->deputy]);

        return $dataProvider;
    }
}
