<?php

namespace app\modules\contract\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\contract\models\ContractAmounts;

/**
 * ContractAmountsSearch represents the model behind the search form of `app\modules\contract\models\ContractAmounts`.
 */
class ContractAmountsSearch extends ContractAmounts
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'total_amount', 'term_id', 'direction_id'], 'integer'],
            [['deadline'], 'safe'],
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
        $query = ContractAmounts::find();

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
            'total_amount' => $this->total_amount,
            'term_id' => $this->term_id,
            'direction_id' => $this->direction_id,
        ]);

        $query->andFilterWhere(['like', 'deadline', $this->deadline]);

        return $dataProvider;
    }
}
