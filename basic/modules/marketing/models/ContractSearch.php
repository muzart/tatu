<?php

namespace app\modules\marketing\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\marketing\models\Contract;

/**
 * ContractSearch represents the model behind the search form about `app\modules\contract\models\Contract`.
 */
class ContractSearch extends Contract
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'faculty_id', 'group_id', 'contract', 'full_paid', 'half_paid', 'total_rest', 'total_real', 'total_plan'], 'integer'],
            [['fio'], 'safe'],
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
        $query = Contract::find();

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
            'faculty_id' => $this->faculty_id,
            'group_id' => $this->group_id,
            'contract' => $this->contract,
            'full_paid' => $this->full_paid,
            'half_paid' => $this->half_paid,
            'total_rest' => $this->total_rest,
            'total_real' => $this->total_real,
            'total_plan' => $this->total_plan,


        ]);

        $query->andFilterWhere(['like', 'fio', $this->fio]);


        return $dataProvider;
    }
}
