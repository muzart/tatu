<?php

namespace app\modules\contract\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\contract\models\ContractPayments;

/**
 * ContractPaymentsSearch represents the model behind the search form of `app\modules\contract\models\ContractPayments`.
 */
class ContractPaymentsSearch extends ContractPayments
{

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'student_id', 'term_id', 'payment_amount',], 'integer'],
            [['payment_date'], 'safe'],
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
        $query = ContractPayments::find();
        $query->joinWith(['student']);
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
            'student_id' => $this->student_id,
            'term_id' => $this->term_id,
            'payment_amount' => $this->payment_amount,
        ]);
        $query->andFilterWhere(['like', 'payment_date', $this->payment_date]);

        return $dataProvider;
    }
}
