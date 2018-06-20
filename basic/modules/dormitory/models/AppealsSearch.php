<?php

namespace app\modules\dormitory\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\dormitory\models\Appeals;

/**
 * AppealsSearch represents the model behind the search form about `app\modules\dormitory\models\Appeals`.
 */
class AppealsSearch extends Appeals
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'term_id', 'student_id'], 'integer'],
            [['student_fio', 'region', 'address', 'phone', 'date', 'status'], 'safe'],
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
        $query = Appeals::find();

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
            'term_id' => $this->term_id,
            'student_id' => $this->student_id,
        ]);

        $query->andFilterWhere(['like', 'student_fio', $this->student_fio])
            ->andFilterWhere(['like', 'region', $this->region])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'date', $this->date])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
