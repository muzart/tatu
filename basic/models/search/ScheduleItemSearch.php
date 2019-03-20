<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ScheduleItem;

/**
 * ScheduleItemSearch represents the model behind the search form of `app\models\ScheduleItem`.
 */
class ScheduleItemSearch extends ScheduleItem
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'subject_id', 'teacher_id', 'room_id', 'group_id', 'term_id'], 'integer'],
            [['subject_type', 'day', 'pair'], 'safe'],
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
        $query = ScheduleItem::find();

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
            'teacher_id' => $this->teacher_id,
            'room_id' => $this->room_id,
            'group_id' => $this->group_id,
            'term_id' => $this->term_id,
        ]);

        $query->andFilterWhere(['like', 'subject_type', $this->subject_type])
            ->andFilterWhere(['like', 'day', $this->day])
            ->andFilterWhere(['like', 'pair', $this->pair]);

        return $dataProvider;
    }
}
