<?php

namespace app\modules\marketing\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\marketing\models\ContractTwo;

/**
 * ContractTwoSearch represents the model behind the search form of `app\modules\marketing\models\ContractTwo`.
 */
class ContractTwoSearch extends ContractTwo
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'month_id', 'sum', 'contract_id'], 'integer'],
            [['current_date'], 'safe'],
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
        $query = ContractTwo::find();

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
            'month_id' => $this->month_id,
            'sum' => $this->sum,
            'contract_id' => $this->contract_id,
        ]);

        $query->andFilterWhere(['like', 'current_date', $this->current_date]);

        return $dataProvider;
    }
}
