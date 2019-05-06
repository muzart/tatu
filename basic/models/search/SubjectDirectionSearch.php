<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SubjectDirection;

/**
 * SubjectDirectionSearch represents the model behind the search form of `app\models\SubjectDirection`.
 */
class SubjectDirectionSearch extends SubjectDirection
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'subject_id', 'direction_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = SubjectDirection::find();

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
            'subject_id' => $this->subject_id,
            'direction_id' => $this->direction_id,
        ]);

        return $dataProvider;
    }
}
